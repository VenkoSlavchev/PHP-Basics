<?php
$rows = 4;
$cols = 2;
$firstColArr = array(" ","Name","Phone Number","Age","Adress");
$secondColArr = array(' ','Gosho','0882-321-423','24','Hadji Dimitar');
echo "<table border ='1'>";
for($tr=1;$tr<=$rows;$tr++){
    echo "<tr>";
        for($td=1;$td<=$cols;$td++){
            if($td==1){
                echo "<td style='background-color:orange'>".$firstColArr[$tr]."</td>";
            }else{
                echo "<td>".$secondColArr[$tr]."</td>";
            }
        }
    echo "</tr>";
}
echo "</table>"

?>