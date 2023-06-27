<?php 
$message = "";
if(isset($_POST["age_number"])) {
    $ageNumber = intval($_POST["age_number"]);
    if($ageNumber >= 18){
        $message = "Es mayor de edad";
    }else{
        $message =  "No es mayor de edad";
    }
}

?>