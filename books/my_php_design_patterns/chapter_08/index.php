<?php
/**
 * 主程序(外观模式) 
 */

require_once('CD.php');
require_once('CDUpperCase.php');
require_once('CDMakeXML.php');
require_once('WebServiceFacade.php');

$cd = new CD('Beyond', 'Love You', array('first song', 'second song', 'third song'));
print WebServiceFacade::makeXMLCall($cd);
