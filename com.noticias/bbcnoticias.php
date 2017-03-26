<?php

class bbcnoticias {
	
	function obter_principal() {				
		$xml = simplexml_load_file("http://www.bbc.co.uk/portuguese/index.xml");
		if($xml != null) {
			$quant_noticias = 6;
			
			for($i=0;$i<$quant_noticias;$i++) {			
				$titulo = $xml->entry[$i]->title;
				$link = $xml->entry[$i]->link;
				$descricao = $xml->entry[$i]->summary;
				$noticia[$i] =			
				'<div class="col-lg-4">
					<div class="noticia">
						<div class="titulo">
							<h3 class="in">'.$titulo.'</h3>
						</div>		
						<div class="descricao">
							<p>'.$descricao.'</p>
							<a href="http://www.bbc.co.uk/portuguese/topicos/brasil/" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>							
						</div>
					</div>
					<div class="barra"></div>
				</div>';		
			}	
			foreach ($noticia as $n){
				echo $n;
			}
		} else {
			echo '<h1>Não encontramos notícias</h1>';
		}
	}
	
	function obter_politica() {
		$xml = null;
		if($xml != null) {
			$quant_noticias = 6;
			
			for($i=0;$i<$quant_noticias;$i++) {			
				$titulo = $xml->entry[$i]->title;
				$link = $xml->entry[$i]->link;
				$descricao = $xml->entry[$i]->summary;
				$noticia[$i] =			
				'<div class="col-lg-4">
					<div class="noticia">
						<div class="titulo">
							<h3 class="in">'.$titulo.'</h3>
						</div>		
						<div class="descricao">
							<p>'.$descricao.'</p>
							<a href="http://www.bbc.co.uk/portuguese/" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
						</div>
					</div>
					<div class="barra"></div>
				</div>';		
			}	
			foreach ($noticia as $n){
				echo $n;
			}
		} else {
			echo '<h1>Não encontramos notícias</h1>';
		}
	}
	
	function obter_economia() {
		$xml = simplexml_load_file("http://www.bbc.co.uk/portuguese/topicos/economia/index.xml");
		if($xml != null) {
			$quant_noticias = 6;
			
			for($i=0;$i<$quant_noticias;$i++) {			
				$titulo = $xml->entry[$i]->title;
				$link = $xml->entry[$i]->link;
				$descricao = $xml->entry[$i]->summary;
				$noticia[$i] =			
				'<div class="col-lg-4">
					<div class="noticia">
						<div class="titulo">
							<h3 class="in">'.$titulo.'</h3>
						</div>		
						<div class="descricao">
							<p>'.$descricao.'</p>
							<a href="http://www.bbc.co.uk/portuguese/topicos/economia/" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
						</div>
					</div>
					<div class="barra"></div>
				</div>';			
			}	
			foreach ($noticia as $n){
				echo $n;
			}
		} else {
			echo '<h1>Não encontramos notícias</h1>';
		}
	}
	
	function obter_esporte() {
		$xml = null;
		if($xml != null) {
			$quant_noticias = 6;
			
			for($i=0;$i<$quant_noticias;$i++) {			
				$titulo = $xml->entry[$i]->title;
				$link = $xml->entry[$i]->link;
				$descricao = $xml->entry[$i]->summary;
				$noticia[$i] =			
				'<div class="col-lg-4">
					<div class="noticia">
						<div class="titulo">
							<h3 class="in">'.$titulo.'</h3>
						</div>		
						<div class="descricao">
							<p>'.$descricao.'</p>
							<a href="http://www.bbc.co.uk/portuguese/" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
						</div>
					</div>
					<div class="barra"></div>
				</div>';			
			}	
			foreach ($noticia as $n){
				echo $n;
			}
		} else {
			echo '<h1>Não encontramos notícias</h1>';
		}
	}
	
	function obter_mundo() {
		$xml = simplexml_load_file("http://www.bbc.co.uk/portuguese/topicos/internacional/index.xml");
		if($xml != null) {
			$quant_noticias = 6;			
			for($i=0;$i<$quant_noticias;$i++) {			
				$titulo = $xml->entry[$i]->title;
				$link = $xml->entry[$i]->link;
				$descricao = $xml->entry[$i]->summary;
				$noticia[$i] =			
				'<div class="col-lg-4">
					<div class="noticia">
						<div class="titulo">
							<h3 class="in">'.$titulo.'</h3>
						</div>		
						<div class="descricao">
							<p>'.$descricao.'</p>
							<a href="http://www.bbc.co.uk/portuguese/topicos/internacional/" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
						</div>
					</div>
					<div class="barra"></div>
				</div>';			
			}	
			foreach ($noticia as $n){
				echo $n;
			}
		} else {
			echo '<h1>Não encontramos notícias</h1>';
		}
	}
}