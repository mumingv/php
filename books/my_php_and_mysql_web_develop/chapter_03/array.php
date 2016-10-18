<?php

### 3.2.1 数字索引数组的初始化

// 自动创建方式

$products[0] = 'Tires';
$products[1] = 'Oil';
$products[2] = 'Spark Plugs';
print_r($products);

// 使用array创建数组
$products = array('Tires', 'Oil', 'Spark Plugs');
print_r($products);

// 使用range创建数组
$numbers = range(1, 10);
print_r($numbers);

$numbers = range(1, 10, 2);
print_r($numbers);

// 从文件载入数组
$products = file("file.txt");
print_r($products);

$products = file("file.txt", (FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
print_r($products);

// 从数据库载入数组

// 空数组
$products = [];
$products[0] = 'Tires';
$products[1] = 'Oil';
$products[2] = 'Spark Plugs';
print_r($products);


### 3.2.1 数字索引数组的初始化

echo $products[1] . PHP_EOL;


### 3.2.3 使用循环访问数组

// for循环

for ($i = 0; $i < 3; $i++) {
    echo $products[$i] . PHP_EOL;
}

// foreach循环

foreach ($products as $product) {
    echo $product . PHP_EOL;
}

foreach ($products as $key => $product) {
    echo $key.' => '.$product.PHP_EOL;
}




