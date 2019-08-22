<?php

require_once('modulos/php/media.php');
 require_once('modulos/funcoes/funcoes.php');


?>

<!DOCTYPE html>

<html>
    <head>
        <title>
            Bem vindo!
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/media.css" type="text/css">
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
						<div class="caixa_formulario">
							<h1>
							   CALCULO MEDIA
							</h1>
							<form name="medias" method="post" action="index.php">
								Nota 1:
								<input type="text" name="txtNota1" value="<?php echo (@$nota1); ?>">
								<br><br>
								Nota 2:
								<input type="text" name="txtNota2" value="<?php echo (@$nota2); ?>">
								<br><br>
								Nota 3:
								<input type="text" name="txtNota3" value="<?php echo (@$nota3); ?>">
								<br><br>
								Nota 4:
								<input type="text" name="txtNota4" value="<?php echo (@$nota4)?>">
								<br><br>
								<input class="botao" type="submit" name="btnCalcular" value="Calcular">
							</form>
							<h1 id="resultado">
								a média é: <?php  echo(@$media); ?>
							</h1>
							<h2>
								
								<?php echo(@$erro1);?>
								<?php echo(@$erro2);?>
								
							</h2>
						</div>
					</div>
                </div>
            </div>
        </section>
		<script src="js/menu.js"></script>
    </body>
</html>

































