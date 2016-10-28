<?php
/**
 * 打印日志到终端
 */
class LogToConsole {
    private $_errorObject;  // ErrorObject类对象
    
    public function __construct($errorObject) {
        $this->_errorObject = $errorObject;
    }

    public function write() {
        fwrite(STDERR, $this->_errorObject->getError());
    }
}
