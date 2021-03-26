<?php

include("con_db.php");

if (isset($_POST['logearse'])) {
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    $logearse = "SELECT * FROM datos WHERE nombre = '$usuario' and clave = '$contrasenia'";
    $comprobar = mysqli_query($conex,$logearse);

    if ($comprobar) {
      
        header("location: ../UserPanel/userPanel.php");
    }
}



if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];

    $consulta = "INSERT INTO datos (nombre,clave,email) VALUES ('$name','$clave','$email')";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        ?> <h3 class="registroOk"> BIEN</h3>
        <?php
    }else {
        ?> <h3 class="registroMal">MAL</h3> 
        <?php

    }
}




?>