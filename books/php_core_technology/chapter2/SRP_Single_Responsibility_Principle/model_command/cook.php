<?php
/***********************************************************
 *     FileName: cook.php
 *         Desc: 厨师类，接受命令并执行
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 15:56:06
 *      History:
 ***********************************************************/

/**
 * 厨师类 
 * @package 
 * @version $id$
 */
class Cook {
    /**
     * meal 做菜
     * @access public
     * @return void
     */
    public function meal() {
        echo __CLASS__, " ", __FUNCTION__, PHP_EOL;
    }

    /**
     * drink 做汤
     * @access public
     * @return void
     */
    public function drink() {
        echo __CLASS__, " ", __FUNCTION__, PHP_EOL;
    }
}

/**
 * 命令接口
 * @package 
 * @version $id$
 */
interface Command {
    public function execute();
}

