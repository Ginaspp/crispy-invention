<?php 
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$correo= $_POST['correo'];
$consulta=$_POST['consulta'];

include('validar_consultas.php');
mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT,'$nombre','$apellido','$correo','$consulta')");

header("Location:contacto.php?ok_enviado");
?>