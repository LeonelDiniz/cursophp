<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>

        <p>Criar um código que liste os 100 primeiros números.</p>
        <?php
        $contador = 0;

        while ($contador < 100) {
            echo $contador . "<br/>";
            $contador++;
            if ($contador ==30){
                $contador++;
                continue;
                
            }
            if($contador == 50) break;
        }
        
        
        ?>
    </body>
</html>
