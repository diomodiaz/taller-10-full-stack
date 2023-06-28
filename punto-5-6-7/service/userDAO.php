<?php
include "connection.php";

function getAllUsers(){
    return mysqli_query(CONNECTION, "SELECT * FROM usuarios");
}

function getUserByIdNumber($idNumber){
    return mysqli_query(CONNECTION, "SELECT * FROM usuario WHERE cedula = $idNumber");

}
function createUserBDD($user){
    $query = "INSERT INTO usuarios (nombre,apellido,cedula) VALUES";
    $query .= "'".$user->nombre."',";
    $query.= "'".$user->apellido."',";
    $query.= "'".$user->cedula."'";
    return mysqli_query(CONNECTION,$query);
}
    
//print_r(mysqli_fetch_all($quey,MYSQLI_ASSOC));
?>