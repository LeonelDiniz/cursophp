<?php

$titulo = "Aula de PHP em MVC";
$nome = "leonel";
$idade = 29;
$nascimento = "12/09/1987";

$mensagem = " ";

if ($idade < 20) {
    $mensagem = "Jovenzito.";
} else {
    $mensagem = "Envelhecendo.";
}

//calculando o quadrado de um numero
$retorno = quadrado(4, true);
$funcao = "O quadrado de 4 é: " . $retorno;

$concatenei = concatenar("Leonel", " Diniz");

