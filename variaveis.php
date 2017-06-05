<html>
<head>
<title>Aula de PHP</title>
</head>

<body>

	<?php
	//variaveis
	$idade = 29;
	$nome = "Leonel Diniz";
	$habilitado = true;//booleano
	$valor = 100.00;//float
	
	//consantes
	define("IDADE", "29");
	
	?>
	
	<p> Meu nome é <?=$nome." (o lindo)"?> e tenho <?=$idade+1?> anos.
	<p> Minha idade é: <?php echo IDADE;?> anos.</p>
</body>
</html>