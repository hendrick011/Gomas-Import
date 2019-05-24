<!DOCTYPE html>
  <head>
    <link rel="shortcut icon" href="img/favicon.ico.ico.ico" />
    <title>Eliminar</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://file.myfontastic.com/FmB3N6pcpz6z6omHxzKMCf/icons.css" rel="stylesheet">
</head>
<body>

  <header>
    <div class="header">
      <div class="contenedor">
      <h1 class="logo">Gomas Import</h1>
      <span class="icon-menu" id="boton-menu"></span>
      <nav class="nav" id="nav">
      <ul class="menu">
        <li class="menu__item"><a class="menu__link select" href="index.php">Inicio</a></li>
        <li class="menu__item"><a class="menu__link" href="">Sobre Nosotros</a>
          <ul>
            <li class="menu__item"><a class="menu__link" href="mision.php">Mision</a></li>
            <li class="menu__item"><a class="menu__link" href="vision.php">Vision</a></li>
            <li class="menu__item"><a class="menu__link" href="Historia.php">Historia</a></li>
          </ul>
          </li>
          <li class="menu__item"><a class="menu__link" href="quehacemos.php">Que hacemos?</a></li>
        <li class="menu__item"><a class="menu__link" href="mapasitio.php">Mapa de Sitio</a></li>
        <li class="menu__item"><a class="menu__link" href="tienda.php">Tienda</a></li>
        <li class="menu__item"><a class="menu__link" href="contactos.php">Contactos</a>
          <ul>
            <li class="menu__item"><a class="menu__link" href="guardar.html">Guardar</a></li>
            <li class="menu__item"><a class="menu__link" href="buscar.html">Buscar</a></li>
            <li class="menu__item"><a class="menu__link" href="editar.html">Editar</a></li>
            <li class="menu__item"><a class="menu__link" href="borrar.php">Eliminar</a></li>
          </ul>
        </li>
        <li class="menu__item"><a class="menu__link" href="ofertas.php">Ofertas</a></li>
      </ul>
      </nav>
      </div>
  </header>

  <div class="principal">
    <img src="img/img5.jpg" alt="" class="principal__img" height="250px" width="1350">
    <div class="contenedor">
      <h2 class="principal__titulo"></h2>
      <p class="principal__text"></p>
      </div>
<?php
$conexion=mysqli_connect("localhost","root","","dbgomas") or
    die("Problemas con la conexión");

mysqli_query($conexion,"delete from tbcontactos") or
  die("Problemas en el select:".mysqli_error($conexion));
echo "Se efectuó el borrado de todos los contactos.";
mysqli_close($conexion);
?>
<footer class="footer">
  <div class="social">
    <a href="" class="icon-facebook"></a>
    <a href="" class="icon-twitter"></a>
    <a href="" class="icon-instagram"></a>
    </div>
    <p class="copy">&copy; Gomas Import 2018 - Todos los derechos reservados.</p>
</footer>

<script src="main.js"></script>

</body>
</html>
