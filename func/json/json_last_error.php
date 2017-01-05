<?php
/* =============================================================================
#     FileName: json_last_error.php
#         Desc: 返回 JSON 编码解码时最后发生的错误
#       Author: Jie Yin
#        Email: mumingv@163.com
#     HomePage: https://github.com/mumingv
#      Version: 0.0.1
#   LastChange: 2017-01-05 22:32:55
#      History:
============================================================================= */

# 语法：int json_last_error ( void )

/**
 * 示例: 对JSON字符串进行解码，并确认解码过程中是否发生问题
 */

// 一个有效的 json 字符串
$json[] = '{"Organization": "PHP Documentation Team"}';
// 一个无效的 json 字符串会导致一个语法错误，在这个例子里我们使用 ' 代替了 " 作为引号
$json[] = "{'Organization': 'PHP Documentation Team'}";
// 遍历数组中的JSON字符串，并进行解码
foreach ($json as $string) {
    echo 'Decoding: ' . $string;
    json_decode($string, true);
    switch (json_last_error()) {
        // 没有错误发生
        case JSON_ERROR_NONE:
            echo ' - No errors';
            break;
        // 到达了最大堆栈深度
        case JSON_ERROR_DEPTH:
            echo ' - Maximum stack depth exceeded';
            break;
        // 无效或异常的 JSON
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Underflow or the modes mismatch';
            break;
        // 控制字符错误，可能是编码不对
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Unexpected control character found';
            break;
        // 语法错误
        case JSON_ERROR_SYNTAX:
            echo ' - Syntax error, malformed JSON';
            break;
        // 异常的 UTF-8 字符，也许是因为不正确的编码
        case JSON_ERROR_UTF8:
            echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
            break;
        // One or more recursive references in the value to be encoded
        case JSON_ERROR_RECURSION:
            echo ' - One or more recursive references in the value to be encoded';
            break;
        // One or more NAN or INF values in the value to be encoded
        case JSON_ERROR_INF_OR_NAN:
            echo ' - One or more NAN or INF values in the value to be encoded';
            break;
        // A value of a type that cannot be encoded was given
        case JSON_ERROR_UNSUPPORTED_TYPE:
            echo ' - A value of a type that cannot be encoded was given';
            break;
        // 未定义错误
        default:
            echo ' - Unknown error';
            break;
    }
    echo PHP_EOL;
}

