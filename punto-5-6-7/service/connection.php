<h1>Base de Datos</h1>
<?php 
    const CONNECTION = new mysqli("localhost","root","","mi_proyecto");

    $quey = mysqli_query(CONNECTION, "SELECT * FROM usuarios");
    
    print_r(mysqli_fetch_all($quey,MYSQLI_ASSOC));
?>