<html>
    <head>
        <title>Bob's Auto Parts - Order Results</title>
    </head>
    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
<?php
    echo '<p>Order processed at '.date('H:i jS F Y').'</p>';
    echo '<p>Your order is as follows: </p>';
    echo $_POST['tireqty'].' tires<br/>';
    echo $_POST['oilqty'].' bottles of oil<br/>';
    echo $_POST['sparkqty'].' spark plugs<br/>';
?>
    </body>
</html>
