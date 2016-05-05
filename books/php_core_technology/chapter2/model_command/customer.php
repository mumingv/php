<?php
/***********************************************************
 *     FileName: customer.php
 *         Desc: 顾客类，发送命令
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-05 16:22:23
 *      History:
 ***********************************************************/

include_once("cook.php");
include_once("server.php");

/**
 * 顾客类, 发送命令
 * @package 
 * @version $id$
 */
class Customer {
    private $meal_command;
    private $drink_command;
    public function addCommand(Command $meal_command, Command $drink_command) {
        $this->meal_command = $meal_command;
        $this->drink_command = $drink_command;
    }     

    public function callMeal() {
        $this->meal_command->execute();
    }
    public function callDrink() {
        $this->drink_command->execute();
    }
}

// 业务代码
$cook = new Cook();
$meal_command = new MealCommand($cook);
$drink_command = new DrinkCommand($cook);
$customer = new Customer();
$customer->addCommand($meal_command, $drink_command);
$customer->callMeal();
$customer->callDrink();

