<?php
require 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$username = $_POST["username"];
$password =$_POST["password"]

$sql = "SELECT id FROM  registro WHERE  username = '$username'";
$result = $conn->query ($sql);

if ($result->num rows > 0) {
    echo'<script>alert("el nombre de usuario ya esta en uso. por favor elige
    otro.");window.location.href = "registro.php";</script>';
} else {
	$sql = "INSERT INTO  registro (nombre,email, nombreusuario,contraseña)
     VALUES ('$nombre', '$email', '$username','$password')";


if ($conn->query($sql) === TRUE) {
    header("location : index.html");
    exit();
}else{
    echo "errror al registrar el usuario :". $conn->error;
}
}
} 

$conn->close();
?>