<!DOCTYPE html>
<html>
    <head>
        <title>Template Page</title>
        <style type="text/css">
            body {
                font-family: Arial, Verdana, sans-serif;
                color: #665544;
            }
            a {
                /* 这里的颜色是点击前或点击后显示的颜色，如果不被:visited颜色属性的话 */
                color: #0088dd;
                text-decoration: none;
            }
            a:hover {
                color: #111111;  
            }
        </style>
    </head>
    <body>
<?php
$text = "Ben & Jerrys Ice Cream";
echo 'HTML原始：';
echo '<a>Buy '.$text.'</a>'.PHP_EOL;
echo '<br />'.PHP_EOL;

echo 'HTML转换：';
echo '<a>Buy '.htmlentities($text).'</a>'.PHP_EOL;
echo '<br />'.PHP_EOL;

echo 'URL原始：';
echo '<a href="/buy/'.$text.'">Buy '.htmlentities($text).'</a>'.PHP_EOL;
echo '<br />'.PHP_EOL;

echo 'URL转换：';
echo '<a href="/buy/'.rawurlencode($text).'">Buy '.htmlentities($text).'</a>'.PHP_EOL;
echo '<br />'.PHP_EOL;
?>
    </body>
</html>
