<?php
    echo"<form action='' method='GET'>";
    echo "<label>Enter amount:</label>";
    echo"<input type='text' name='amount'> <br>";
    echo"<input type='radio' name='USD'>";
    echo "<label>USD</label>";
    echo"<input type='radio' name='EUR'>";
    echo "<label>EUR</label>";
    echo"<input type='radio' name='BGN'>";
    echo "<label>BGN</label> <br>";
    echo "<label>Compound Interest Amount:</label>";
    echo"<input type='text' name='compoundAmount'> <br>";
    echo "<select name='selectCatalog'>";
    echo "<option>6 Months</option>";
    echo "<option>1 Year</option>";
    echo "<option>2 Years</option>";
    echo "<option>5 Years</option>";
    echo "</select>";
    echo"<input type='submit' value='Calculate' name='submitButton'>";
    echo"</form>";
    if(isset($_GET['submitButton'])){
        $result=0;
        $money=$_GET['amount'];

        //calculate radiovalue into months
        $tempRadioValue = $_GET['selectCatalog'];
        $tempRadioValue = preg_split('/[\D]+/',$tempRadioValue);
        $radioValue = $tempRadioValue[0];
        if ($radioValue==1){
            $radioValue=12;
        }elseif($radioValue==2){
            $radioValue=24;
        }elseif($radioValue==5){
            $radioValue=60;
        }
        //calculate Compound Interest Amount in %
        $compoundValue = $_GET['compoundAmount'];
        $compoundValue=$compoundValue/12;
        //Compound Interest Amount in number
        $compoundValue=(100+$compoundValue)/100;
        //calculating the result
        $result = $compoundValue*$money;
        for($i=0;$i<$radioValue-1;$i++){
            $result*=$compoundValue;
        }
        $result = round($result,2);

        if(isset($_GET['USD'])){
            echo '$'.$result;
        }else if(isset($_GET['EUR'])){
            echo '€'.$result;
        }else if (isset($_GET['BGN'])){
            echo $result.'lv.';
        }
    }
?> 