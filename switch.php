<html>
<head>
	<title>Aula de PHP</title>
</head>
<body>
<?php



	if( isset($_POST['btnOperacao']) ) {

	$resultado = "";		
	
	switch($_POST['operacao']) {
			case "1":
			$resultado = $_POST['valor1'] + $_POST['valor2'];
			break;
			case "2":
			$resultado = $_POST['valor1'] - $_POST['valor2'];
			break;
			case "3":
			$resultado = $_POST['valor1'] * $_POST['valor2'];
			break;
			case "4":
			$resultado = $_POST['valor1'] / $_POST['valor2'];
			break;	
	}
	
	if(isset($resultado) ) {
		echo "<h3>O resultado é: ".$resultado."</h3>";
	}	
	
}

?>
	<form method="post">
	<p>Valor1:<input type="text" name="valor1"></p>
	<p>Valor1:<input type="text" name="valor2"></p>
	<p>Selecione a operação:</p>
	<select name="operacao">
		<option value="1">Adição</option>
		<option value="2">Subtração</option>
		<option value="3">Multiplicação</option>
		<option value="4">Divisão</option>
	</select>
	<p><input type="submit" value="Executar" name="btnOperacao"></p>
	</form>


</body>
</html>