<?php
//index do blog
//verificar se o arquivo log.txt já existe, senão criar

//define uma constante para o nome de nosso arquivo de log
define("ARQUIVO_LOG", "log.txt");

$log = @fopen(ARQUIVO_LOG,"x");

if($log == false){
    
    $log = fopen(ARQUIVO_LOG, "a");
    
}
require_once ("controller.php");
