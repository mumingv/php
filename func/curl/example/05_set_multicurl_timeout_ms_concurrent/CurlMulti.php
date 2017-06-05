<?php
/***********************************************************
 *     FileName: CurlMulti.php
 *         Desc: 并发Curl，支持毫秒级超时(一个url并发多)
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
        $chArr= array();  // 存放句柄，二维数组，与urls对应
        $results = array();  // 存放结果，二维数组，第一维与urls的第一维对应 
        $mh = curl_multi_init();  

        // 确保url都使用数组保存 
        foreach ($urls as $key => $value) {
            if (!is_array($value)) {
                $urls[$key] = array($value);    
            }
        }
        
        foreach ($urls as $key => $urlArr) {  
            foreach ($urlArr as $inkey => $url) {
                $chArr[$key][$inkey] = curl_init();
                if ($options) {  
                    curl_setopt_array($chArr[$key][$inkey], $options);  
                }  
                curl_setopt($chArr[$key][$inkey], CURLOPT_URL, $url);  
                curl_multi_add_handle($mh, $chArr[$key][$inkey]);
            }
            $results[$key] = array(
                'url' => '',
                'errmsg' => '',
                'content' => '',
            );
        }
        
        do {
            // 循环一直等到有url返回数据
            while (($mrc = curl_multi_exec($mh, $active)) == CURLM_CALL_MULTI_PERFORM);
            if ($mrc != CURLM_OK) {
                echo "curl_multi_exec() renurn error!";    
                break;
            }

            // 读取数据并删除该url对应的多个句柄
            while ($info = curl_multi_info_read($mh, $msgNum)) {
                $detailInfo = curl_getinfo($info['handle']);
                echo "url: ".$detailInfo['url']."\n";
                foreach ($urls as $key => $urlArr) {
                    if (in_array($detailInfo['url'], $urlArr)) {
                        $results[$key]['url'] = $detailInfo['url'];
                        $results[$key]['content'] = curl_multi_getcontent($info['handle']);  
                        $results[$key]['errmsg'] = curl_error($info['handle']);  
                        foreach ($chArr[$key] as $handle) {
                            curl_multi_remove_handle($mh, $handle);
                            curl_close($handle); 
                        }
                    }
                }
            }

            // 阻塞直到有活动连接
            if ($active) {
                // 说明：阻塞时感知不到URL的超时，所以这里的slect超时设置过大的话会影响URL超时的精度
                curl_multi_select($mh, 0.01);
            }
        } while ($active);

        curl_multi_close($mh);  
        return $results;
    }
}
