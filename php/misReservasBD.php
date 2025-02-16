<?php
session_start();
 $userName=$_SESSION['userName'];

 try {
    // Conexión segura a la base de datos con opciones de seguridad
    $mbd = new PDO('mysql:host=localhost;dbname=cancare;charset=utf8', 'cancare', 'admin');
    //$mbd = new PDO('mysql:host=sql207.infinityfree.com;dbname=if0_38316063_cancare', 'if0_38316063', 'cancareAdmin');

    // Consulta preparada para obtener reservas del usuario
    $stmt = $mbd->prepare('SELECT * FROM reservas WHERE userName = :userName');
    $stmt->execute([ ':userName' => $userName ]);

    // Obtener todas las reservas
    $reservas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Guardar en sesión si hay reservas
    
        $_SESSION['reservas'] = $reservas;
        header("Location: misReservas.php");
        exit();

} catch (PDOException $e) {
    echo "¡Error!: " . $e->getMessage();
}
?>