<?php
$c="moises66";
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$password = $_POST["password"];
if ($password === $c) {
    echo "Nombre: " . $nombre . "<br>";
    echo "Edad: " . $edad . "<br>";
    echo "Registro exitoso!";
} else {
    echo "Contraseña incorrecta";
}
?>
