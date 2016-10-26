<?php
class importcontactsarraybuilder 
{
    protected $importedstring;
    
    public function __construct($importedstring)
    {
        $this->importedstring = $importedstring;
    }
    
    public function buildcollection($type)
    {
        $classname = "{$type}importcontactsarraydelegate";
        
        $delegate = new $classname;
        $delegate->setcontents($this->importedstring);
        $array = $delegate->getArray();
        
        return $array;
    }
}
?>