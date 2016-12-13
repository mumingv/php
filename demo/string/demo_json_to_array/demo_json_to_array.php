<?php

$json_str = file_get_contents('input');
$arr = json_decode($json_str, true);
$result = var_export($arr, true);
file_put_contents('output', $result);
