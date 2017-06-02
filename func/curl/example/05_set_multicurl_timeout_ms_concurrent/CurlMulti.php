<?php
/***********************************************************
 *     FileName: CurlMulti.php
 *         Desc: 并发Curl，支持毫秒级超时
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-05-24 20:50:34
 *      History:
 ***********************************************************/

/**
 * 一个url并发多次，收到最快的一次则结束
 */
class CurlMulti {
    public function execute($urls, $options = array()) {  
        $ch= array();  // 存放句柄，二维数组，与urls对应
        $results = array();  // 存放结果，二维数组，第一维与urls的第一维对应 
        $mh = curl_multi_init();  

        // 确保url都使用数组保存 
        foreach ($urls as $key => $value) {
            if (!is_array($value)) {
                $urls[$key] = array($value);    
            }
        }
        //print_r($urls);
        
        foreach ($urls as $key => $urlArr) {  
            foreach ($urlArr as $inkey => $url) {
                $ch[$key][$inkey] = curl_init();
                if ($options) {  
                    curl_setopt_array($ch[$key][$inkey], $options);  
                }  
                curl_setopt($ch[$key][$inkey], CURLOPT_URL, $url);  
                curl_multi_add_handle($mh, $ch[$key][$inkey]);
                $results[$key][$inkey] = array(
                    'url' => $url,
                    'errmsg' => '',
                    'content' => '',
                );
            }
        }  
        //print_r($ch);print_r($results);print_r($mh);exit;
        
        $running = null;  
        do {  
            curl_multi_exec($mh, $running);  
        } while ($running > 0);  
        
        // 获取内容并移除句柄
        foreach ($ch as $key => $handleArr) {  
            foreach ($handleArr as $inkey => $handle)
            {
                $content = curl_multi_getcontent($handle);  
                if ($content == '') {
                    $results[$key][$inkey]['errmsg'] = curl_error($handle);
                } else {
                    $results[$key][$inkey]['content'] = $content;
                }
                curl_multi_remove_handle($mh, $handle);
            }
        }
        curl_multi_close($mh);  
        return $results;
    }
}
