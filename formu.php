<?php
$nombre = $_POST["nombre"];
$password = $_POST["password"];
$genero = $_POST["genero"];
$email = $_POST["email"];
$materia = $_POST["materia"];
$telefono = $_POST["telefono"];

if(!empty($nombre) || !empty($password) || !empty($genero) || !empty($email) || !empty($materia) || !empty($telefono) ){

    $host = "localhost";
    $dbusername = "root";
   $dbpassword = "";
    $dbname = "estudiante";
 $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
 if(mysqli_connect_error()){ //importantisimo
    die('connect error ('.mysqli_connect_errno().') '.mysqli_connect_error()); //verificar si el dato tiene erro en la ultima conexion
 }
 else {
     $SELECT = "SELECT telefono from usuario where telefono = ? limit 1";
     $INSERT = "INSERT INTO usuario (nombre,password,genero,email,materia,telefono)values(?,?,?,?,?,?)"; //aun no se que datos voy a enviar
     $stmt = $conn -> prepare($SELECT);
     $stmt -> bind_param("i",$telefono);
     $stmt -> execute();
     $stmt -> bind_result($telefono);
     $stmt -> store_result(); //transferir consulto de resultados de la ultima consulta
     $rnum = $stmt ->num_rows; //numero de filas del resultado de la sentencia
     if ($rnum == 0){
         $stmt -> close(); //cerrar conexion de base de datos
         $stmt = $conn ->prepare($INSERT); //prepare abriendo la base de datos
         $stmt -> bind_param("sssssi",$nombre,$password,$genero,$email,$materia,$telefono); //todos son string menos el telefono
         $stmt -> execute();
         echo "REGISTRO COMPLETADO";
     }
else echo"alguien ya registro ese numero";
 }
 $stmt->close();
 $conn->close();

}else{
    echo "todos los datos son obligatorios";
    die();

}

?>