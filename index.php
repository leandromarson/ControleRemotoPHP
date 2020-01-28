<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css"> 
        <title>Controle Remoto PHP Poo</title>
    </head>
    <body>
        <div id = "interface">
            <header id ="cabecalho">
            	<hgroup>
                    <h1>Site Controle Remoto</h1>
                        <h2>POO em PHP</h2>
		</hgroup>						
            </header>
            <pre>
            <?php
                require_once 'ControleRemoto.php';
                $c = new ControleRemoto();
                $c->ligar();
                $c->maisVolume();
                $c->desligar();
                $c->maisVolume();
                $c->ligar();
                $c->menosVolume();
                $c->abrirMenu();

            ?>
            </pre>
            <footer id= "rodape">
			<p>2020 - by Leandro Marson Ribeiro<br>
            </footer> 
        </div>    
    </body>
</html>
