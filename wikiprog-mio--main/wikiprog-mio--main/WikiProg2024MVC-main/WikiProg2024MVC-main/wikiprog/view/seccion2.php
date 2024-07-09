<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['stop'])) {
    $_SESSION['stop'] = 0;
} else {
    $_SESSION['stop']++;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <!-- Incluye los enlaces a Bootstrap u otros CSS si es necesario -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="card-title text-center">Inicio de Sesión</h3>
                    <?php if ($_SESSION['stop'] > 3): ?>
                        <div class="alert alert-danger" role="alert">
                            Demasiados Intentos Fallidos
                        </div>
                    <?php endif; ?>
                    <form action="../controller/iniciar.php" method="post" id="formulario-login">
                        <div class="mb-3">
                            <label for="username" class="form-label">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Ingresa tu nombre de usuario" required aria-label="Nombre de Usuario">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Ingresa tu contraseña" required aria-label="Contraseña">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary" <?php echo ($_SESSION['stop'] > 3) ? 'disabled' : ''; ?>>Iniciar Sesión</button>
                        </div>
                        <div class="mt-3 text-center">
                            <a href="controlador.php?seccion=seccion5" class="btn btn-link">Registrarse</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Incluye los enlaces a JavaScript si es necesario -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
