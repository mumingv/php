<?php
/**
 * 主程序 
 */

require_once('Product.php');
require_once('ProductBuilder.php');
$productConfig = array(
    'type' => 'shirt',
    'size' => 'XXL',
    'color' => 'red',
);
$builder = new ProductBuilder($productConfig);
$builder->build();
$product = $builder->getProduct();
var_dump($product);
