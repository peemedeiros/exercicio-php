<?php

setlocale(LC_ALL,"pt-bt");

require_once('modulos/funcoes/funcoes.php');

$valor1 = (float) 0;
$valor2 = (float) 0;
$resultados = (double) 0;
$operacao = (string) "";
$checkedSoma = "";
$checkedSub = "";
$checkedMult = "";
$checkedDiv = "";
$erro1 = "";
$erro2 = "";

//verifica se o botão foi clicado
if(isset($_POST['btnCalcular']))
{
$valor1 = str_replace(",",".",$_POST['txtValor1']);
$valor2 = str_replace(",",".",$_POST['txtValor2']);  

    
    //tratamento de caixa vazia;
    if($valor1 == "" || $valor2 == "" || !isset($_POST['rdOpcoes']))
        $erro1 = ERROR_EMPYT;
    // tratamento de caracter
     elseif (!is_numeric($valor1) || !is_numeric($valor2))
        $erro2 = ERROR_CHARTYPE;
     else {
            $operacao = strtoupper($_POST['rdOpcoes']);
    //chamando as funções
            $resultados = calcular($valor1, $valor2, $operacao);
	 }
}
?>