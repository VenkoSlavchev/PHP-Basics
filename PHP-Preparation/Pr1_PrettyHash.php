<?php
$text = $_GET['text'];
$hashValue = $_GET['hashValue'];
$fontSize = $_GET['fontSize'];
$fontStyle = $_GET['fontStyle'];

$hashedTxt = hashText($text,$hashValue);
    $style =




    function hashText($text,$hashValue){
        $result ="";
        for($i=0;$i<strlen($text);$i++){
            $ch = ord($text[$i]);
            if($i%2==0){
                $result .= chr($ch+ intval($hashValue));
            }else{
                $result .= chr($ch- intval($hashValue));
            }
        }
    }



?>