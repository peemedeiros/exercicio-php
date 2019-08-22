<?php
	require_once('modulos/funcoes/funcoes.php');
	require_once('modulos/php/tabuada.php');
?>

<!DOCTYPE html>

<html>
    <head>
        <title>
            Bem vindo!
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/tabuada.css" type="text/css">
		<link rel="icon" href="img/Silver_Hand.png">
    </head>
    <body>
        <header id="cabecalho">
            <div class="conteudo center">
                <div class="texto_cabecalho center">
                    BEM VINDO, SELECIONE O EXERCICIO A PARTIR DO MENU ABAIXO
                </div>
                <div class="logo center">
                    <img src="img/Silver_Hand.png">
                </div>
            </div>
        </header>
        <section id="principal">
            <div class="conteudo center">
                <div class="caixa_principal center">
                    <div class="menu">
						<img src="img/menu.png" id="menu_mobile">
						<ul class="menu_caixa" id="mm">
							<a href="index.php">
								<li class="menu_itens">Média</li>
							</a>
							<a href="pagina_calc.php">
								<li class="menu_itens" id="menu_calc">	
									Calculadora ›
									<ul class="sub_menu">
										<a href="pagina_calc.php">
											<li class="sub_menu_itens"> 
												› Calculadora IF
											</li>
										</a>
										<a href="pagina_calc_switch.php">
											<li class="sub_menu_itens"> 
												› Calculadora Switch
											</li>
										</a>
									</ul>
								</li>
							</a>
							<a href="pagina_tabuada.php">
								
								<li class="menu_itens">Tabuada</li>
								
							</a>
                            
                            <a href="pagina_pares.php">
				                <li class="menu_itens">Pares</li>
							</a>
						</ul>
					</div>
					<div class="caixa_exercicios">
						<div id="caixa">
							<h1 class="titulo">Tabuada</h1>
							<form method="post" action="pagina_tabuada.php" name="form_tabuada">
								<div class="container_caixas">
									Tabuada:
									<div class="segura_inputs">
										<input type="text" name="txtTabuada" value="" class="caixa_de_texto">
										<br>
										<input type="text" name="txtContador" value="" class="caixa_de_texto">
										<div class="botao">
											<input type="submit" name="btnCalcular" value="Calcular" class="botao_calc">
										</div>
									</div>
									<br><br>
									Contador:
								</div>
								<div class="caixa_resultados">
									<div class="caixa_de_resultado" name="txtResultados" value="">
										<?php
											
											echo(@$resultadosDaTabuada);
										?>
									</div>
								</div>
							</form>
						</div>
                        <h2>
                        <?php
                            echo(@$erro1);
                            echo(@$erro2);
                        ?>
                    </h2>
					</div>
                </div>
            </div>
        </section>
		<script src="js/menu.js"></script>
    </body>
</html>