<?php
include("carga.php");
$usuarios = "SELECT * from usuario";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIO</title>
    <link rel="stylesheet" href="estilos2.css">
    <body>
        <h1>USUARIOS</h1>
        <form action = "editar_usuario.php" method= "get" class="form_search"> 
          
         <input type="phone" name = "ID" id ="busqueda" value ="ID" required>
         <input type="text" name = "busqueda" id ="busqueda2" placehoder = "buscar" required>
          <select class= "cuadro" name=tipo required>
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
        <table>                
<thead><td>ID</td>      <td>NOMBRE</td> <td>PASSWORD</td>    <td>EMAIL</td>      <td>GENERO</td>     <td>MATERIA</td>        <td>TELEFONO</td></thead>
<?php
$result = mysqli_query($conexion,$usuarios);
while ($row=mysqli_fetch_assoc($result)) {
?>
<tr><td><?php echo $row['id']?></td><td><?php echo $row['nombre']?></td><td><?php echo $row['password']?></td><td><?php echo $row['email']?></td><td><?php echo $row['genero']?></td><td><?php echo $row['materia']?></td><td><?php echo $row['telefono']?></td></tr>

<?php } mysqli_free_result($result); ?>

        </table>
        </div>
       <a href="index.html"><input type="button" value="MENU">
    </body>

</html>