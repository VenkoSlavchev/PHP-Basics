<?php
function checkType($check){
    if( is_double($check) || is_int($check)){
        echo var_dump($check);
    }else{
        echo gettype($check);
    }
}
    checkType("hello");
    checkType(15);
    checkType(array(1,2,3));
    checkType(1.234);
    checkType((object)[2,34]);


?>
