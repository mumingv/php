<?php
/**
 * CD策略类：XML
 */

class CDXMLStrategy {
    // 该函数在CD类中被调用，参数为CD类对象是因为该函数中要获取CD类对象的属性
    public function get(CD $cd) {
        $doc = new DomDocument();

        $root = $doc->createElement('CD');
        $root = $doc->appendChild($root);

        $title = $doc->createElement('TITLE', $cd->title);
        $title = $root->appendChild($title);

        $band = $doc->createElement('BAND', $cd->band);
        $band = $root->appendChild($band);

        echo $doc->saveXML();
        return $doc->saveXML();
    }
}
