<?php
include('Conexion.php');

$conexion = new Conexion();
$conexion->conectar();

$id = $_POST['id'];
$title = $_POST['title'];
$overview = $_POST['overview'];
$regulations = $_POST['regulations'];
$squad = $_POST['squad'];
$atletes = $_POST['atletes'];
$gear = $_POST['gear'];
$fanbase = $_POST['fanbase'];
$authority = $_POST['authority'];

// $sql = "INSERT INTO usuario (id, nombre) VALUES ('$id', '$nombre')";

$sql = "INSERT INTO `fun`(`Sport ID`, `Title`, `Overview`, `Regulations`, `Squad`, `Athletes`, `Gear`, `Fan Base`, `Organizing Authority`) VALUES ('$id','$title','$overview','$regulations','$squad','$atletes','$gear','$fanbase','$authority')";

$result = $conexion->ejecutarSQL($sql);

if ($conexion->ObtenerColumnasAfectadas() > 0) {
    echo "Registro insertado";
    echo "<br>";
    echo "<br>";
    echo "<a href='mostrar.php'>Mostrar</a>";
    echo "<br>";
    echo "<br>";
    echo "<a href='../index.html'>Actualizar un registro</a>";
    echo "<br>";
    echo "<br>";
    echo "<a href='../html'>Borrar un registro</a>";
    echo "<br>";
    echo "<br>";
    echo "<a href='../index.html'>Volver</a>";
}else{
    echo "Error al insertar";
}

?>