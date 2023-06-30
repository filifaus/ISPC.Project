<?php
// Datos de conexión a la base de datos MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "compania_de_transporte";

// Crear la conexión a la base de datos
$Conexion = mysqli_connect($Server, $user, $pass, $Base);

if (!$Conexion) {
    die("Fallo la conexión" . mysqli_connect_error());
} else {
    echo "Conexión exitosa";
}


// Obtener los datos del formulario
$origen = $_POST["origen"];
$destino = $_POST["destino"];
$duracion = $_POST["duracion"];

// Insertar los datos en la tabla de rutas
$Query = "INSERT INTO ruta (Origen_ruta, Destino_ruta, Duracion_ruta) VALUES ('$origen', '$destino', '$duracion')";

echo $Query;

$Resultado = mysqli_query($Conexion, $Query);

if ($conn->query($sql) === TRUE) {
    echo "La ruta se ha guardado correctamente.";
} else {
    echo "Error al guardar la ruta: " . mysqli_error($Conexion);
}


echo $origen;
echo "<br>";
echo $destino;
echo "<br>";
echo $duracion;
echo "<br>";


mysqli_close($Conexion);
?>
