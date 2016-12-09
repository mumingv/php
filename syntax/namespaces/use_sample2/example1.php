<?php
class classname
{
    function __construct()
    {
        echo "example1: ".__METHOD__,"\n";
    }
}
function funcname()
{
    echo "example1: ".__FUNCTION__,"\n";
}
const constname = "example1: global";

$a = 'classname';
$obj = new $a; // prints classname::__construct
$b = 'funcname';
$b(); // prints funcname
echo constant('constname'), "\n"; // prints global
?>
