<?php

echo "<table>";

for($i = 1; $i <= 8; $i++){
    echo "<tr>"; 
    for($j = 1; $j <= 8; $j++){ 
        $equation = $i + $j; 
         if($equation % 2 == 0){
           echo "<td style = 'height: 50px; width: 50px; background-color:#fff;'></td>";
        }
        else{
            echo "<td style = 'height: 50px; width: 50px; background-color:#000;'></td>"; 
        } 
         
       
    }
    echo "</tr>";
}
echo "</table>";

?>
