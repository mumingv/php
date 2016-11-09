<?php
/**
 * DAO基类 
 */
abstract class BaseDao {
    private $__connection;  // 数据库连接

    public function __construct() {
        // 连接数据库，各参数在配置中指定
        $this->__connectToDB(DB_USER, DB_PASS, DB_HOST, DB_DATABASE);
    }

    private function __connectToDB($user, $pass, $host, $database) {
        // 1. 数据库操作第一步：连接数据库
        $this->__connection = mysql_connect($host, $user, $pass);
    }

    // 根据主键的值进行查询
    // 查询使用的表名'_tableName'和主键名'_primaryKey'称在派生类中指定；
    // 查询使用的字段名$key为可选参数，不指定的话，默认为主键名称
    public function query($value, $key = NULL) {
        if (is_null($key)) {
            $key = $this->_primaryKey;
        }

        // 2. 数据库操作第二步：查询数据库
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$key} = {$value}";
        $results = mysql_query($sql, $this->__connection);

        // 3. 数据库操作第三步：将查询结果转换为数组形式
        $rows = array();
        while ($result = mysql_fetch_array($results)) {
            $rows[] = $result;
        }

        return $rows;
    }
}
