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


## 3.3 关联数组

### 3.3.1 初始化关联数组

// 自动创建方式
$prices = array();
$prices['Tires'] = 100;
$prices['Oil'] = 10;
$prices['Spark Plugs'] = 4;
print_r($prices);

// 使用array
$prices = array(
    'Tires' => 100,
    'Oil' => 10,
    'Spark Plugs' => 4,
);
print_r($prices);


### 3.3.2 访问数据元素
echo $prices['Oil'].PHP_EOL;


### 3.3.3 使用循环语句

// foreach循环
foreach ($prices as $key => $value) {
    echo $key.' => '.$value.PHP_EOL;
}

// while循环配合each()函数
reset($prices);
while ($element = each($prices)) {
    echo $element['key'].' => '.$element['value'].PHP_EOL;
}

// while循环配合each()和list()函数
reset($prices);
while (list($product, $price) = each($prices)) {
    echo $product.' => '.$price.PHP_EOL;
}


## 3.5 多维数组


### 二维数组创建

$products2[0][0] = 'TIR';
$products2[0][1] = 'Tires';
$products2[0][2] = 100;
$products2[1][0] = 'OIL';
$products2[1][1] = 'Oil';
$products2[1][2] = 10;
$products2[2][0] = 'SPK';
$products2[2][1] = 'Spark Plugs';
$products2[2][2] = 4;
print_r($products2);

$products = array(
    array('TIR', 'Tires', 100),
    array('OIL', 'Oil', 10),
    array('SPK', 'Spark Plugs', 4),
);
echo $products[1][2].PHP_EOL;
print_r($products);

for ($row = 0; $row < 3; $row++) {
    for ($column = 0; $column < 3; $column++) {
        echo '|'.$products[$row][$column]; 
    }
    echo '|'.PHP_EOL;
}


### 数字索引&关联混合数组

$products = array(
    array(
        'Code' => 'TIR',
        'Description' => 'Tires',
        'Price' => 100),
    array(
        'Code' => 'OIL', 
        'Description' => 'Oil',
        'Price' => 10),
    array(
        'Code' => 'SPK',
        'Description' => 'Spark Plugs',
        'Price' => 4),
);
print_r($products);

echo $products[1]['Price'].PHP_EOL;


for ($row = 0; $row < 3; $row++) {
    while (list($key, $value) = each($products[$row])) {
        echo $key.' => '.$value."\t"; 
    }
    echo PHP_EOL;
}


### 三维数组

$products = array(array(array('CAR_TIR', 'Tires', 100),
                        array('CAR_OIL', 'Oil', 10),
                        array('CAR_SPK', 'Spark Plugs', 4),
                        ),
                  array(array('VAN_TIR', 'Tires', 101),
                        array('VAN_OIL', 'Oil', 11),
                        array('VAN_SPK', 'Spark Plugs', 5),
                        ),
                  array(array('TRK_TIR', 'Tires', 102),
                        array('TRK_OIL', 'Oil', 12),
                        array('TRK_SPK', 'Spark Plugs', 6),
                        ),
);
print_r($products);

echo $products[1][2][2].PHP_EOL;

for ($layer = 0; $layer < 3; $layer++) {
    echo 'layer '.$layer.PHP_EOL;
    for ($row = 0; $row < 3; $row++) {
        for ($column = 0; $column < 3; $column++) {
            echo '|'.$products[$layer][$row][$column];
        }
        echo '|'.PHP_EOL;
    }    
}



## 数组排序

### 使用sort()函数

$products = array('Tires', 'Oil', 'Spark Plugs');
sort($products);
print_r($products);

$products = array('2', '16', '12');
sort($products, SORT_STRING);
print_r($products);


### 使用`asort()`函数和`ksort()`函数（关联数组排序）
$prices = array(
    'Tires' => 100,
    'Oil' => 10,
    'Spark Plugs' => 4,
);
ksort($prices);
print_r($prices);

asort($prices);
print_r($prices);


## 多维数组排序
function compare($x, $y) {
    if ($x[1] == $y[1]) {
        return 0;
    } else if ($x[1] < $y[1]) {
        return -1;
    } else {
        return 1; 
    }
}

$products = array(
    array('TIR', 'Tires', 100),
    array('OIL', 'Oil', 10),
    array('SPK', 'Spark Plugs', 4),
);
usort($products, 'compare');
print_r($products);


## 对数组进行重新排序
$products = array('Tires', 'Oil', 'Spark Plugs');
shuffle($products);
print_r($products);


$numbers = range(1, 10);
$numbers = array_reverse($numbers);
print_r($numbers);


## 执行其他数组操作
function my_print($value) {
    echo $value.PHP_EOL;
}
$products = array('Tires', 'Oil', 'Spark Plugs');
array_walk($products, 'my_print');

function my_string($value, $key, $userData) {
    echo $userData.' '.$value.PHP_EOL;
}
$products = array('Tires', 'Oil', 'Spark Plugs');
array_walk($products, 'my_string', 0);

$prices = array(
    'Tires' => 100,
    'Oil' => 10,
    'Spark Plugs' => 4,
);
extract($prices);
echo $Tires.' '.$Oil;


