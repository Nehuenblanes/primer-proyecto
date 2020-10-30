<?php
include("carga.php");
$busqueda = strtolower($_REQUEST ['busqueda']);
$dato = strtolower($_REQUEST ['tipo']);
$busqueda2 = strtolower($_REQUEST ['busqueda2']);
$dato2 = strtolower($_REQUEST ['tipo2']);
$usuarios = "SELECT * from usuario where $dato='$busqueda' AND $dato2 = '$busqueda2'";
$i=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSQUEDA</title>
    <link rel="stylesheet" href="estilos2.css">
    <body>
        <h1>RESULTADOS</h1>
        <form action = "buscar_usuario_.php" method= "get" class="form_search"> 
<input type="text" name = "busqueda" id ="busqueda" placehoder = "buscar" value = "<?php echo $busqueda; ?>" required>
<select class= "cuadro" name=tipo required>
    <option select hidden value=""><?php echo  $dato; ?></option>
    <option value="id">ID</option>
    <option value="nombre">NOMBRE</option>
    <option value="email">EMAIL</option>
    <option value="materia">MATERIA</option>
    <option value="telefono">TELEFONO</option>
    <option value="genero">GENERO</option>
    <option value="password">CONTRASEÑA</option>
    <input type="text" name = "busqueda2" id ="busqueda2" placehoder = "buscar" value = "<?php echo $busqueda2; ?>" required>
<select class= "cuadro" name=tipo2 required>
    <option select hidden value=""><?php echo  $dato2; ?></option>
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
        <?php  echo 'DATOS A BUSCAR: '.$busqueda .' EN: '.$dato .' Y: '.$busqueda2 .' EN: '.$dato2;  ?>
        <table>     
<thead><td>ID</td>      <td>NOMBRE</td>  <td>CONTRASEÑA</td>   <td>EMAIL</td>      <td>GENERO</td>     <td>MATERIA</td>        <td>TELEFONO</td></thead>
<?php
$result = mysqli_query($conexion,$usuarios);
 
while ($row=mysqli_fetch_assoc($result)) {
    $i++;
?>
<tr><td><?php echo $row['id']?></td><td><?php echo $row['nombre']?></td><td><?php echo $row['password']?></td> <td><?php echo $row['email']?></td><td><?php echo $row['genero']?></td><td><?php echo $row['materia']?></td><td><?php echo $row['telefono']?></td></tr>

<?php } mysqli_free_result($result); ?>

        </table>
        </div>
        <?php 
         echo 'COINCIDENCIAS: '.$i; ?> <br><br>
       <a href="index.html"><input type="button" value="MENU">
    </body>

</html>