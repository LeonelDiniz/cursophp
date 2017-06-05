<?php
//controller da string
$var1 = "ESTA E UMA FRASE.";
$var2 = "Esta E outra frase.";
$var3 = "ABCDEfghi";



//transformando string em minusculo
$array[] = "Var1 em minusculo=".strtolower($var1);

//transformando string em maiusculo
$array[] = "Var2 em maiusculo=".strtoupper($var2);

//exibindo a posição de uma elemento em uma string
$array[] = "Posição do elemento na var2=".strpos("C",$var3);

//usando strsplit - converte a string em array
$str_split = str_split($var3);

//utilizando o explode
$explode = explode(" ",$var2);

//utilizando o implode
$implode = implode("_",$explode);

//utilizando o str_replace
$array[] = str_replace("Esta","Aquela",$var2);




