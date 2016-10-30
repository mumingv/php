<?php
/**
 * 访问者类: 记录CD的购买日志 
 */
class CDVisitorLogPurchase {
    // 函数名称visitCD是在基类中声明的，各访问者类必须准守，具体业务逻辑的实现由访问者类自行处理
    public function visitCD($cd) {
        $log = "{$cd->title} by {$cd->band} was purchased for {$cd->price} at ".date('r')."\n"; 
        file_put_contents('purchases.log', $log, FILE_APPEND);
    }
}
