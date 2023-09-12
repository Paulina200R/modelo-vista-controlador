<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styleregistro.css">
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
            <form action="http://localhost/apicamilo/controlador/usuario.php" method="post">
                <h1>Registrarse</h1>
                <br><input type="text" name="texto1" id="input1" class="inputs" placeholder="Ingrese su nombre" required><br>
                <br><input type="text" name="texto2" id="input2" class="inputs" placeholder="Ingrese su correo" required><br>
                <br><input type="password" name="texto3" id="input3" class="inputs" placeholder="Ingrese su contrasena" required><br>
                <br><input type="text" name="texto4" id="input4" class="inputs" placeholder="Ingrese su rol" required><br>
                <br><input type="submit" value="Enviar" id="boton">
            </form>
        </div>
    </section>
</body>

</html>