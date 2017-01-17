<?php
/* =============================================================================
#     FileName: levenshtein.php
#         Desc: 计算两个字符串之间的编辑距离
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-18 05:41:41
#      History:
============================================================================= */

# 语法：
# int levenshtein ( string $str1 , string $str2 )
# int levenshtein ( string $str1 , string $str2 , int $cost_ins , int $cost_rep , int $cost_del )

# 示例：找出与错误单词最接近的单词
// 输入拼写错误的单词
$input = 'carrrot';

// 要检查的单词数组
$words  = array('apple','pineapple','banana','orange',
                'radish','carrot','pea','bean','potato');

// 目前没有找到最短距离
$shortest = -1;

// 遍历单词来找到最接近的
foreach ($words as $word) {

    // 计算输入单词与当前单词的距离
    $lev = levenshtein($input, $word);

    // 检查完全的匹配
    if ($lev == 0) {

        // 最接近的单词是这个（完全匹配）
        $closest = $word;
        $shortest = 0;

        // 退出循环；我们已经找到一个完全的匹配
        break;
    }

    // 如果此次距离比上次找到的要短
    // 或者还没找到接近的单词
    if ($lev <= $shortest || $shortest < 0) {
        // 设置最接近的匹配以及它的最短距离
        $closest  = $word;
        $shortest = $lev;
    }
}

echo "Input word: $input\n";
if ($shortest == 0) {
    echo "Exact match found: $closest\n";
} else {
    echo "Did you mean: $closest?\n";
}

/*
Input word: carrrot
Did you mean: carrot?
*/

