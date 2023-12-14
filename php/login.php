<?php
require 'conexion.php';
// Procesar el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreusuario = $_POST["username"];
    $contraseña = $_POST["password"];

    // Consultar la base de datos para verificar las credenciales
    $sql = "SELECT * FROM aprendiz WHERE username= '$username' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows == true) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION["nombreusuario"] = $nombreusuario;
        header("Location: bienvenido.php");
        exit();
    } else {
        $error_message = "Usuario o contraseña incorrectos";

        echo '<script>alert("Usuario o contraseña incorrectos."); window.location.href = "index.php";</script>';

    }
}
$conn->close();
?>