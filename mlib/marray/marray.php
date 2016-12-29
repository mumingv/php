<?php
/***********************************************************
 *     FileName: marray.php
 *         Desc: 数组相关操作
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-12-29 16:58:59
 *      History:
 ***********************************************************/


    public static function changeAssoc($arr, $key) {
        $data = array();
        foreach ($arr as $row) {
            if (isset($row[$key])) {
                $data[$row[$key]] = $row;
            }
        }
        return $data;
    }
