<!DOCTYPE html>
<html lang="es">

<?php
session_start();
$error=isset($_SESSION['error']) ? $_SESSION['error']:" ";

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow-lg" style="width: 350px;">
        <h3 class="text-center mb-3">Iniciar Sesión</h3>
        <form action="loginBD.php" method="post">
            <div class="mb-3">
                <label for="userName" class="form-label">Nombre de usuario</label>
                <input type="text" name="userName" class="form-control" id="userName" placeholder="" required>
            </div>
            <div class="mb-3">
                <label for="passwrd" class="form-label">Contraseña</label>
                <input type="password" name="passwrd" class="form-control" id="passwrd" placeholder="" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
            <span class = "error"><?php echo $error; ?></span>
            
        </form>
        <div class="text-center mt-3">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
