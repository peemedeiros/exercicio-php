<?php

//formatação numérica para os padrões brasileiros
setlocale(LC_ALL,"pt-bt");

//mensagens de erro
define("ERROR_EMPYT","Um ou mais valores obrigatórios não foram digitados");
define("ERROR_CHARTYPE","os valores devem ser numeros");
define("ERROR","o valor inicial deve ser menor que o final");
define("ERROR_SAME","Os valores escolhidos devem ser diferentes");

function calcular($num1,$num2,$opcao){
    
    $valor1 = $num1;
    
    $valor2 = $num2;
    
    $operacao = $opcao;
   
    //declarando as variaveis abaixo como global, para conseguirmos resgatar os seus valores fora da function
    global $checkedSoma;
    global $checkedSub;
    global $checkedMult;
    global $checkedDiv;
    
    
    switch ($operacao){
                 
             case "SOMAR":
                $resultados = $valor1 + $valor2;
                $checkedSoma = "checked";
                break;
             case "SUBTRAIR":
                $resultados = $valor1 - $valor2;
                $checkedSub = "checked";
                 break;
             case "MULTIPLICAR":
                $resultados = $valor1 * $valor2;
                $checkedMult = "checked";
                 break;
             case "DIVIDIR":
                $resultados = $valor1 / $valor2;
                $checkedDiv = "checked";
                 break;
             default:
                 echo("deu ruim");
                 break;
         } 
    
    return $resultados;
    
}
   
function calcularIf($num1,$num2,$opcao){
    $valor1 = $num1;
    
    $valor2 = $num2;
    
    $operacao = $opcao;

    global $checkedSoma;
    global $checkedSub;
    global $checkedMult;
    global $checkedDiv;

 if($operacao == "SOMAR"){
                $resultados = $valor1 + $valor2;
                $checkedSoma = "checked";
            }elseif( $operacao == "SUBTRAIR"){
                $resultados = $valor1 - $valor2;
                $checkedSub = "checked";
            }elseif( $operacao == "MULTIPLICAR"){
                $resultados = $valor1 * $valor2;
                $checkedMult = "checked";
            }elseif( $operacao == "DIVIDIR" ){
                $resultados = $valor1 / $valor2;
                $checkedDiv = "checked";
            }
    return $resultados;
}


function media($num1,$num2,$num3,$num4){
   $media = 0; 

	//resgatando os valores digitados pelo usuario
    $nota1 = $num1;
    $nota2 = $num2;
    $nota3 = $num3;
    $nota4 = $num4;

	//Calcula o resultado da média das notas
	$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
    
    return $media;

}

function pares($num1,$num2){
 
    $valor1 = $num1;
    $valor2 = $num2;
    
    $indicePar="";
    global $ePar;
    
    for($i=$valor1;$i<=$valor2;$i++){
        if($i % 2 == 0){

            $ePar++;
            $indicePar .= $i."<br>";
            
        }
    }
    return $indicePar;
}

function impares($num1, $num2){
    
    $valor1 = $num1;
    $valor2 = $num2;
    
    $indiceImpar = "";
    global $eImpar;
    
    for($i = $valor1;$i <= $valor2; $i++){
        if($i % 2 != 0){
            
            $eImpar++;
            $indiceImpar .= $i."<br>";
        }
    }
    return $indiceImpar;
}

function tabuada($num1,$num2){
	
	$tabuada = $num1;

	$contador = $num2;

	$resultado = "";

	$mostrar = "";
	
	
	for($i=1; $i <= $contador; $i++){

		$resultado = $tabuada * $i;

		$mostrar .= $tabuada." X ".$i." = ".$resultado."<br/>";
		
	}
	return $mostrar;
}

?>