<?php
class contactimportgroupinterpreter
{
    protected $import;
    
    public function __construct($import)
    {
        $this->import = $import;
    }
    
    public function getgroup($groupname)
    {
        $contactgroup = NULL;
        
        if (!empty($this->import["{$groupname} Street"])) {
            $contactgroup = new contactgroup();
            $contactgroup->label = $groupname;
        }
        
        return $contactgroup;
    }
}
?>