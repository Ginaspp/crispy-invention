<?php
session_start();
$correo= $_POST['mail'];
$contraseña= $_POST['contraseña'];

if($correo=='cliente@gmail.com' && $contraseña=='phpintermedio'){
   $_SESSION['clientes'] = $correo;
   header("Location: clientes.php");
} else {
    header("Location: clientes.php?error");

    }

?>