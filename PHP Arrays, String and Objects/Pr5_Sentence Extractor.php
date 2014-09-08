<!DOCTYPE html>
<html>
<head>
    <title>WordMapping</title>
</head>
<body>
<form method="POST">
    <textarea name="text"></textarea><br>
    <input type="text" name="word"><br>
    <input type="submit" value="Submit">
</form>
<?php
    if(isset($_POST['text']) and isset($_POST['word']) and !empty($_POST['text']) and !empty($_POST['word']) ){
        $areaText = $_POST['text'];
        $wordInText = ' '.$_POST['word'].' ';
        $areaText = preg_match_all('/\w+[^.!?]*[.!?]/',$areaText,$matches);


        foreach($matches[0] as $match){
           if(strpos($match,$wordInText) !== false){
                echo $match . "<br>";
            }
        }
    }

?>
</body>
</html>