<?php
	require_once('modulos/php/calculadora2.php');
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
        <link rel="stylesheet" href="css/calculadoras.css" type="text/css">
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
							<h1 class="titulo">Calculadora com Switch</h1>
							<div id="valores">
								<form name="calculadora" method="post" action="pagina_calc_switch.php">
									<div id="valores">
										Valor 1:
										<input type="text" name="txtValor1" value="<?php echo (@$valor1)?>">
										<br><br>
										Valor 2:
										<input type="text" name="txtValor2" value="<?php echo (@$valor2)?>">
									</div>
									<br><br>
									<div id="opcoes">
										<input type="radio" name="rdOpcoes" value="somar" <?=$checkedSoma?> > 
										Somar<br>
										<input type="radio" name="rdOpcoes" value="subtrair" <?=$checkedSub?>>
										Subtrair<br>
										<input type="radio" name="rdOpcoes" value="multiplicar" <?=$checkedMult?>>
										Multiplicar<br>
										<input type="radio" name="rdOpcoes" value="dividir" <?=$checkedDiv?>>
										Dividir<br><br>
										<input class="botao" type="submit" name="btnCalcular" value="Calcular">
									</div>
								</form>
							</div>
							<div id="resultado">
								<?=round($resultados, "2")?>
							</div>
						</div>
						<h1 id="erro">
							<?php echo(@$erro1);?>
							<?php echo(@$erro2);?>
						</h1>
					</div>
                </div>
            </div>
        </section>
		<script src="js/menu.js"></script>
    </body>
</html>