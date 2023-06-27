<?php 
include "./service/UserDAO.php";
include "./model/User.php";
function getUsers() {
    $usersQuery = getAllUsers();
    $userList = array();

    while($row = mysqli_fetch_assoc($usersQuery)){
        $user = new User(
            $row["id"],$row["nombre"],$row["apellido"],$row["cedula"]);
            $userList[] = $user;
    }
    return $userList;
}
function createUserBD(){
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $idNumber = $_POST["idNumber"];
    $user = new User(
        null,
        $name,
        $lastName,
        $idNumber);
    return createUserBD($user);
}
?>