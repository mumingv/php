<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>输入内容，获得结果</title>
    <style>
    </style>
</head>
<body>
<h2>运营活动</h2>
<h4>输入词语：</h4>
<form method="post" action="">
    <textarea name="comment" rows="10" cols="40"></textarea>
    <br><br>
    <input style="width:100px; height:80px;" type="submit" name="submit" value="提交">
</form>

<?php
echo "<h2>结果:</h2>";
$words = trim($_POST['comment']);
$words = explode("\n", $words);
foreach ($words as $word) {
    echo $word;
    echo "<br>";
}
?>

</body>
</html>
