<?php
session_start();
echo "<pre>";
print_r($_SESSION); // Para ver TODA la sesión
echo "</pre>";

if (!isset($_SESSION['reservas']) || empty($_SESSION['reservas'])) {
    echo "No hay reservas en la sesión.";
    exit();
}

$reservas = $_SESSION['reservas'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Reservas</title>
</head>
<body>
    <h1>Mis Reservas</h1>
    <ul>
        <?php foreach ($reservas as $reserva): ?>
            <li>ID: <?= htmlspecialchars($reserva['idReserva']) ?> - Fecha: <?= htmlspecialchars($reserva['fecha']) ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>