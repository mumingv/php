<?php
/***********************************************************
 *     FileName: server.php
 *         Desc: 服务员类，传递命令
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 16:01:01
 *      History:
 ***********************************************************/

/**
 * MealCommand 做菜命令类
 * @uses Command
 * @package 
 * @version $id$
 */
class MealCommand implements Command {
    /**
     * cook 厨师
     * @var mixed
     * @access private
     */
    private $cook;

    /**
     * __construct 
     * @param Cook $cook 
     * @access public
     * @return void
     */
    public function __construct(Cook $cook) {
        // 绑定命令接受者
        $this->cook = $cook; 
    }

    /**
     * execute 做菜命令
     * @access public
     * @return void
     */
    public function execute() {
        echo __CLASS__, " ", __FUNCTION__, PHP_EOL;
        $this->cook->meal();
    }
}

/**
 * DrinkCommand 做汤命令类
 * @uses Command
 * @package 
 * @version $id$
 */
class DrinkCommand implements Command {
    /**
     * cook 厨师
     * @var mixed
     * @access private
     */
    private $cook;

    /**
     * __construct 
     * @param Cook $cook 
     * @access public
     * @return void
     */
    public function __construct(Cook $cook) {
        // 绑定命令接受者
        $this->cook = $cook; 
    }

    /**
     * execute 做菜命令
     * @access public
     * @return void
     */
    public function execute() {
        echo __CLASS__, " ", __FUNCTION__, PHP_EOL;
        $this->cook->drink();
    }
}

