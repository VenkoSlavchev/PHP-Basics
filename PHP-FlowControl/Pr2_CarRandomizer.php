
    <!DOCTYPE html>
    <html>
<head>
    <title>CarRandomizer</title>
</head>
<body>
<form method="POST">
    Enter cars,separated by coma: <br>
    <input type="text" name="cars" />
    <input type="submit" value="Show Result" />

</form>
<?php
   if(isset($_POST['cars']) and !empty($_POST['cars'])){
       $carsList = $_POST['cars'];
       $cars = preg_split('/[, ]+/',$carsList);
       ?>
       <table border="1">
           <tr><th>Car</th><th>Color</th><th>Count</th></tr>

<?php
    $colors = ['red','yellow','blue','black','silver','green'];
       foreach($cars as $carName){
            $count = rand(1,5);
            $randColor = array_rand($colors);
?>
           <tr><td><?=$carName?></td><td><?=$count?></td><td><?=$colors[$randColor]?></td></tr>

           <?php }?>


<?php } ?>
       </table>
</body>
</html>