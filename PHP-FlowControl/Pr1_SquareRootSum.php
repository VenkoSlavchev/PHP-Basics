<!DOCTYPE html>
    <html>
<head>
    <title>SquareRoot</title>
</head>
<body>
<table border="1">
    <tr><th>Number</th><th>Square root</th></tr>
<?php
    $sum=0;
    for($i=0;$i<=100;$i+=2){
        $sqrt=sqrt($i);
        $sum+=$sqrt;
        $sqrtRounded = round($sqrt,2)?>
    <tr><td><?=$i ?></td><td><?=$sqrtRounded?></td></tr>

<?php }?>
    <tr><td><b>Total:</b></td><td><?=round($sum,2)?></td></tr>
</table>
</body>
    </html>
