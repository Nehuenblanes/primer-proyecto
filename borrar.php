<?php
include("carga.php");
$usuarios = "SELECT * from usuario";
?>
<title>BORRAR</title>
<div id="tabla">
    <h1>BORRAR</h1>
    
        <table>                
<thead><td>ID</td>      <td>NOMBRE</td> <td>CONTRASEÑA</td>    <td>EMAIL</td>      <td>GENERO</td>     <td>MATERIA</td>        <td>TELEFONO</td> <td>BORRAR</td></thead>
<?php
$result = mysqli_query($conexion,$usuarios);
while ($row=mysqli_fetch_assoc($result)) {
?>
 <link rel="stylesheet" href="estilos1.css">
<tr><td><?php echo $row['id']?></td><td><?php echo $row['nombre']?></td><td><?php echo $row['password']?></td><td><?php echo $row['email']?></td><td><?php echo $row['genero']?></td><td><?php echo $row['materia']?></td><td><?php echo $row['telefono']?></td>
<td><a href="borrado.php?ID=<?php echo $row['id'] ?>"><input type="button" value="Eliminar"></a></td></tr>

<?php } mysqli_free_result($result); ?>

        </table>
        <br>
        <a href="index.html"><input type="button" value="MENU">
        </div>