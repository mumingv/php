<?php
/**
 * 中介者类
 */
class MusicContainerMediator {
    // 存储类名的容器，将容器内的各种类关联起来
    protected $_containers = array();

    public function __construct() {
        $_containers[] = 'CD';
        $_containers[] = 'MP3Archive';
    }

    // 中介者需要知道哪类对象做了哪些改变
    public function change($originalObject, $newValues) {
        foreach ($this->_containers as $container) {
            if (!($originalObject instanceof $container)) {
                $obj = new $container;
                $obj->band = $originalObject->band;
                $obj->title = $originalObject->title;

                foreach ($newValues as $key => $value) {}
            }
             
        }
    }
}
