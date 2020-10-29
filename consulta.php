<?php
include("carga.php");
$usuarios = "SELECT * from usuario";
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
        <div id="tabla">
        <table>                
<thead><td>ID</td>      <td>NOMBRE</td>    <td>EMAIL</td>      <td>GENERO</td>     <td>MATERIA</td>        <td>TELEFONO</td></thead>
<?php
$result = mysqli_query($conexion,$usuarios);
while ($row=mysqli_fetch_assoc($result)) {
?>
<tr><td><?php echo $row['id']?></td><td><?php echo $row['nombre']?></td><td><?php echo $row['email']?></td><td><?php echo $row['genero']?></td><td><?php echo $row['materia']?></td><td><?php echo $row['telefono']?></td></tr>

<?php } mysqli_free_result($result); ?>

        </table>
        </div>
       <a href="index.html"><input type="button" value="MENU">
    </body>

</html>