<?php
/***********************************************************
 *     FileName: db_adapter_sqlite.php
 *         Desc: Sqlite数据库访问接口
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 14:56:28
 *      History:
 ***********************************************************/

class Db_Adapter_Sqlite implements Db_Adapter {
    public function connect($config = null) {
        echo __CLASS__, " ",  __METHOD__, PHP_EOL;
    }

    public function query($sql = null, $handle = null) {
        echo __CLASS__, " ", __METHOD__, PHP_EOL;
    }
}

