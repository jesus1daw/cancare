
<?php
session_start();
$userName=$_SESSION['userName'];
$nombre = $_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$info=$_POST['info'];




try {
    // Conexión segura a la base de datos
    $mbd = new PDO('mysql:host=localhost;dbname=cancare', 'cancare', 'admin');

    

   

        

        // Consulta preparada (segura contra SQL Injection)
        $stmt = $mbd->prepare('INSERT INTO reservas (userName,nombre,telefono,email,direccion,fecha,hora,info) VALUES (:userName,:nombre,:telefono,:email,:direccion,:fecha,:hora,:info)');
        $stmt->execute([
            ':userName' => $userName,
            ':nombre' => $nombre,
            ':telefono' => $telefono,
            ':email' => $email,
            ':direccion'    => $direccion,
            ':fecha'    => $fecha,
            ':hora'    => $hora,
            ':info'    => $info
        ]);

        
    $_SESSION['reserva'] = true;
        header("Location: indexUser.php");
exit(); // Importante para detener la ejecución


      

} catch (PDOException $e) {
    echo "¡Error!: " . $e->getMessage();
}