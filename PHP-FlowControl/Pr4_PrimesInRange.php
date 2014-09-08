<!DOCTYPE html>
<html>
<head>
    <title>PrimesInRange</title>
</head>
<body>
<form method="POST">
   Starting index:
    <input type="text" name="start" />
    End:
    <input type="text" name="end" />
    <input type="submit" value="Submit" />
</form>
<?php
function isPrimeNumber($value){
    for($i=2;$i<$value;$i++){
        if ($value%$i == 0){
            return false;
        }
    }
    return true;
}
    if(isset($_POST['start']) and isset($_POST['end'])){
        echo isPrimeNumber(4);

        for($i=$_POST['start'];$i<=$_POST['end'];$i++){
           if($i==($_POST['end'])){
               if(isPrimeNumber($i)==1){
                   echo "<b>$i</b>";
               }else {
                   echo $i;
               }
           }else{
               if(isPrimeNumber($i)==1){
                   echo "<b>$i</b>,";
               }else {
                   echo $i.',';
               }
           }

        }
    }




?>
</body>
</html>