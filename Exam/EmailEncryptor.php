<?php
    $recipient = htmlspecialchars($_GET['recipient']);
    $subject = htmlspecialchars($_GET['subject']);
    $message = htmlspecialchars($_GET['body']);
    $key = $_GET['key'];
    $keyNums = [];
    $charSum = [];
    $result = "<p class='recipient'>$recipient</p><p class='subject'>$subject</p><p class='message'>$message</p>";

    $num=2;

    for($i=0;$i<strlen($key);$i++){
        $keyNums[]= ord($key[$i]);
    }
    $max=count($keyNums);
    $length = count($keyNums);


   for($j=0,$k=0;$j<strlen($result);$j++,$k++){
        if($j == $max){
            $k=0;
            $max=($length*$num);
            $num++;
        }
       $charSum[]= dechex((ord($result[$j]) * $keyNums[$k]));

   }

    $end="|" . implode('|',$charSum) ."|";
    echo $end;






?> 