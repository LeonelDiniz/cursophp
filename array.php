<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP</title>
    </head>
    <body>
        <?php
        $meuArray = array("valor 1","valor 2","valor 3");
        $meuArray [] = "valor 4";
        print_r($meuArray);
        
        unset($meuArray[1]);
      echo "<br/>";
        print_r($meuArray);
        
        echo "<br/>";
        echo $meuArray[0];
        
        $novoArray = array("site" => "meusite.com.br");
        
        echo "<br/>".$novoArray["site"];
        ?>
    </body>
</html>
