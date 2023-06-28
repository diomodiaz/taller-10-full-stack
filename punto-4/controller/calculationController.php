<?php

$message = "";

if (isset($_POST["birth_date"])) {
    $birthDate = $_POST["birth_date"];
    $today = date("Y-m-d");
    $age_diff = date_diff(date_create($birthDate), date_create($today));
    $age = $age_diff->y;
    if ($age < 18) {
        $message = "Tienes $age" . " años, eres menor de edad";
    } else {
        $message = "Tienes $age" . " años, eres mayor de edad";
    }
}
