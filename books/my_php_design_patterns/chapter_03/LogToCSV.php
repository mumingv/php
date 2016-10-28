<?php
/**
 * 打印日志到CSV文件
 */
class LogToCSV {
    const CSV_LOCATION = 'log.csv';  // 类常量，存储日志文件名称
    private $_errorObject;  // 封装后的ErrorObject类对象：ErrorObjectForCSV类对象
    
    public function __construct($errorObject) {
        $this->_errorObject = $errorObject;
    }

    public function write() {
        $line = $this->_errorObject->getErrorNumber();
        $line .= ', ';
        $line .= $this->_errorObject->getErrorText();
        $line .= "\n";
        file_put_contents(self::CSV_LOCATION, $line, FILE_APPEND);
    }
}
