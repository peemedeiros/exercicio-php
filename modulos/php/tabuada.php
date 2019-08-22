<?php

require_once('modulos/funcoes/funcoes.php');

$tabuada = 0;

$contador = 0;

$resultadosDaTabuada = "";

if(isset($_POST['btnCalcular'])){

	$contador = $_POST['txtContador'];

	$tabuada = $_POST['txtTabuada'];

	if($contador == "" || $tabuada == ""){
		$erro1 = ERROR_EMPYT;
	}elseif(!is_numeric($contador) || !is_numeric($tabuada)){
		$erro2 = ERROR_CHARTYPE;
	}elseif($tabuada == "0"){
		echo ERROR_NOTEXIST;
	}else{
		$resultadosDaTabuada = tabuada($tabuada, $contador);
	}
}

?>