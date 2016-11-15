<?php
/**
 * 单元素类：库存数据库
 */

class InventoryDB {
    protected static $_instance = NULL;  // 存储对象的实例（只有一个）
    protected $_handle = NULL;  // 数据库连接

    // 获取当前类的唯一一个实例
    public static function getInstance() {
        if (!self::$_instance instanceof self) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    protected function __construct() {
        // 连接数据库
        $password = trim(file_get_contents('config.passwd'));
        $this->_handle = mysql_connect('localhost', 'root', $password);
        mysql_select_db('pdp', $this->_handle);
    }

    public function updateQuantity($band, $title, $number) {
        // 更新
        $band = mysql_real_escape_string($band);
        $title = mysql_real_escape_string($title);
        $number = mysql_real_escape_string($number);
        $query = "UPDATE `c15_cd` SET `bought` = `bought` + {$number} WHERE `band` = '{$band}' AND `title` = '{$title}'";
        mysql_query("SET NAMES 'utf8'");
        mysql_query($query, $this->_handle);
    }
}
