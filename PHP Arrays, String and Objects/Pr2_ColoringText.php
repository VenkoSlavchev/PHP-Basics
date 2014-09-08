<!DOCTYPE html>
<html>
<head>
    <title>WordMapping</title>
</head>
<body>
<form method="POST">
    <textarea name="text"></textarea><br>
    <input type="submit" value="Color Text">
</form>
<?php
    if(isset($_POST['text']) and !empty($_POST['text'])){
        $inputText = $_POST['text'];
        $inputText = str_split($inputText);
        $inputText = array_filter($inputText);
        foreach($inputText as $chars){
            if (ord($chars)%2==0){
                echo "<span style='color: red'>$chars</span> ";
            }else{
                echo "<span style='color: blue'>$chars</span> ";
            }
        }

    }
?>
</body>
</html>