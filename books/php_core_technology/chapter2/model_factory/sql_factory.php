<?php
/***********************************************************
 *     FileName: sql_factory.php
 *         Desc: 工厂类，在代码执行时实例化对象
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 14:57:27
 *      History:
 ***********************************************************/

class Sql_Factory {
    /**
     * factory 
     * @param mixed $type 数据库类别
     * @static
     * @access public
     * @return void
     */
    public static function factory($type) {
        echo __CLASS__, " ",  __METHOD__, PHP_EOL;
        $type = strtolower($type);
        if (include_once("db_adapter_" . $type . ".php")) {
            $class_name = "Db_Adapter_" . ucfirst($type); 
            return new $class_name;
        } else {
            echo "error";
            throw new Exception("Driver is not found!");
        }
    }
}

$db = Sql_Factory::factory("MySql");
$db->connect();
$db->query();

$db = Sql_Factory::factory("SQLite");
$db->connect();
$db->query();

