<?php
$text = $_GET['text'];
    preg_match_all('/(\b[A-Z]+\b|\b[A-Z]+(?=[0-9]+))/',$text,$matches);

 var_dump($matches);
   $splittedText  = preg_split('/(\b[A-Z]+\b|\b[A-Z]+(?=[0-9]+))/',$text);

    $result ="";
$match = $matches[0];
    $reversedWords = [];
    foreach($match as $mat){
       $reversedWords[]= palindrome($mat);
    }
    for($i=0;$i<count($reversedWords)+1;$i++){
        $result .= $splittedText[$i].$reversedWords[$i];
    }
    $result =  htmlspecialchars($result);
    echo "<p>$result</p>";









    function palindrome($value){
        $l=[];
        $m='';
        $reversed = strrev($value);
        $length = strlen($reversed);
        if((strlen($reversed)<2)){
            return $reversed.$reversed;
        }elseif($reversed == $value){
            for($i=0;$i<$length;$i++){
                $l[] = $reversed[$i].$reversed[$i];
                $m = implode ('',$l);
            }
            return $m;

        }else{
            return $reversed;
        }
    }



?>