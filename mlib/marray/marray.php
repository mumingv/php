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

class MArray {

    /**
     * 二维数组根据某个字段去重
     * @param mixed $arr 
     * @param mixed $key 
     * @param bool $flag true表示保留首次出现的数据(不覆盖)，false表示保留最后出现的数据(覆盖)
     * @return array 返回一个自然排序的数组
     */
    public static function arrayUniqueWithField($arr, $fieldName, $flag = false) {
        $data = array();
        foreach ($arr as $row) {
            if (isset($row[$fieldName])) {
                if (!array_key_exists($row[$fieldName], $data)) {
                    $data[$row[$fieldName]] = $row;
                } else {
                    // 存在同key的数据，根据flag决定是否需要覆盖
                    if ($flag === false) {
                        $data[$row[$fieldName]] = $row;
                    }
                }
            }   
        }
        $data = array_values($data);
        return $data;
    }

    public static function changeAssoc($arr, $key) {
        $data = array();
        foreach ($arr as $row) {
            if (isset($row[$key])) {
                $data[$row[$key]] = $row;
            }
        }
        return $data;
    }

    /**
     * 合并数组(key当作字符串处理，相同key值的数据后面的不会覆盖前面的)
     * @param mixed $arr1 
     * @param mixed $arr2 
     * @return void
     */
    public static function arrayMerge($arr1, $arr2) {
        $data = $arr1 + $arr2;    
        return $data;
    }
}
