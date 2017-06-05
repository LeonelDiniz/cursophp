<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <table width="50%" border="1">
            <tr>
                <td><h3>Código:</h3></td>
                <td><h3>Nome:</h3></td>
                <td><h3>Idade:</h3></td>
                <td><h3>Endereço:</h3></td>
            </tr>
            <?php
            for ($x = 0; $x <= 10; $x++) {
                ?>
                <tr>
                    <td><?= $x ?></td>
                    <td><h3>Leonel Diniz</td>
                    <td><h3>29 anos</h3></td>
                    <td><h3>Brasília</h3></td>
                </tr>
            <?php } ?>
        </table>   
    </body>
</html>
