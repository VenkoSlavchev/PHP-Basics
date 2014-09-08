<!DOCTYPE html>
<html>
<head>
    <title>WordMapping</title>
</head>
<body>
<form method="POST">
   <textarea name="text"></textarea><br>
    <input type="submit" value="Count Words">
</form>
<table border="1">
    <?php
        if(isset($_POST['text']) and !empty($_POST['text'])){
            $inputText = strtolower($_POST['text']);
            $inputText = preg_split('/[\W+ ]/',$inputText);
            $inputText = array_filter($inputText);
            $orderedText = array_count_values( $inputText);

            foreach($orderedText as $key => $value){
             echo "<tr><td>$key</td><td>$value</td></tr>";

        }
        }
    ?>
</table>
</body>
</html>
