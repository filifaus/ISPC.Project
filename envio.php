<?php

$Cliente = $_POST["Cliente"];
$Direccion = $_POST["Direccion"];
$Destinatario = $_POST["Destinatario"];

// Database connection configuration
$Server = "localhost";
$user = "root";
$pass = "";
$Base = "compania_de_transporte";

$Conexion = mysqli_connect($Server, $user, $pass, $Base);

if (!$Conexion) {
    die("Fallo la conexion" . mysqli_connect_error());
} else {
    echo "Conexion exitosa";
}

$Query = "INSERT INTO `envio`(`Cliente_envio`, `Destinatario_envio`) VALUES ('$Cliente','$Destinatario')";
echo $Query;

$Resultado = mysqli_query($Conexion, $Query);

if ($Resultado) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar los datos: " . mysqli_error($Conexion);
}

mysqli_close($Conexion);
?>


