<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$titulo?></title>
    </head>
    <body>
        <?php foreach ($array as $linha) { ?>
            <p><?=$linha?></p>

        <?php } ?>

        <p><?php print_r($str_split); ?></p>
        <p><?php print_r($explode)?></p>
        <p><?=$implode?></p>
               



    </body>
</html>
