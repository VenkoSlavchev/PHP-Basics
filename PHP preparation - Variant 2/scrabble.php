<?php
    $mainWordInput = $_GET['mainWord'];
    $wordsInput = $_GET['word'];

    $mainWordObj = json_decode($mainWordInput);

    preg_match('/\d+/',key($mainWordObj),$rowMainWord);
    $rowMainWord = $rowMainWord[0];


    $mainWordArr = (array)$mainWordObj;
    $mainWord = $mainWordArr[key($mainWordObj)];

    $words = json_decode($wordsInput);

    $tempRow = array_fill(0,strlen($mainWord), "-");
    for($i =0;$i<strlen($mainWord);$i++){
        $board[] = $tempRow;
        if($rowMainWord-1 == $i){
            $board[$i] = str_split($mainWord);
        }
    }

    usort($words,function($a,$b){
        return strlen($b)-strlen($a);
    });

    $tableSize = strlen($mainWord);
    $topRow = $rowMainWord-1;
    $bottomRow = $tableSize - $rowMainWord;
    foreach($words as $k => $word){
        $wordLen= strlen($word);
        for($col=0;$col<$tableSize;$col++){
            for($wordIndex=0;$wordIndex<$wordLen;$wordIndex++){
                if($mainWord[$col] == $word[$wordIndex]){
                     $topLen = $wordIndex;
                    $bottomLen = $wordLen - $wordIndex-1;

                    if($topLen <= $topRow &&  $bottomLen<=$bottomRow){
                        $targetWord = $word;
                        break;
                    }

                }
            }

            if(isset($targetWord)){
                break;
            }
        }

        if(isset($targetWord)){
            break;
        }
    }





    $crossPoint = [];
?> 