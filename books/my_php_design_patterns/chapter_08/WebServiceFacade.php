<?php
/**
 * 外观模式封装类 
 */
class WebServiceFacade {
    public static function makeXMLCall (CD $cd) {
        CDUpperCase::makeString($cd, 'title');
        CDUpperCase::makeString($cd, 'band');
        CDUpperCase::makeArray($cd, 'tracks');

        $xml = CDMakeXML::create($cd);
        return $xml;
    }
}
