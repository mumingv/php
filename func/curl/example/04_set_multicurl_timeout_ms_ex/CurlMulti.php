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

class CurlMulti {
    public function execute($urls, $options = array()) {  
        $ch= array();  
        $results = array();  
        $mh = curl_multi_init();  
        
        foreach ($urls as $key => $url) {  
            $ch[$key] = curl_init();  
            if ($options) {  
                curl_setopt_array($ch[$key], $options);  
            }  
            curl_setopt($ch[$key], CURLOPT_URL, $url);  
            curl_multi_add_handle($mh, $ch[$key]);  
            $results[$key] = array(
                'url' => $url,
                'errmsg' => '',
                'content' => '',
            );
        }  
        
        $running = null;  
        do {  
            curl_multi_exec($mh, $running);  
        } while ($running > 0);  
        
        // 获取内容并移除句柄
        foreach ($ch as $key => $handle) {  
            $content = curl_multi_getcontent($handle);  
            if ($content == '') {
                $results[$key]['errmsg'] = curl_error($handle);
            } else {
                $results[$key]['content'] = $content;
            }
            curl_multi_remove_handle($mh, $handle);
        }
        curl_multi_close($mh);  
        return $results;  
    }
}
