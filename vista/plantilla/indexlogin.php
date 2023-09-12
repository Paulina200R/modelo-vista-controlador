<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylelogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <section class="back">
        <div class="green"></div>
    </section>
    <section class="content">
        <div class="logo">
            <img src="../img/cocinero.png" alt="">
        </div>
        <div class="formulario">
            <form class="formul" action="http://localhost/apicamilo/controlador/login.php" method="post">
                <h1>Iniciar Sesión</h1>
                <br><input type="text" name="texto1" class="inputs" id="input1" placeholder="Ingrese su correo" required><br>
                <br><input type="password" name="texto2" class="inputs"id="input2" placeholder="Ingrese su contrasena" required><br>
                <br><input type="submit" value="Enviar" id="boton">
            </form>
        </div>
    </section>
</body>

</html>