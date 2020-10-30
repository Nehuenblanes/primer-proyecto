<?php 
$id = $_GET['ID'];
$busqueda = $_GET['busqueda'];
$tipo = $_GET['tipo'];
echo "se va a cambiar ".$busqueda." en: ".$tipo. " con el id: ".$id;

$edit = "UPDATE usuario SET $tipo = '$busqueda' where id = $id";

include("carga.php");

$result = mysqli_query($conexion,$edit);
if($result){header('Location: '."editar.php");}


?>