<?php
$Envio = $_POST["Envio"];
$Descripcion = $_POST["Descripcion"];
$Peso = $_POST["Peso"];

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

    $Query = "INSERT INTO `paquete` (Envio_paquete, Descripcion_paquete, Peso_paquete) VALUES ('$Envio','$Descripcion','$Peso')";

    echo $Query;

    $Resultado = mysqli_query($Conexion, $Query);

    echo $Envio;
    echo "<br>";
    echo $Descripcion;
    echo "<br>";
    echo $Peso;
    echo "<br>";

    mysqli_close($Conexion);
}
?>