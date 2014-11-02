<?php

class yahoonoticias {
	
	function obter_principal() {				
		$xml = simplexml_load_file("http://br.noticias.yahoo.com/brasil/?format=rss");
		if($xml != null) {
			$quant_noticias = 6;
			
			for($i=0;$i<$quant_noticias;$i++) {			
				$titulo = $xml->channel->item[$i]->title;
				$link = $xml->channel->item[$i]->link;
				$descricao = $xml->channel->item[$i]->description;
				$noticia[$i] =			
				'<div class="col-lg-4">
					<div class="noticia">
						<div class="titulo">
							<h3 class="in">'.$titulo.'</h3>
						</div>		
						<div class="descricao">
							<p>'.$descricao.'</p>
							<a href="'.$link.'" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
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
		$xml = simplexml_load_file("http://br.noticias.yahoo.com/politica/?format=rss");
		if($xml != null) {
			$quant_noticias = 6;
			
			for($i=0;$i<$quant_noticias;$i++) {			
				$titulo = $xml->channel->item[$i]->title;
				$link = $xml->channel->item[$i]->link;
				$descricao = $xml->channel->item[$i]->description;
				$noticia[$i] =			
				'<div class="col-lg-4">
					<div class="noticia">
						<div class="titulo">
							<h3 class="in">'.$titulo.'</h3>
						</div>		
						<div class="descricao">
							<p>'.$descricao.'</p>
							<a href="'.$link.'" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
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
		$xml = simplexml_load_file("http://br.noticias.yahoo.com/economia/?format=rss");
		if($xml != null) {
			$quant_noticias = 6;
			
			for($i=0;$i<$quant_noticias;$i++) {			
				$titulo = $xml->channel->item[$i]->title;
				$link = $xml->channel->item[$i]->link;
				$descricao = $xml->channel->item[$i]->description;
				$noticia[$i] =			
				'<div class="col-lg-4">
					<div class="noticia">
						<div class="titulo">
							<h3 class="in">'.$titulo.'</h3>
						</div>		
						<div class="descricao">
							<p>'.$descricao.'</p>
							<a href="'.$link.'" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
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
		$xml = simplexml_load_file("http://br.esporteinterativo.yahoo.com/?format=rss");
		if($xml != null) {
			$quant_noticias = 6;
			
			for($i=0;$i<$quant_noticias;$i++) {			
				$titulo = $xml->channel->item[$i]->title;
				$link = $xml->channel->item[$i]->link;
				$descricao = $xml->channel->item[$i]->description;
				$noticia[$i] =			
				'<div class="col-lg-4">
					<div class="noticia">
						<div class="titulo">
							<h3 class="in">'.$titulo.'</h3>
						</div>		
						<div class="descricao">
							<p>'.$descricao.'</p>
							<a href="'.$link.'" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
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
		$xml = simplexml_load_file("http://br.noticias.yahoo.com/mundo/?format=rss");
		if($xml != null) {
			$quant_noticias = 6;			
			for($i=0;$i<$quant_noticias;$i++) {			
				$titulo = $xml->channel->item[$i]->title;
				$link = $xml->channel->item[$i]->link;
				$descricao = $xml->channel->item[$i]->description;
				$noticia[$i] =			
				'<div class="col-lg-4">
					<div class="noticia">
						<div class="titulo">
							<h3 class="in">'.$titulo.'</h3>
						</div>		
						<div class="descricao">
							<p>'.$descricao.'</p>
							<a href="'.$link.'" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
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