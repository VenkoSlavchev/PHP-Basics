<?php
function showNumbers($value){
    $lastDigit=0;
    $middleDigit=0;
    $firstDigit=0;
    $isEqual=false;
    if($value<102){
        echo 'no';
        return;
    }else if($value>1000){
        for($i=102;$i<=999;$i++){
            $temp=$i;
            $lastDigit=$temp%10;
            $temp/=10;
            $middleDigit=$temp%10;
            $temp/=10;
            $firstDigit=$temp%10;
            if(($firstDigit!=$middleDigit)&&($firstDigit!=$lastDigit)&&($middleDigit!=$lastDigit)){
                echo $i.' ';
            }
        }
    }else{
        for($i=102;$i<=$value;$i++){
            $temp=$i;
            $lastDigit=$temp%10;
            $temp/=10;
            $middleDigit=$temp%10;
            $temp/=10;
            $firstDigit=$temp%10;
            if(($firstDigit!=$middleDigit)&&($firstDigit!=$lastDigit)&&($middleDigit!=$lastDigit)){
                echo $i.' ';
            }
        }
    }

}
showNumbers(145);
?>