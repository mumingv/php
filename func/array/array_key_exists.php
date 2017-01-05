<?php
/***********************************************************
 *     FileName: array_key_exists.php
 *         Desc: 检查给定的键名或索引是否存在于数组中
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-01-05 10:47:39
 *      History:
 ***********************************************************/

# 语法：bool array_key_exists ( mixed $key , array $search )

# 示例：
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array\n";
}

# 示例：isset() 对于数组中为 NULL 的值不会返回 TRUE，而 array_key_exists() 会返回TRUE
$search_array = array('first' => null, 'second' => 4);
if (isset($search_array['first'])) {
    echo "isset: The 'first' element is in the array\n";
} else {
    echo "isset: The 'first' element is not in the array\n";  // 打印该行
}

if (array_key_exists('first', $search_array)) {
    echo "array_key_exists: The 'first' element is in the array\n";  // 打印该行
} else {
    echo "array_key_exists: The 'first' element is not in the array\n";
}


