<?php
/**
 * 适配器类：
 * 1. 基于系统现有的ErrorObject类封装一个适配器类，替换原LogToCSV使用的另一个版本的ErrorObject类
 * 2. 该适配器类需要提供LogToCSV调用的方法
 */
class ErrorObjectForCSV extends ErrorObject {
    private $_errorNumber, $_errorText;  // 错误码和错误文本

    public function __construct($error) {
        parent::__construct($error);  // 调用父类的构造函数，存储完整的$error字段
        $parts = explode(':', $this->getError()); 
        $this->_errorNumber = $parts[0];
        $this->_errorText = $parts[1];
    }

    public function getErrorNumber() {
        return $this->_errorNumber;
    }

    public function getErrorText() {
        return $this->_errorText;
    }
}
