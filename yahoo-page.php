<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Fique por dentro das manchetes dos grandes portais em tempo real.">
	<meta http-equiv="refresh" content="60">
	<title>Yahoo | Veja as principais notícias</title>
	<link rel="shortcut icon" href="img/yahoo.png" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/bootswatch.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.expander.min.js"></script>
	<script type="text/javascript" src="js/expandir.js"></script>
</head>
<body>
	<div id="wrap">
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="../" class="navbar-brand"></a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="navbar-main">
					<ul class="nav navbar-nav">
						<li><a href="uol">UOL</a></li>
						<li><a href="terra">Terra</a></li>
						<li><a href="g1">G1</a></li>
						<li><a href="r7">R7</a></li>						
						<li><a href="ig">IG</a></li>
						<li><a href="folha">Folha de S.Paulo</a></li>
						<li><a href="bbc">BBC Brasil</a></li>
						<li><a href="estadao">Estadão</a></li>
						<li  class="active"><a href="yahoo">Yahoo Notícias</a></li>
					</ul>
				</div>
			</div>			
		</div>

		<div class="container">			
			<div class="row">				
				<div id="myTabContent" class="col-lg-9 tab-content">
					<div id="principal" class="tab-pane fade active in">
						<?php 
						include 'com.noticias/yahoonoticias.php';
						$yahoonoticias = new yahoonoticias();
						echo $yahoonoticias->obter_principal();
						?>
					</div>
				    <div id="politica" class="tab-pane fade">
						<?php echo $yahoonoticias->obter_politica();?>					
				    </div>	
					<div id="economia" class="tab-pane fade">
						<?php echo $yahoonoticias->obter_economia();?>					
				    </div>	
					<div id="esporte" class="tab-pane fade">
						<?php echo $yahoonoticias->obter_esporte();?>					
				    </div>	
					<div id="mundo" class="tab-pane fade">
						<?php echo $yahoonoticias->obter_mundo();?>					
				    </div>	
				</div>
				<div class="col-lg-3 pull-right">
					<img class="logo" src="img/yahoo.jpg" alt="Yahoo Brasil"><br />
					<small><?php echo 'Última atualização: '.date("H:i"); ?></small>
					<div class="space"></div>
					<input type="button" class="btn btn-default" value="Atualizar" onclick="window.location.href=window.location.href">
					<div class="space"></div>
					<div class="painel">
						<ul class="nav nav-pills nav-stacked">
							<li class="active"><a href="#principal" data-toggle="tab">Principais Notícias</a></li>
							<li><a href="#politica" data-toggle="tab">Política</a></li>
							<li><a href="#economia" data-toggle="tab">Economia</a></li>
							<li><a href="#esporte" data-toggle="tab">Esporte</a></li>
							<li><a href="#mundo" data-toggle="tab">Mundo</a></li>					
						</ul>
					</div>					
					<div class="barra"></div>					
				</div>				
			</div>			
			</div>		
			<footer class="alt-footer">
				<div class="container">
					<div class="col-lg-12">
						<ul class="list-unstyled">
							<li class="pull-right"><a href="#top">Ir para o topo</a></li>
							<li>Fique por dentro das manchetes dos grandes portais.</li>
						</ul>				
					</div>
				</div>
			</footer>
		</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/analytics.js"></script>
</body>
</html>