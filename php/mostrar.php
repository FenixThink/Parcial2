<?php

include('Conexion.php');

$conexion = new Conexion();

$conexion->conectar();

$sql = "SELECT * FROM `fun`";

$result = $conexion->ejecutarSQL($sql);

echo "<table border='1'>";
echo "<tr>";
echo "<td>Sport ID</td>";
echo "<td>Title</td>";
echo "<td>Overview</td>";
echo "<td>Regulations</td>";
echo "<td>Squad</td>";
echo "<td>Athletes</td>";
echo "<td>Gear</td>";
echo "<td>Fan Base</td>";
echo "<td>Organizing Authority</td>";
echo "</tr>";
while ($fila = $conexion->ObtenerFilas($result)) {
    echo "<tr>";
    echo "<td>".$fila[0]."</td>";
    echo "<td>".$fila[1]."</td>";
    echo "<td>".$fila[2]."</td>";
    echo "<td>".$fila[3]."</td>";
    echo "<td>".$fila[4]."</td>";
    echo "<td>".$fila[5]."</td>";
    echo "<td>".$fila[6]."</td>";
    echo "<td>".$fila[7]."</td>";
    echo "<td>".$fila[8]."</td>";
    echo "</tr>";
}
echo "</table>";

echo "<br>";
echo "<br>";

echo "<a href='../index.html'>Volver</a>";

?>