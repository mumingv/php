<?php
/**
 * 迭代器类
 */
class CDSearchByBandIterator implements Iterator {
    private $_cds = array();
    private $_valid = FALSE;

    public function __construct($band) {
        // 连接
        $password = trim(file_get_contents('config.passwd'));
        mysql_connect('localhost', 'root', $password);
        mysql_select_db('pdp');

        // 查询
        $band = mysql_real_escape_string($band);
        $sql = "SELECT `c11_cd`.`id`, `c11_cd`.`band`, `c11_cd`.`title`, `c11_tracks`.`track_name` FROM `c11_cd`, `c11_tracks` WHERE `c11_cd`.`id` = `c11_tracks`.`id_cd` AND `c11_cd`.`band` = '{$band}' ORDER BY `c11_cd`.`id`";
        mysql_query("SET NAMES 'utf8'");
        $results = mysql_query($sql);

        // 处理结果
        $id = 0;
        $cd = null;
        while ($result = mysql_fetch_array($results)) {
            if ($result['id'] !== $id) {
                if (!is_null($cd)) {
                    $this->_cds[] = $cd;
                }
                $id = $result['id'];
                $cd = new CD($result['band'], $result['title']);
            }
            $cd->addTrack($result['track_name']);
        } 
        if (!is_null($cd)) {
            $this->_cds[] = $cd;
        }
    }

    // 迭代器方法，必须定义
    public function next() {
        echo __FUNCTION__."\n";
        echo $this->_valid."\n";
        $this->_valid = (next($this->_cds) === FALSE) ? FALSE : TRUE;
        echo $this->_valid."\n";
        echo __FUNCTION__."\n";
    }

    // 迭代器方法，必须定义
    public function rewind() {
        echo __FUNCTION__."\n";
        echo $this->_valid."\n";
        $this->_valid = (reset($this->_cds) === FALSE) ? FALSE : TRUE;
        echo $this->_valid."\n";
        echo __FUNCTION__."\n";
    }

    // 迭代器方法，必须定义
    public function valid() {
        echo __FUNCTION__."\n";
        echo $this->_valid."\n";
        return $this->_valid;
    }

    // 迭代器方法，必须定义
    public function current() {
        echo __FUNCTION__."\n";
        return current($this->_cds);
    }

    // 迭代器方法，必须定义
    public function key() {
        echo __FUNCTION__."\n";
        echo key($this->_cds)."\n";
        return key($this->_cds);
    }
}
