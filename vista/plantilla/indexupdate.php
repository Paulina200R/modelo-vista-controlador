<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styleupdate.css">
</head>

<body>
    <form action="http://localhost/apicamilo/controlador/updateusuario.php" method="post">
        <h1>Actualizar</h1>
        <br><input type="text" name="idusuario" id="nombre" placeholder="Ingrese el id" required><br>
        <br><input type="text" name="texto1" id="nombre" placeholder="Ingrese su nombre" required><br>
        <br><input type="text" name="texto2" id="correo" placeholder="Ingrese su correo" required><br>
        <br><input type="password" name="texto3" id="contrasena" placeholder="Ingrese su contrasena" required><br>
        <br><input type="text" name="texto4" id="rol" placeholder="Ingrese su rol" required><br>
        <br><input type="submit" value="Enviar" id="boton">
    </form>
</body>

</html>