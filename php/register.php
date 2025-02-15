<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow-lg" style="width: 350px;">
        <h3 class="text-center mb-3">Crea una cuenta</h3>
        <form action="registroBD.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="tu@email.com" required>
            </div>
            <div class="mb-3">
                <label for="userName" class="form-label">Nombre de Usario*</label>
                <input type="text"  name="userName" class="form-control" id="userName" placeholder="" required>
            </div>
            <div class="mb-3">
                <label for="passwrd" class="form-label">Contraseña</label>
                <input type="password" name="passwrd" class="form-control" id="passwrd" placeholder="" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>