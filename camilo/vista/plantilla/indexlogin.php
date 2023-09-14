<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylelogin.css">
</head>
<body>
    <div class="container">
        <div class="caja1">
        <form action="http://localhost/apicamilo/apicamilo/controlador/login.php" method="post">
            <h1>LOGUEATE</h1>
            <br><input type="text" name="texto1" id="texto1" placeholder="Ingrese su correo" required><br>
            <br><input type="password" name="texto2" id="texto2" placeholder="Ingrese su contrasena" required><br>
            <br><input type="submit" value="Enviar" id="boton" class="boton">
        </form>
        </div>
        <div class="caja2">
            <div class="imagen">
                <img src="../img/panda1.png" alt="">
            </div>
        </div>
   
    </div>
   
</body>
</html>