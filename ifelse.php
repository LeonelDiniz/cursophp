<?php

$logado = "";
$mensagem = "";

if( isset($_POST['btnlogar']) ){
	
	if( $_POST['usuario'] == "leo" && $_POST['senha'] == '123'){
	$logado = $_POST['usuario'];
	} else {
	$mensagem = "Usuário ou senhas incorretos"; 
	}
}

?>





<html>
<head>
<title>Aula de PHP</title>
</head>

<body>

<?php
			if( $logado != "" ) {
				echo "Seja bem vindo ".$logado;
			} else if($mensagem != "") {
				echo $mensagem;
			}			
		?>



	<form method="post">
	<p>Usuário:</p><input type="text" name="usuario">
	<p>Senha:</p><input type="password" name="senha">
	<p><input type="submit" value="Logar" name="btnlogar"></p>
	
	</form>
	
</body>
</html>