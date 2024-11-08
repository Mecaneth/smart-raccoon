<!DOCTYPE html>
<html lang="es">
<head>
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="registro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesion</h1>
        <form id="loginForm" action="registro.php" method="post">
            <div class="form-label">
                <label for="username">Nombre de usuario:</label>
            </div>
            <input type="text" id="username" name="nombre" class="form-input" 
            placeholder="Ingresa tu nombre de usuario" required><br><br>
            <div class="form-label">
                <label for="password">Contrasena:</label>
            </div>
            <input type="password" id="password" name="contr" class="form-input"
             placeholder="Ingresa tu contrasena" required><br><br>
            <input type="submit" value="Iniciar Sesion" name="register" class="submit-button">
            <div class="error-message" id="error-message" style="display: none; color: red;"></div>
        </form>
    </div>
</body>
</html>