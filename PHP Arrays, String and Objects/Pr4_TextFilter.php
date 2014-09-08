<!DOCTYPE html>
<html>
<head>
    <title>WordMapping</title>
</head>
<body>
<form method="POST">
    <input type="text" name="text"><br>
    <input type="text" name="ban"><br>
    <input type="submit" value="Replace">
</form>
<?php
if(isset($_POST['text']) and isset($_POST['ban']) and !empty($_POST['text']) and !empty($_POST['ban']) )
    $banlist = $_POST['ban'];
    $banlist = preg_split('/[, ]+/',$banlist);
    var_dump($banlist);
    $resultText = $_POST['text'];
    $result = "";
    for($i=0;$i<count($banlist);$i++){
        $dots = str_repeat('*',strlen($banlist[$i]));
        $result =  str_replace($banlist[$i],$dots,$resultText);
        $resultText = $result;
    }
    echo $resultText;
?>
</body>
</html>