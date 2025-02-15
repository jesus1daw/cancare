<?php


$userName = $_POST['userName'];
$passwrd = $_POST['passwrd'];
$email=$_POST['email'];
$autenticacion = false;

session_start();
try {
    // Conexión segura a la base de datos
    $mbd = new PDO('mysql:host=localhost;dbname=cancare', 'cancare', 'admin');

    

   

        

        // Consulta preparada (segura contra SQL Injection)
        $stmt = $mbd->prepare('INSERT INTO usuarios (userName, passwrd, email) VALUES (:userName, :passwrd, :email)');
        $stmt->execute([
            ':userName' => $userName,
            ':passwrd' => $passwrd,
            ':email'    => $email
        ]);

        
    $_SESSION['userName'] = $userName;
        header("Location: indexUser.php");
exit(); // Importante para detener la ejecución


      

} catch (PDOException $e) {
    echo "¡Error!: " . $e->getMessage();
}