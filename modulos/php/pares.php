<?php

require_once('modulos/funcoes/funcoes.php');

/*
define("ERROR","o valor inicial deve ser menor que o final");
define("ERROR_EMPYT","você deve selecionar os dois números");
define("ERROR_SAME","Os valores escolhidos devem ser diferentes");
*/

if(isset($_POST['bntVerificar'])){
	$valor1 = $_POST['selection'];
	$valor2 = $_POST['selection1'];
	/*$ePar = "";
	$eImpar = "";
	$indicePar = "";
	$indiceImpar = "";*/

	if($_POST['selection']=="0" || $_POST['selection1']=="0"){
		$erro1 = ERROR_EMPYT;
	}elseif($valor1>$valor2){
		$erro2 = ERROR;
	}elseif($valor1 == $valor2){
        $erro3 = ERROR_SAME;
    }else{
        $par = pares($valor1,$valor2);
        
        $impar = impares($valor1,$valor2);	
    }
}

?>