<?php

class sampleClass {};
$myObject = new sampleClass();
if ($myObject instanceof sampleClass) {
    echo "myObject is an instance of sampleClass";
}
