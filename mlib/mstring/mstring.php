<?php
/***********************************************************
 *     FileName: mstring.php
 *         Desc: 数组相关操作
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-04-12 14:23:30
 *      History:
 ***********************************************************/

class MString {

    /**
     * 去除无效的字符串
     * @param mixed $str 
     * @static
     * @access public
     * @return void
     */
    public static function trimInvalidString($str) {
        // 去除HTML标签
        $str = preg_replace("/<[^>]+>/", "", $str);
        // 去除编码字符，如: &quot>;
        $str = preg_replace("/&[^;]+;/", "", $str);
        return $str;
    }

    /**
     * 从字符串中提取汉字、字母和数字
     * @param mixed $arr 
     * @param mixed $key 
     * @return void
     */
    public static function extractChineseCharater($str) {
        preg_match_all('/[\x{4e00}-\x{9fff}，。！a-zA-Z0-9]/u' , $str, $result);
        return implode('', $result[0]);
    }

    /**
     * 过滤新闻语句（去除影响播报的字符）
     * @param mixed $str 
     * @return void
     */
    public static function filterNewsSentence($str) {
        // 去除HTML标签
        $str = preg_replace("/<[^>]+>/", "", $str);
        // 去除编码字符，如: &quot>;
        $str = preg_replace("/&[^;]+;/", "", $str);
        // 从字符串中提取汉字、字母和数字
        preg_match_all('/[\x{4e00}-\x{9fff}，。！：；“”a-zA-Z0-9]/u' , $str, $result);
        return implode('', $result[0]);
    }
}

