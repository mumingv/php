<?php

// heredoc和双引号类似，会对其中的变量进行替换
$var1 = 'boy';
$var2 = 'girl';
echo <<<EOT
I'm a $var1!
</br>
I'm not a $var2!
EOT;

?>
