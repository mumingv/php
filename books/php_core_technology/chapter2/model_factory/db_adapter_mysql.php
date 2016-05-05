<?php
/***********************************************************
 *     FileName: db_adapter_mysql.php
 *         Desc: Mysql数据库访问接口
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 14:51:09
 *      History:
 ***********************************************************/

include_once("db_adapter.php");

class Db_Adapter_Mysql implements Db_Adapter {
    public function connect($config = null) {
        echo __CLASS__, " ",  __METHOD__, PHP_EOL;
    }

    public function query($sql = null, $handle = null) {
        echo __CLASS__, " ",  __METHOD__, PHP_EOL;
    }
}

