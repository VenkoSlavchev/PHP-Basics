<?php
    echo "Enter tags: \n";
    echo"<form action='' method='GET'>";
    echo"<input type='text' name='textField'>";
    echo"<input type='submit' name='submitButton'>";
    echo"</form>";
//Pesho, homework, homework, exam, course, PHP
    if(isset($_GET['submitButton'])){
        $text = $_GET['textField'];
        $pieces = preg_split('/[\s,]+/',$text);
        $counter =1;
        $maxCounter=1;
        $temp="";
        $maxTag="";
        $arrayOfValues= array();
        for($i=0;$i<count($pieces);$i++){
            $temp=$pieces[$i];
            for($j=1;$j<count($pieces);$j++){
                if($pieces[$i]==$pieces[$j]){
                    $counter++;
                    $temp=$pieces[$i];
                }

            }
            if($counter>$maxCounter){
                $maxCounter=$counter;
                $arrayOfValues[$temp]=$maxCounter;
                $maxTag=$temp;

            }else{
                $arrayOfValues[$temp]=$counter;
            }
            $counter = 0;
        }
        arsort($arrayOfValues);
        foreach($arrayOfValues as $x=>$x_value) {
            echo  $x . ":" . $x_value;
            echo "<br>";
        }
        echo "Most Frequent Tag is : {$maxTag}.";
    }

?> 