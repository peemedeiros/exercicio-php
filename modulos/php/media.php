<?php
require_once('modulos/funcoes/funcoes.php');

if(isset($_POST['btnCalcular']))
{
	//resgatando os valores digitados pelo usuario
    $nota1 = $_POST['txtNota1'];
    $nota2 = $_POST['txtNota2'];
    $nota3 = $_POST['txtNota3'];
    $nota4 = $_POST['txtNota4'];

	if($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == ""){
		$erro1 = ERROR_EMPYT;
		
	}elseif(!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)){
		$erro2 = ERROR_CHARTYPE;
	}else{
	//Calcula o resultado da média das notas
	$media = media($nota1,$nota2,$nota3,$nota4);
	}
}
?>