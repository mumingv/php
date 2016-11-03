<?php
/**
 * 用户CD解释器类
 */
class UserCDInterpreter {
    protected $_user = NULL;  // User对象

    public function setUser($user) {
        $this->_user = $user;
    }

    // 获取解释后的信息
    public function getInterpreted() {
        // $profile为包含带解释信息{{...}}的字符串
        $profile = $this->_user->getProfilePage();

        if (preg_match_all('/\{\{myCD\.(.*?)\}\}/', $profile, $triggers, PREG_SET_ORDER)) {
            $replacements = array();
            foreach ($triggers as $trigger) {
                $replacements[] = $trigger[1];
            } 
            $replacements = array_unique($replacements);

            $myCD = new userCD();
            $myCD->setUser($this->_user);

            foreach ($replacements as $replacement) {
                // $replacement的值为'getTitle'，
                // 这里的call_user_func用于调用$myCD对象的'getTitle'函数，将函数结果作为替换的值
                $profile = str_replace("{{myCD.{$replacement}}}", call_user_func(array($myCD, $replacement)), $profile);
            }
        }
        return $profile;
    }
}
