<?php
/**
 * CD工厂类：根据不同的CD类型创建对应的类实例 
 */
class CDFactory {
    public static function getInstance($type) {
        $class = ucfirst(strtolower($type)).'CD';
        return new $class;
    }
}
