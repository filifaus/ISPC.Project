<?php
$Nombre = $_POST["Nombre"];
$Direccion = $_POST["Direccion"];

// Configuración de la conexión a la base de datos
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

$Query = "INSERT INTO cliente (Nombre_cliente, Direccion_cliente) VALUES ('$Nombre', '$Direccion')";

echo $Query;

$Resultado = mysqli_query($Conexion, $Query);

echo $Nombre;
echo "<br>";
echo $Direccion;
echo "<br>";

mysqli_close($Conexion);
?>


