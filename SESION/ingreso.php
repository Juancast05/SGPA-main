<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesión</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>

    <main>

        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Ingresa como administrador</h3>
                    <p>Inicia sesión </p>
                    <button id="btn__iniciar-sesión">Ingresar</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Ingresa como Instructor</h3>
                    <p>Inicia sesión </p>
                    <button id="btn__registrarse">Ingresar</button>
                </div>
            </div>

            <div class="contenedor__login-register">

                <form action="login.php" method="POST" class="formulario__login">
                    <h2>Admin</h2>
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contraseña" required>
                    <br>
                    <button type="submit" name="btn">Ingresar</button>
                    <br><br>
                </form>

                <form action="login2.php" method="POST" class="formulario__register">
                    <h2>Instructor</h2>
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contraseña" required>
                    <br>
                    <button type="submit" name="btn">Ingresar</button>
                </form>
            </div>
        </div>
        <br><br>
        <div class="ingresar">
            <label for="">¿No tienes cuenta? <a href="registro.php">¡Registrate!</a></label>
        </div>
    </main>
    <script src="./js/script.js"></script>

</body>

</html>