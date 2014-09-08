<!DOCTYPE html>
<html>
<head>
    <title>SumOfDigits</title>
</head>
<body>
<form method="POST">
    Input String:
    <input type="text" name="input" />
    <input type="submit" value="Submit" />
</form>
<table border="1">
<?php
if(isset($_POST['input']) and !empty($_POST['input'])){
    $inputString = preg_split('/[, ]+/',$_POST['input']);
    $sum=0;
    for($i=0;$i<count($inputString);$i++){
        if(is_numeric($inputString[$i])){ ?>
            <tr><td><?=$inputString[$i]?></td><td><?=array_sum(str_split($inputString[$i]));?></td></tr>
     <?php   }else{?>
            <tr><td><?=$inputString[$i]?></td><td><?='I cannot sum that';?></td></tr>
      <?php  }

    }
}
?>
</table>
</body>
</html>