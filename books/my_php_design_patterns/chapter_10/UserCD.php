<?php
/**
 * 用户CD类：提供该用户喜欢的歌曲信息
 */
class UserCD {
    protected $_user = NULL;  // 用户对象

    public function setUser($user) {
        $this->_user = $user;
    }

    // [重要]下面函数的名称需要跟模板中的配置名称一致，如：对应模板配置为 "{{myCD.getTitle}}"

    // 获取歌曲标题
    public function getTitle() {
        // 根据用户信息去查询该用户喜欢的歌曲
        // 这里为了简化就直接返回了固定的一首歌
        return '《光辉岁月》';
    }
}
