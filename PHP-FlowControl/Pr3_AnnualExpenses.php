<!DOCTYPE html>
<html>
<head>
    <title>Years</title>
</head>
<body>
<form method="POST">
    Enter number of years: <br>
    <input type="text" name="years" />
    <input type="submit" value="Show costs" />

</form>
<?php
    if(isset($_POST['years']) and !empty($_POST['years'])){
    $years = $_POST['years'];
    $currentYear = date("Y");
?>
<table border="1">
    <tr><th>Year</th><th>January</th><th>February</th><th>March</th><th>April</th><th>May</th><th>June</th><th>July</th>
    <th>August</th><th>September</th><th>October</th><th>November</th><th>December</th><th>Total:</th></tr>

    <?php
        for($i=0;$i<$years;$i++){

            ?>
            <tr><td><?=$currentYear-$i?></td><td><?=$Jan=rand(1,999)?></td><td><?=$Feb=rand(1,999)?></td><td><?=$Mar=rand(1,999)?></td><td><?=$Apr=rand(1,999)?></td
                    ><td><?=$May=rand(1,999)?></td><td><?=$Jun=rand(1,999)?></td><td><?=$Jul=rand(1,999)?></td><td><?=$Aug=rand(1,999)?></td>
                <td><?=$Sep=rand(1,999)?></td><td><?=$Oct=rand(1,999)?></td><td><?=$Nov=rand(1,999)?></td><td><?=$Dec=rand(1,999)?></td>
                <td><?=$Jan+$Feb+$Mar+$Apr+$May+$Jun+$Jul+$Aug+$Sep+$Oct+$Nov+$Dec?></td></tr>

        <?php }?>


    <?php } ?>

</table>
</body>
</html>