<?php
/**
 * 用户类
 */
class User {
    protected $_username = '';  // 用户名称

    public function __construct($username) {
        $this->_username = $username;
    }

    // 获取信息，其中包含待解释替换的配置
    public function getProfilePage() {
        $profile = "I like many songs\n";
        $profile .= "My favorite CD is: {{myCD.getTitle}}";
        return $profile;
    }
}
