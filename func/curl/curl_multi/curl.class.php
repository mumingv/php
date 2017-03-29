<?php  
/** 
 * cURL批量处理
 *  
 */  

class Curl {  
    /** 
     * 等待所有cURL批处理中的活动连接等待响应时间 
     * @var int 
     */  
    private $timeout        = 5;  

    /** 
     * cRUL配置 
     * @var array 
     */  
    private $options        = array (CURLOPT_SSL_VERIFYPEER => 0,CURLOPT_RETURNTRANSFER => 1,CURLOPT_CONNECTTIMEOUT => 30 );  
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
     * 请求队列索引 
     * @var array 
     */  
    private $request_map    = array ();  

    /**
     * 请求结果
     * @var array
     */
    private $results = array();


    public function __construct($requests = array()) {
        $this->requests = $requests; 
    }

    /** 
     * 执行cURL 
     * @access public 
     * @param int $size 最大连接数 
     * @return Ambigous <boolean, mixed>|boolean 
     */  
    public function execute($size = 3) {
        return $this->rolling_curl($size);  
    }

    /** 
     * 多个url请求 
     * @access private 
     * @param int $size 最大连接数 
     * @return boolean 
     */  
    private function rolling_curl($size) {  

        // 添加cURL连接资源句柄到map索引  
        $master = curl_multi_init();  
        //for ($i = 0; $i < count($this->requests); $i++) {  
        foreach ($this->requests as $key => $request) {
            $this->results[$key] = '';
            for ($count = 0; $count < $size; $count++) {
                $ch = curl_init();
                $options = $this->get_options($request);  
                curl_setopt_array($ch, $options);  
                curl_multi_add_handle($master, $ch);  
                $this->request_map[$request['url']][] = array('key' => $key, 'ch' => $ch);
            }
        }

        $running = $done = null;  
        do {
            // 执行并发, CURLM_CALL_MULTI_PERFORM表示栈中还有请求需要发送
            while (($execrun = curl_multi_exec($master, $running)) == CURLM_CALL_MULTI_PERFORM); 
            if ($execrun != CURLM_OK) {
                break;  
            }

            // 有一个请求完成则处理 
            while ($done = curl_multi_info_read($master)) {  
                $info = curl_getinfo($done['handle']);
                $output = curl_multi_getcontent($done['handle']);
                $output = print_r(json_decode($output, true), true);
                  
                $url = $info['url'];
                $this->results[$this->request_map[$url][0]['key']] = $output;
                foreach ($this->request_map[$url] as $resource) {
                    curl_close($resource['ch']);
                    curl_multi_remove_handle($master, $resource['ch']);  
                }
            }

            // 等待所有cURL批处理中的活动连接
            if ($running) {
                curl_multi_select($master, $this->timeout);  
            } 
        } while($running);

        // 完成关闭  
        curl_multi_close($master);  
        return $this->results;
    }

    /** 
     * 获取请求对象的cURL配置 
     * @access private 
     * @param object $request 
     * @return array 
     */  
    private function get_options($request) {  
        $options = $this->__get ( 'options' );  
        if (ini_get ( 'safe_mode' ) == 'Off' || ! ini_get ( 'safe_mode' )) {  
            $options [CURLOPT_FOLLOWLOCATION] = 1;  
            $options [CURLOPT_MAXREDIRS] = 5;  
        }  
        $headers = $this->__get ( 'headers' );  
          
        if ($request['options']) {  
            $options = $request['options'] + $options;  
        }  
          
        $options [CURLOPT_URL] = $request['url'];  
          
        if ($request['post_data'] && strtolower($request['method']) == 'post' ) {  
            $options [CURLOPT_POST] = 1;  
            $options [CURLOPT_POSTFIELDS] = $request['post_data'];
        }  
        if ($headers) {  
            $options [CURLOPT_HEADER] = 0;  
            $options [CURLOPT_HTTPHEADER] = $headers;  
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
