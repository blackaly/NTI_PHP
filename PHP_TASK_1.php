<?php

$arthematicSymbol = '+'; 
$numberOne = 5; 
$numberTwo = 2; 

    // We can use the console to get the input from the user, by: 
    // $input = readline("Enter the arthematic symbole: ");
    // $numberOne = (int)readline("Enter number one: ");
    // $numberTwo = (int)readline("Enter number two: ");


switch($arthematicSymbol){
    case '+': 
        echo $numberOne + $numberTwo; 
        break; 
    case '-': 
        if($numberOne >= $numberTwo){
            echo $numberOne - $numberTwo;
            break; 
        }
        else{
            echo $numberTwo - $numberOne; 
            break;
        }

    case '*': 
    case 'x': 
        echo $numberOne * $numberTwo; 
        break; 
    case '/': 
        if($numberOne === 0){
            echo "Invaild Operation";
            break;
        }  
        else{
            echo $numberTwo / $numberOne;   // BY assuming that the number one is
            break;                          // the denominator.
        }  
    default: 
        echo "Invaild Operation"; 
        break;
}


?>
