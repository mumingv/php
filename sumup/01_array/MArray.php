<?php
/***********************************************************
 *     FileName: MArray.php
 *         Desc: 数组处理类
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-07-14 19:55:46
 *      History:
 ***********************************************************/

class MArray {
    /**
     * 二维数组按指定列求和
     * @param mixed $array 
     * @param mixed $field 
     * @static
     * @access public
     * @return void
     */
    public static function sum($array, $columnName){
        $sum = 0;
        foreach ($array as $row){
            $sum = $sum + $row[$columnName];
        }   
        return $sum;
    }

    /**
     * 改变二维数组的KEY名(使用某列的值作为KEY)
     * 说明：某列的值必须要唯一，否则会有元素丢失
     * @param mixed $array 
     * @param mixed $key 
     * @static
     * @access public
     * @return void
     */
    public static function changeKey($array, $columnName) {
        $data = array();
        foreach ($array as $row) {
            if (isset($row[$columnName])) {
                $data[$row[$columnName]] = $row;
            }   
        }   
        return $data;
    }   

    /**
     * 获取二维数组的某一列，并保持KEY不变
     * @param mixed $array 
     * @param mixed $columnName 
     * @static
     * @access public
     * @return void
     */
    public static function getColumn($array, $columnName){
        $data = array();
        foreach ($array as $key => $row) {
            !empty($row[$columnName]) && $data[$key] = $row[$columnName];
        }
        return $data;
    }

    /**
     * 查询某列中的值在某个范围的所有元素(按列过滤元素)
     * @param mixed $array 
     * @param mixed $columnName 
     * @param mixed $searchValue 
     * @static
     * @access public
     * @return void
     */
    public static function filterByComumnValue($array, $columnName, $searchValue){
        if (!is_array($searchValue)) { 
            $searchValue = [$searchValue];
        }                      
        $data = array();       
        foreach ($array as $row) {
            if (isset($row[$columnName]) && in_array($row[$columnName], $searchValue)) {
                $data[] = $row;
            }
        }
        return $data;
    }
}


/**
 * 测试用例
 */

// 数据准备
/*
+-----------+------------+---------+----------+------------+
| order_num | order_item | prod_id | quantity | item_price |
+-----------+------------+---------+----------+------------+
|     20005 |          1 | ANV01   |       10 |       5.99 |
|     20006 |          1 | ANV02   |        3 |       9.99 |
|     20007 |          1 | TNT2    |        5 |      10.00 |
+-----------+------------+---------+----------+------------+
*/
$array = array(
    array(
        'order_num' => 20005,
        'order_item' => 1,
        'prod_id' => 'ANV01',
        'quantity' => 10,
        'item_price' => 5.99,
    ),
    array(
        'order_num' => 20006,
        'order_item' => 1,
        'prod_id' => 'ANV02',
        'quantity' => 3,
        'item_price' => 9.99,
    ),
    array(
        'order_num' => 20007,
        'order_item' => 1,
        'prod_id' => 'TNT2',
        'quantity' => 5,
        'item_price' => 10.00,
    ),
);

// sum函数测试
echo('sum函数测试'.PHP_EOL);
$result = MArray::sum($array, 'quantity');
print_r($result);  // 18
echo PHP_EOL;

// changeKey函数测试：将order_num列的值作为对应元素的KEY
echo('changeKey函数测试：将order_num列的值作为对应元素的KEY'.PHP_EOL);
$result = MArray::changeKey($array, 'order_num');
print_r($result);
$result = MArray::changeKey($array, 'prod_id');
print_r($result);
echo PHP_EOL;

// getColumn函数测试
echo('getColumn函数测试'.PHP_EOL);
$result = MArray::getColumn($array, 'quantity');
print_r($result);
echo PHP_EOL;


// filterByComumnValue函数测试
echo('filterByComumnValue函数测试'.PHP_EOL);
$result = MArray::filterByComumnValue($array, 'quantity', array(1, 2, 3, 4, 5, 6));
print_r($result);
echo PHP_EOL;

