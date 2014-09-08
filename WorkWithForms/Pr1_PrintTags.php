<?php
    echo "Enter tags: \n";
    echo"<form action='' method='GET'>";
    echo"<input type='text' name='textField'>";
    echo"<input type='submit' name='submitButton'>";
    echo"</form>";

    if(isset($_GET['submitButton'])){
        $text = $_GET['textField'];
        $pieces = preg_split('/[\s,]+/',$text);
        $i=0;
        foreach($pieces as $piece){
            echo "{$i} : {$piece}"."<br>";
            $i+=1;

        }
    }





?>

