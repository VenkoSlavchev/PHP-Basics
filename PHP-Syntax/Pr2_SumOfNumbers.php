<html>
<head>
    <title>SumOfNumbers</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="firstNumber" placeholder="FirstNumber">
        <input type="text" name="secondNumber" placeholder="SecondNumber">
        <input type="submit" name="submit" value="Result">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $first = $_POST['firstNumber'];
        $second = $_POST['secondNumber'];
        $sum = $first + $second;
        $isInt = is_int($sum);
        if($isInt){
            echo '$firstNumber + $secondNumber = '.$first.' + '.$second.' = '.$sum.'.00';
        }else{
            echo '$firstNumber + $secondNumber = '.$first.' + '.$second.' = '.round(($sum),2);
        }

    }
    ?>
</body>
</html>