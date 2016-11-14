<?php
/**
 * CD类
 */

// [重要说明]本实例涉及数据库操作，注意如下两点：
// 1. 数据库为pdp，备份在backup目录中；
// 2. 数据库密码，存放在config.passwd文件中；

class CD {
    public $band = '';  // 乐队名称
    public $title = '';  // 专辑名称 
    public $trackList = array();  // 歌曲列表
    
    // 根据id查询'c14_cd'表
    public function __construct($id) {
        // 连接
        $password = trim(file_get_contents('config.passwd'));
        $handle = mysql_connect('localhost', 'root', $password);
        mysql_select_db('pdp', $handle);

        // 查询
        $query = "SELECT `band`, `title` FROM `c14_cd` WHERE id = {$id}";
        mysql_query("SET NAMES 'utf8'");  // 
        $results = mysql_query($query, $handle);

        // 读取
        if ($row = mysql_fetch_array($results)) {
            $this->band = $row['band'];
            $this->title = $row['title']; 
        }
    }

    public function buy() {
        var_dump($this);
    }
}
