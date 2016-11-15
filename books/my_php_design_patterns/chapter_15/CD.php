<?php
/**
 * CD类
 */

// [重要说明]本实例涉及数据库操作，注意如下两点：
// 1. 数据库为pdp，备份在backup目录中；
// 2. 数据库密码，存放在config.passwd文件中；

class CD {
    protected $_band = '';  // 乐队名称
    protected $_title = '';  // 专辑名称 
    protected $_handle = null;  // 数据库连接
    
    // 根据id查询'c15_cd'表
    public function __construct($band, $title) {
        $this->_band = $band;
        $this->_title = $title;
    }

    public function buy() {
        // 连接
        $this->_connect();

        // 更新
        $query = "UPDATE `c15_cd` SET `bought` = `bought` + 1 WHERE `band` = '{$this->_band}' AND `title` = '{$this->_title}'";
        mysql_query("SET NAMES 'utf8'");
        mysql_query($query, $this->_handle);
    }

    protected function _connect() {
        // 连接
        $password = trim(file_get_contents('config.passwd'));
        $this->_handle = mysql_connect('localhost', 'root', $password);
        mysql_select_db('pdp', $this->_handle);
    }
}
