<?php
/**
 * CDProxy类
 */

class CDProxy extends CD {
    protected function _connect() {
        // 连接另一个地方的数据库
        $password = trim(file_get_contents('config.passwd'));
        $this->_handle = mysql_connect('localhost', 'root', $password);
        mysql_select_db('pdp_2', $this->_handle);
    }
}
