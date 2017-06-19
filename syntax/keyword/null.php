<?php
/***********************************************************
 *     FileName: null.php
 *         Desc: 
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-06-19 17:26:08
 *      History:
 ***********************************************************/

$obj = null;

if (isset($obj)) {
    echo "isset(null) return true\n";    
} else {
    echo "isset(null) return false\n";    
}
if (empty($obj)) {
    echo "empty(null) return true\n";    
} else {
    echo "empty(null) return false\n";    
}
