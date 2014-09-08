<!DOCTYPE html>
<html>
<head>
    <title>WordMapping</title>
</head>
<body>
<form method="POST">
    <textarea name="text"></textarea><br>
    <input type="submit" value="Submit">
</form>
<?php
    if(isset($_POST['text']) and !empty($_POST['text'])){
        $resultText = $_POST['text'];
        $firstItemForReplace = '<a href="';
        $firstItemToReplace = '[URL=';
        $secondItemForReplace = '">';
        $secondItemToReplace = ']';
        $thirdItemForReplace = '</a>';
        $thirdItemToReplace = '[/URL]';

        $firstReplace =  str_replace($firstItemForReplace, $firstItemToReplace,$resultText);
        $resultText = $firstReplace;
        $secondReplace = str_replace($secondItemForReplace, $secondItemToReplace,$resultText);
        $resultText = $secondReplace;
        $thirdReplace =  str_replace($thirdItemForReplace, $thirdItemToReplace,$resultText);
        $resultText = $thirdReplace;

    echo htmlentities($resultText);
    }

?>
</body>
</html>