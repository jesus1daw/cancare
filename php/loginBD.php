<?php

$userName = $_POST['userName'];
$passwrd = $_POST['passwrd'];

session_start();
try {
    // Conexión segura a la base de datos
    $mbd = new PDO('mysql:host=localhost;dbname=cancare', 'cancare', 'admin');

    // Consulta preparada (segura contra SQL Injection)
    $stmt = $mbd->prepare('SELECT * FROM usuarios WHERE userName=:userName AND passwrd=:passwrd');
    $stmt->execute([ ':userName' => $userName ,':passwrd' => $passwrd]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC); 

    if ($usuario && $usuario['userName'] === $userName) {
        $_SESSION['userName'] = $userName;
        header("Location: indexUser.php");
        exit(); 
    } else {
        $_SESSION['error'] = "Usuario o contraseña incorrectos";
        header("Location: login.php");
        exit(); 
    }

} catch (PDOException $e) {
    echo "¡Error!: " . $e->getMessage();
}
?>
