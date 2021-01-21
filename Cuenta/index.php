<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Insertar datos</title>
    <link rel="stylesheet" href="estiloscuenta.css">
    <link rel="stylesheet" href="../diseño.css">
</head>
<body>

<nav  class="navbar navbar-expand-lg  ">
   
    <a class="navbar-brand" href="#"  ><img src="..\imagenes\nuevodiarecort.png"   id="imgdia"  alt=""> 
      <img src="..\imagenes\nuevonocherecort.png" id="imgnocturna" style="display: none;" alt="">
      </a>
 
  <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  ml-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="..\principal.html">Inicio </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="..\Servicios\alquiler.html">Servicio</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="..\Productos\IMPRESORAS\impresoras.html">Impresoras</a>
          <a class="dropdown-item" href="..\Productos\Copiadoras\copiadoras.html">Multifunciones</a>
          
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="..\Contacto\contacto.html">Contacto</a>
      </li>
      
      <li class="nav-item active">
        <button id="botonTema" style="font-size: 20px;background: transparent;border: 0;" onclick="cambiarModo();cambiarImagen();cambiarlogo()" >
         
          <img src="..\imagenes\modo\dom.png" id="mododia" style="width: 30px;display: none;" alt="">
               
          <img src="..\imagenes\modo\luna.png"  id="modonoche" style="width: 30px;" alt="">
      
         </button>
      </li>
         
    </ul>

  </div>
</nav>


    <div class="padre">


    <form action="index.php" method="POST">
  
      <div class="contieneForm">

      <label for=""> Elija su nombre de usuario: </label>
      <input class="estiloinput" placeholder="Usuario" type="text" name="texto" id="texto"> <br>
      <label for=""> Ingrese una contraseña:</label>
      <input class="estiloinput" placeholder="Contraseña" type="password" name="clave" id="clave"> <br>
      <label for="">Ingrese su correo electronico:</label>
      <input class="estiloinput" placeholder="Correo" type="mail" name="correo" id="correo"> <br>
        
      <div style="display:flex;justify-content:center;">
      <input id="botonAceptar" type="submit" name="aceptar" value="Registrarme!"> 
      </div>
       

      </div>
        

    </form>

    </div>   
        <?php
            $servidor = "localhost";
            $nombreusuario = "root";
            $password = "";
            $db = "prueba";
        
            $conexion = new mysqli($servidor, $nombreusuario, $password, $db);
        
           

            if(isset($_POST['aceptar'])){
                $texto = $_POST['texto'];              
                $clave = $_POST['clave'];
                $correo = $_POST['correo'];
                $sql = "INSERT INTO datos (usuario,clave,mail) VALUES('$texto','$clave','$correo')";
                
                if($conexion->query($sql) === true){
                    
                }else{
                    
                }
                $conexion->close();
            }

        ?>


               <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

<!-- Footer Elements -->
<div style="text-align: center;"> <h6> <b>Envianos un mail : <a href="mailto:copitecnicasf@gmail.com"> <img src="https://img.icons8.com/color/48/000000/gmail.png"/> </a> </b> <br> <b>Seguinos en Facebook! :</b>   <a href="https://www.facebook.com/copitecnicadigital" target="_blank"><img alt="Siguenos en Facebook" src="https://lh3.googleusercontent.com/-NSLbC_ztNls/T6VX0g6z8AI/AAAAAAAAA0A/_vyIBrmZbuY/s48/facebook48.png" width=48 height=48  /></a> </div> </h6>
<br>
<!-- Copyright -->
<div><h6 style="text-align: center;">Web Copitecnica <br> Derechos reservados ® Federico Barreiro</h6></div>
<!-- Copyright -->

</footer>
<!-- Footer -->

    <script src="../codigo.js"></script>
</body>
</html>