<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $estudiantes = [
        "54780375" => "Facundo Cabrera",
        "0987654321" => "Mateo Ungari",
        "9876543210" => "Emanuel Blecich",
        "0123456789" => "Jonathan Bat"
    ];
    $nombre1 = "Matias Russi";
    $cedula1 = "5678901234";
    $nombre2 = "Damian Esmoris";
    $cedula2 = "4321098765";
    $estudiantes[$cedula1] = $nombre1;
    $estudiantes[$cedula2] = $nombre2;
    const CEDULA_BUSCAR = "9876543210";
    foreach ($estudiantes as $cedula => $nombre) {
        echo "Cédula: $cedula, Nombre: $nombre<br>";
        if ($cedula === CEDULA_BUSCAR) {
            echo "¡Encontrada la cédula " . CEDULA_BUSCAR . "! El estudiante se llama $nombre<br>";
        }
    }
?>
</body>
</html>