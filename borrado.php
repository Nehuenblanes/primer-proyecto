<?php 
$id = $_GET['ID'];
$borrado = "DELETE FROM usuario WHERE id= $id";

include("carga.php");
echo $id;
echo "hola";
$result = mysqli_query($conexion,$borrado);
if($result){header('Location: '."borrar.php");}


?>
