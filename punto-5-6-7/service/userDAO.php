<?php
include "connection.php";

function getAllUsers(){
    return mysqli_query(CONNECTION, "SELECT * FROM usuarios");
}

function getUserByIdNumber($idNumber){
    return mysqli_query(CONNECTION, "SELECT * FROM usuario WHERE cedula = $idNumber");

}
    
//print_r(mysqli_fetch_all($quey,MYSQLI_ASSOC));
?>