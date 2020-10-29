<?php
include("carga.php");
$usuarios = "SELECT materia from usuario";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link rel="stylesheet" href="estilos2.css">
    <body>
        <h1>RESULTADOS</h1>
        <form action = "buscar_usuario_.php" method= "get" class="form_search"> 
<input type="text" name = "busqueda" id ="busqueda" placehoder = "buscar" required>
<select class= "cuadro" name=tipo required>
    <option select hidden value="">DATO</option>
    <option value="id">ID</option>
    <option value="nombre">NOMBRE</option>
    <option value="email">EMAIL</option>
    <option value="materia">MATERIA</option>
    <option value="telefono">TELEFONO</option>
    <option value="genero">GENERO</option>
<input type="submit" value = "BUSCAR" class = "btn_search">

        </form>
        <div id="tabla">
     
       <a href="index.html"><input type="button" value="MENU">
       
    </body>

</html>