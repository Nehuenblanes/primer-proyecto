<?php
include("carga.php");
$usuarios = "SELECT materia from usuario";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSQUEDA</title>
    <link rel="stylesheet" href="estilos2.css">
    <body>
        <h1>BUSQUEDA</h1>
        <form action = "buscar_usuario2_.php" method= "get" class="form_search"> 
          
<input type="text" name = "busqueda" id ="busqueda" placehoder = "buscar"  value = "DATO"required>
<select class= "cuadro" name=tipo required>
    <option select hidden value="">DATO 1</option>
    <option value="id">ID</option>
    <option value="nombre">NOMBRE</option>
    <option value="email">EMAIL</option>
    <option value="materia">MATERIA</option>
    <option value="telefono">TELEFONO</option>
    <option value="genero">GENERO</option>
    <option value="password">CONTRASEÑA</option>
    <input type="text" name = "busqueda2" id ="busqueda2" placehoder = "buscar" value = "DATO" required>
<select class= "cuadro" name=tipo2 required>
    <option select hidden value="">DATO 2</option>
    <option value="id">ID</option>
    <option value="nombre">NOMBRE</option>
    <option value="email">EMAIL</option>
    <option value="materia">MATERIA</option>
    <option value="telefono">TELEFONO</option>
    <option value="genero">GENERO</option>
    <option value="password">CONTRASEÑA</option>
<input type="submit" value = "BUSCAR" class = "btn_search">

        </form>
        <div id="tabla">
     
       <a href="index.html"><input type="button" value="MENU">
       
    </body>

</html>