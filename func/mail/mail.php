<?php
/***********************************************************
 *     FileName: mail.php
 *         Desc: 发送邮件
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2017-05-08 20:12:44
 *      History:
 ***********************************************************/

# 语法：bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )

# 示例：发送邮件
$mail_to = "mumingv@163.com";
$mail_cc = "mumingv@163.com"; //收件人
$mail_title = "=?UTF-8?B?".base64_encode('【测试】请尽快处理！')."?=".'----'.date('Y-m-d',time()); //主题
$mail_headers = "From:mumingv@163.com\r\n";
$mail_headers .= "Cc:" . $mail_cc . "\r\n";
$mail_headers .= "Content-type: text/html; charset=utf-8\r\n";
$mail_content = "测试邮件，请点击下面的链接查看！\r\n";
$mail_content .= '<a href="">链接</a>';
mail($mail_to, $mail_title, $mail_content, $mail_headers);

