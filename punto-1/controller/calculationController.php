<?php 

$result = 0;

if (isset($_POST["first_number"]) 
&& isset($_POST["second_number"]) 
&& isset($_POST["operation_type"])){
    $firstNumber = intval($_POST["first_number"]);
    $secondNUmber = intval($_POST["second_number"]);
    $operationType = $_POST["operation_type"];

    switch ($operationType) {
        case "add":
            $result = $firstNumber + $secondNUmber;
            break;
        case "sub":
            $result = $firstNumber - $secondNUmber;
            break;
        case "mul":
            $result = $firstNumber * $secondNUmber;
            break;
        case "div":
            $result = $firstNumber / $secondNUmber;
            break;
        default:
            echo "Operación no permitida";
    }

}



?>