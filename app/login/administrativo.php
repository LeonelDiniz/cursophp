<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php $titulo?></title>
    </head>
    <body>
        <h1>Você está <?=$_SESSION['usuario']?> logado</h1>
        
        <p><a href="index.php?r=login&ac=logout">LogOff</a></p>
        
    </body>
</html>
