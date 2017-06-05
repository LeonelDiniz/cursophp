<html>
    <head>
        <title>Aula de PHP</title>
    </head>

    <body>
        <?php
        $estrutura = array(
            array("valor1", "valor2"),
            array("valor3", "valor4")
        );
        foreach ($estrutura as $val1){
            echo print_r($val1);
            echo"<br/>";
            
        }
        
        ?>

    </body>
</html>