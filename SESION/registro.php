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
                    <h3>Registrate como administrador</h3>

                    <button id="btn__iniciar-sesión">Registrate</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Registrate como Instructor</h3>

                    <button id="btn__registrarse">Registrate</button>
                </div>
            </div>

            <div class="contenedor__login-register">

                <form action="login.php" method="POST" class="formulario__login">
                    <h2>Admin</h2>
                    <input type="text" placeholder="Nombres y apellidos" name="nombre_admin">
                    <input type="email" placeholder="Correo Electrónico" name="correo_admin" required>
                    <input type="password" placeholder="Contraseña" name="contraseña_admin" required>
                    <input type="password" placeholder="Verificar contraseña" name="veri_contraseña_admin" required>
                    <input type="text" placeholder="Telefono" name="telefono_admin">
                    <br>
                    <button type="submit" name="btn">Registrarse</button>
                    <br><br>

                </form>

                <form action="login2.php" method="POST" class="formulario__register">
                    <h2>Instructor</h2>
                    <input type="text" placeholder="Nombres y apellidos" name="nombre_ins">
                    <input type="email" placeholder="Correo Electrónico" name="correo_ins" required>
                    <input type="password" placeholder="Contraseña" name="contraseña_ins" required>
                    <input type="password" placeholder="Verificar contraseña" name="veri_contraseña_ins" required>
                    <input type="text" placeholder="Telefono" name="telefono_ins">
                    <br>
                    <button type="submit" name="btn">Ingresar</button>
                </form>
            </div>
        </div>

        <br><br>
        <br><br>
        <br><br>

        <div class="ingresar">
            <label for="">¿Ya tienes cuenta? <a href="ingreso.php">¡Ingresa!</a></label>
        </div>

    </main>
    <script src="./js/script.js"></script>

</body>

</html>