<html>
    <head>
        <title>Bob's Auto Parts - Order Results</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
<?php
    // 保存表单提交过来的变量
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];

    echo '<p>Order processed at '.date('H:i jS F Y').'</p>';
    echo '<p>Your order is as follows: </p>';
    echo $tireqty.' tires<br/>';
    echo $oilqty.' bottles of oil<br/>';
    echo $sparkqty.' spark plugs<br/>';

    // 物品总数
    $totalqty = 0;
    $totalqty = $tireqty + $oilqty + $sparkqty;
    echo 'Items ordered: '.$totalqty.'<br />';

    // 定义常量
    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);

    // 物品总金额
    $totalamount = 0.00;
    $totalamount = $tireqty * TIREPRICE
                 + $oilqty * OILPRICE
                 + $sparkqty * SPARKPRICE;

    // 总金额小数点后保留两位
    echo 'Subtotal: $'.number_format($totalamount,2).'<br />';

    // 物品含税总金额
    $taxrate = 0.10;  // local sales tax is 10%
    $totalamount = $totalamount * (1 + $taxrate);
    echo 'Total including tax: $'.number_format($totalamount,2).'<br />';

?>
    </body>
</html>
