<?php
/***********************************************************
 *     FileName: db_adapter.php
 *         Desc: 数据库访问接口
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 14:46:29
 *      History:
 ***********************************************************/

interface Db_Adapter {
    /**
     * connect 
     * @param mixed $config 数据库配置
     * @access public
     * @return void
     */
    public function connect($config);

    /**
     * query 
     * @param mixed $sql SQL查询语句
     * @param mixed $handle 连接对象
     * @access public
     * @return void
     */
    public function query($sql, $handle);
}

