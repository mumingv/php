<?php  
/** 
 * cURL批量处理
 *  
 */  

require_once dirname(__FILE__).'/profiler/src/Profiler.php';
use \Vega\Profiler\Profiler;
class Common_CurlMulti {  
    /** 
     * 等待所有cURL批处理中的活动连接等待响应时间 
     * @var int 
     */  
    private $timeout = 5;  

    /** 
     * cRUL配置 
     * @var array 
     */  
    private $options = array(
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_CONNECTTIMEOUT => 3
    );  

    /** 
     * 请求头 
     * @var array 
     */  
    private $headers        = array ();  

    /** 
     * 请求队列 
     * @var array 
     */  
    private $requests       = array ();  

    /**
     * bns_rename 
     * @var string
     * @access private
     */
    private $bnsRenameArr = array();

    /**
     * server 
     * @var array
     * @access private
     */
    private $serverArr = array();

    /** 
     * 请求队列索引 
     * @var array 
     */  
    private $request_map    = array ();  

    /**
     * 请求结果
     * @var array
     */
    private $results = array();

    /**
     * __construct 
     * @param array $requests 
     * @access public
     * @return void
     */
    public function __construct($requests = array(), $bnsRenameArr = array()) {
        $this->requests = $requests; 
        $this->bnsRenameArr = $bnsRenameArr;
    }

    /** 
     * 执行cURL 
     * @access public 
     * @param int $size 最大连接数 
     * @return Ambigous <boolean, mixed>|boolean 
     */  
    public function execute($size = 3, $logArr = array()) {
        Profiler::start(__CLASS__.'::'.__FUNCTION__.':getipport');
        // 获取目标机器的IP和端口
        foreach ($this->bnsRenameArr as $bnsRename) {
            $service = ral_get_service($bnsRename);
            if (!$service) {
#                Bd_Log::notice(__CLASS__."::".__FUNCTION__.": ral_get_service() return fail.  bns_rename: ".$this->bns_rename, 1, $logArr);
                $this->serverArr[$bnsRename] = array();
            } else {
                $this->serverArr[$bnsRename] = $service['server'];
            }
        }
        Profiler::end(__CLASS__.'::'.__FUNCTION__.':getipport');
        return $this->rolling_curl($size);  
    }

    /** 
     * 多个url请求 
     * @access private 
     * @param int $size 最大连接数 
     * @return boolean 
     */  
    private function rolling_curl($size) {  
        Profiler::start(__CLASS__.'::'.__FUNCTION__.':total');
        //print_r($this->requests);exit;

        // 添加cURL连接资源句柄到map索引  
        Profiler::start(__CLASS__.'::'.__FUNCTION__.':init');
        $master = curl_multi_init();  
        foreach ($this->requests as $bnsRename => $request) {
            //print_r($request);exit;
            $this->results[$bnsRename] = '';

            //print_r($this->serverArr);exit;
            if (array_key_exists($bnsRename, $this->serverArr)) {
                $urlOrigin = $request['url'];
                $randKey = array_rand($this->serverArr[$bnsRename]);
            }
            //print_r($randKey);
            for ($count = 0; $count < $size; $count++) {
                // 改写请求中的URL
                if (array_key_exists($bnsRename, $this->serverArr)) {
                    $urlRewrite = $urlOrigin;
                    $randKey = ($randKey + 1) % count($this->serverArr[$bnsRename]);
                    //print_r($randKey);
                    //print_r($this->serverArr[$bnsRename]);exit;
                    if (array_key_exists($bnsRename, $this->serverArr)) {
                        $urlRewrite = str_replace('<IP>', $this->serverArr[$bnsRename][$randKey]['ip'], $urlRewrite);
                        $urlRewrite = str_replace('<PORT>', $this->serverArr[$bnsRename][$randKey]['port'], $urlRewrite);
                        $request['url'] = $urlRewrite;
                    }
                }
                //print_r($urlRewrite);exit;
                //print_r($request);exit;
                $ch = curl_init();
                $options = $this->get_options($request);  
                curl_setopt_array($ch, $options);  
                curl_multi_add_handle($master, $ch);  
                //$this->request_map[$request['url']][] = array('key' => $bnsRename, 'ch' => $ch);
                $this->request_map[$bnsRename][] = array('url' => $request['url'], 'ch' => $ch);
            }
        }
        //print_r($this->request_map);exit;
        Profiler::end(__CLASS__.'::'.__FUNCTION__.':init');

        Profiler::start(__CLASS__.'::'.__FUNCTION__.':run');
        $running = $done = null;  
        $times = 0;
        do {
            $times++;
            Profiler::start(__CLASS__.'::'.__FUNCTION__.$times.'step1');
            // 执行并发, CURLM_CALL_MULTI_PERFORM表示栈中还有请求需要发送
            while (($execrun = curl_multi_exec($master, $running)) == CURLM_CALL_MULTI_PERFORM); 
            if ($execrun != CURLM_OK) {
                break;  
            }
            Profiler::end(__CLASS__.'::'.__FUNCTION__.$times.'step1');

            // 有一个请求完成则处理 
            Profiler::start(__CLASS__.'::'.__FUNCTION__.$times.'step2');
            while ($done = curl_multi_info_read($master)) {  
                $info = curl_getinfo($done['handle']);
                $output = curl_multi_getcontent($done['handle']);
                $output = json_decode($output, true);
                  
                $url = $info['url'];
                //print_r($url);exit;
                // 根据url获取bnsRename
                $bnsRenameHit = '';
                foreach ($this->request_map as $bnsRename => $request) {
                    foreach ($request as $arr) {
                        if ($arr['url'] == $url) {
                            $bnsRenameHit = $bnsRename;
                            break;
                        }
                    }
                }
                //print_r($bnsRenameHit);exit;
                if (empty($bnsRenameHit)) {
#                    Bd_Log::notice(__CLASS__."::".__FUNCTION__.": bnsRenameHit fail.  request_map: ".
#                        json_encode($this->request_map, JSON_UNESCAPED_UNICODE), 1, $logArr);
                } else {
#                    Bd_Log::notice(__CLASS__."::".__FUNCTION__.": bnsRenameHit success. feed search url: ".
#                        json_encode($url, JSON_UNESCAPED_UNICODE), 1, $logArr);
                    foreach ($this->request_map[$bnsRenameHit] as $resource) {
                            //print_r($this->request_map[$bnsRenameHit]);exit;
                            //print_r($resource);
                            $info = curl_getinfo($resource['ch']);
                            var_dump($info);
                            curl_close($resource['ch']);
                            curl_multi_remove_handle($master, $resource['ch']);  
                    }
                    $this->results[$bnsRenameHit] = $output;
                }
            }
            Profiler::end(__CLASS__.'::'.__FUNCTION__.$times.'step2');

            // 等待所有cURL批处理中的活动连接
            Profiler::start(__CLASS__.'::'.__FUNCTION__.$times.'step3');
            if ($running) {
                curl_multi_select($master, $this->timeout);  
            } 
            Profiler::end(__CLASS__.'::'.__FUNCTION__.$times.'step3');
        } while($running);
        Profiler::end(__CLASS__.'::'.__FUNCTION__.':run');

        // 完成关闭  
        curl_multi_close($master);  
        Profiler::end(__CLASS__.'::'.__FUNCTION__.':total');
        return $this->results;
    }

    /** 
     * 获取请求对象的cURL配置 
     * @access private 
     * @param object $request 
     * @return array 
     */  
    private function get_options($request) {  
        $options = $this->__get('options');  
        if (ini_get('safe_mode') == 'Off' || ! ini_get('safe_mode')) {  
            $options[CURLOPT_FOLLOWLOCATION] = 1;  
            $options[CURLOPT_MAXREDIRS] = 5;  
        }  
          
        if ($request['options']) {
            $options = $request['options'] + $options;  
        }  
          
        $options[CURLOPT_URL] = $request['url'];  
          
        if ($request['post_data'] && strtolower($request['method']) == 'post' ) {  
            $options[CURLOPT_POST] = 1;  
            $options[CURLOPT_POSTFIELDS] = $request['post_data'];
        }  

        $headers = $request['header'];  
        if ($headers) {  
            $options[CURLOPT_HEADER] = 0;  
            $options[CURLOPT_HTTPHEADER] = $headers;  
        }  
        return $options;  
    }

    /** 
     * @access public 
     * @param string $name 
     * @param string $value 
     * @return boolean 
     */  
    public function __set($name, $value) {  
        if ($name == 'options' || $name == 'headers') {  
            $this->{$name} = $value + $this->{$name};  
        } else {  
            $this->{$name} = $value;  
        }  
        return TRUE;  
    }

    /** 
     *  
     * @param string $name 
     * @return mixed 
     * @access public 
     */  
    public function __get($name) {  
        return (isset ( $this->{$name} )) ? $this->{$name} : null;  
    }
}
