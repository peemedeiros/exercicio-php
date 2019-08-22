<?php
    require_once('modulos/php/pares.php');
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
        <link rel="stylesheet" href="css/pares.css" type="text/css">
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
                            <h1>Identificador de pares e impares</h1>
                            <form name="pares_form" method="post" action="pagina_pares.php">
                                <div class="textos_valores">
                                        <h3>Valor inicial:</h3>
                                        <h3>Valor final:</h3>
                                </div>
                                <div class="caixa_selecao">
                                    <!--valor inicial-->
                                    <select name="selection" class="opcao">
                                        <option value="0">Por favor selecione um número</option>
                                        <?php
                                        $opition = "";
                                            for($i=1;$i <= 500; $i++){
                                                $opition = "<option name='$i' value='$i'>".$i."</option>";
                                                echo $opition;
                                            }
                                        ?>
                                    </select>
                                    <br>
                                    <!--valor final-->
                                    <select name="selection1" class="opcao">
                                        <option value="0">Por favor selecione um número</option>
                                        <?php
                                        $opition = "";
                                            for($i=100;$i <= 1000; $i++){
                                                $opition = "<option name='$i' value='$i'>".$i."</option>";
                                                echo $opition;
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="botao_pares">
                                    <input type="submit" name="bntVerificar" value="Verificar" id="button">
                                </div>
                            </form>
                            <div class="caixa_resultados">
                                <div class="resultados">
                                    <?php 
                                        echo @$par;
                                    ?>
                                </div>
                                <div class="resultados">
                                    <?php
                                        echo @$impar;
                                    ?>
                                </div>
                            </div>
                        <!--contadores-->
                            <div class="contadores">
                                <h4>Qtde de Pares:</h4>
                                <div class="par"><?php echo(@$ePar);?></div>
                            </div>
                            <div class="contadores">
                                <h4>Qtde de Impares:</h4>
                                <div class="impar"><?php echo(@$eImpar);?></div>
                            </div>
                        </div>
                        <div id="erro">
                            <h2>
                                <?php
                                    echo(@$erro1);
                                    echo(@$erro2);
                                    echo(@$erro3);
                                ?>
                            </h2>
                        </div>
					</div>
                </div>
            </div>
        </section>
		<script src="js/menu.js"></script>
    </body>
</html>