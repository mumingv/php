<?php
/**
 * DAO基类(抽象类，不能被实例化)
 * 需要子类提供一些信息(如：连接数据库的参数，以及表名、主键名)，才能调用该类提供的函数
 */
abstract class BaseDao {
    private $__connection;  // 数据库连接

    public function __construct() {
        // 连接数据库，各参数在配置中指定
        $this->__connectToDB(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
    }

    private function __connectToDB($host, $user, $pass, $database) {
        // 1. 数据库操作第一步：连接数据库
        $this->__connection = mysql_connect($host, $user, $pass);
        // 2. 数据库操作第二步：选择数据库
        mysql_select_db($database, $this->__connection);
    }

    // 根据主键的值进行查询
    // 查询使用的表名'_tableName'和主键名'_primaryKey'称在派生类中指定；
    // 查询使用的字段名$key为可选参数，不指定的话，默认为主键名称
    public function query($value, $key = NULL) {
        if (is_null($key)) {
            $key = $this->_primaryKey;
        }

        // 3. 数据库操作第三步：查询数据库
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$key} = '{$value}'";
        $results = mysql_query($sql, $this->__connection);

        // 4. 数据库操作第四步：将查询结果转换为数组形式
        $rows = array();
        while ($result = mysql_fetch_array($results)) {
            $rows[] = $result;
        }

        return $rows;
    }

    // 更新单条记录，$keyedArray数组中必须携带主键对应的值
    public function update($keyedArray) {
        $sql = "UPDATE {$this->_tableName} SET ";
        $updates = array();
        foreach ($keyedArray as $column => $value) {
            $updates[] = "{$column} = '{$value}'";
        }
        $sql .= implode(', ', $updates);
        $sql .= " WHERE {$this->_primaryKey} = '{$keyedArray[$this->_primaryKey]}'";
        // 5. 数据库操作：更新数据库(使用的函数'mysql_query'和查询数据库的操作是一样的)
        mysql_query($sql, $this->__connection);
    }
}
