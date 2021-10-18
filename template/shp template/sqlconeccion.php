<?php
$enlace = mysqli_connect("localhost", "root", "", "curso_backend");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "SELECT * FROM usuarios";
$result = $enlace->query($sql);
$row = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($row)


/*
CLAUSULA WHERE -> se agrega despues de... "$sql = "SELECT * FROM usuarios WHERE ciudad = -----"; y no es obligatoria Sintaxis: traer todos (*) de usuarios (nombre de la tabla), cuando ciudad (nombre de la columna) sea igual a ------(nombre del contenido de la columna a filtrar)
Para borrar de la BD -> se cambia el SELECT por "DELETE" y se agrega en la Clausula WHERE, el parámetro por el que se desea filtrar
*/
 ?>
