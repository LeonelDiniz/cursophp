<html>
<head>
<title>Aula de PHP</title>
</head>

<body>
	
	<form method="post">
	<p>Digite uma palavra:</p>
	<input type="text" name="palavra" placeholder="Digite uma palavra">
	<input type="submit" value="Buscar">
	</form>
	
	<!--checa se foi digitado alguma coisa pra não ficar com index vazio-->
	<?php if(isset($_POST['palavra'])){ ?>
		<h3>Você buscou por:<?=$_POST['palavra']?></h3>

	<?php } ?>

	
</body>
</html>