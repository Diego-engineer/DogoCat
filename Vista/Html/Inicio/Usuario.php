<?php
session_start();

if (!isset($_SESSION["Rol"])) {
    header("location: ../Inicio/Login.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Estilos/admin.css">
    <title>Bienvenidos</title>


</head>
<body>
    <header id="titulo">
        <a href="/Vista/Html/Inicio/inicio.html" style="display: inline-block; padding: 13px 55px; border: 1px solid black; border-radius: 25px; color: black; text-decoration: none; float: right; "> Cerrar Sesion </a>
       <strong><h1>¡ Bienvenidos a Dogocat la fundacion digital de adopcion de animales !</h1></strong>
       <h2> Estamos emocionados de tenerte aqui <br>porque cada vista a nuestra plataforma significa una oportunidad para cambiar la vida de un adorable amigo de cuatro patas </h2>
    </header>
    <section>
        <nav id="navega">
            <ul class="menu">
              
                
                <li><a href="/Vista/Html/Mascotas/mascoUsuario.php">Ver Mascotas</a></li>
                <li><a href="../../Html/Donaciones/InsumosUsuario.html">Realizar Donacion de Insumos</a></li>
                <li><a href="../../Html/Donaciones/DineroUsuario.html">Realizar Donacion de Dinero    </a></li>
               
            </ul>
        </nav>
    </section>
</head>
<body>
    <center> <h1> </h1>
        
        <p>  </p>
        <br> <br>
        <img src="https://t2.ea.ltmcdn.com/es/posts/8/1/2/adoptar_mascotas_por_internet_1218_orig.jpg" alt="">


        <br> <br>

        <button> Salir </button>
    </center>
</body>
</html>