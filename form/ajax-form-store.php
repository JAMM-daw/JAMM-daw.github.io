<?php

require_once "db.php";

$nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mensaje = mysqli_real_escape_string($conn, $_POST['mensaje']);
$checkbox1 = mysqli_real_escape_string($conn, $_POST['checkbox1']);
$checkbox2 = mysqli_real_escape_string($conn, $_POST['checkbox2']);



if(mysqli_query($conn, "INSERT INTO suscripciones (nombre, email, mensaje, privacidad, suscrito) VALUES('" . $nombre . "', '" . $email . "', '" . $mensaje . "', '" . $checkbox1 . "', '" . $checkbox2 . "')")) {
 echo '1';
} else {
   echo "Error: " . $sql . "" . mysqli_error($conn);
}


mysqli_close($conn);

?>