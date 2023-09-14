<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styleregistro.css">
</head>
<body>

<div class="container">
        <div class="caja1">
        <form action="http://localhost/apicamilo/apicamilo/controlador/usuario.php" method="post">
            <h1>REGISTRATE</h1>
            <br><input type="text" name="texto1" id="nombre" placeholder="Ingrese su nombre" required><br>
            <br><input type="text" name="texto2" id="correo" placeholder="Ingrese su correo" required><br>
            <br><input type="password" name="texto3" id="contrasena" placeholder="Ingrese su contrasena" required><br>
            <br><input type="text" name="texto4" id="rol" placeholder="Ingrese su rol" required><br>
            <br><input type="submit" value="Enviar" id="boton" class="boton">
        </form>
        
        </div>
        <div class="caja2">
            <div class="imagen">
                <img src="../img/otropanda.png" alt="">
            </div>
        </div>
   
    </div>

 
</body>
</html>