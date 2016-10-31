<?php
/**
 * 观察者类：用于记录活动流
 */
class buyCDNotifyStreamObserver {
    // 供CD类对象调用：用于更新活动流信息
    // 参数限定为CD类，因为要获取CD类对象的属性
    public function update(CD $cd) {
        $activity = "The CD named {$cd->title} by {$cd->band} was just purchased.".PHP_EOL; 
        ActivityStream::addNewItem($activity);
    }
}
