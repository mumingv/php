<?php

// heredoc方式的字符串通常会用来输出html页面
$var1 = 'boy';
echo <<<EOT
<html>
    <head>
        <title>heredoc示例</title>
    </head>
    <body>
        <p>I'm a $var1!</p>
    </body>
</html>
EOT;

?>
