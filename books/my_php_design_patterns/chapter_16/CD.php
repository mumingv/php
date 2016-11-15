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
    
    // 根据id查询'c15_cd'表
    public function __construct($band, $title) {
        $this->_band = $band;
        $this->_title = $title;
    }

    public function buy() {
        $inventoryDBObj = InventoryDB::getInstance();
        $inventoryDBObj->updateQuantity($this->_band, $this->_title, -1);
    }
}
