<?php

/*
For first 50 units – 3.50/unit
For next 100 units – 4.00/unit
For units above 150 – 6.50/unit
You can use conditional statements
*/

function electricity_bill($unit):float{
    $for_first_unit = 3.50; 
    $for_second_unit = 4.00; 
    $for_third_unit = 6.50; 

    if($unit <= 50){
        $elec_bill = $for_first_unit * $unit; 
        return $elec_bill; 
    }
    else if($unit > 50 && $unit <= 100){
        $elec_bill = ($for_first_unit * 50) + ($unit - 50) * $for_second_unit; 
        return $elec_bill;
    }
    else if ($unit > 150 ){
        $elec_bill = (50 * $for_first_unit) + (100 * $for_second_unit) + ($unit - 150) * $for_third_unit;
        return $elec_bill; 
    }
    else 
        return 0; 
}


$unit = 100; 

echo electricity_bill($unit);

?>
