<?php

class estadaonoticias {
	
	function obter_principal() {				
		$xml = simplexml_load_file("http://www.estadao.com.br/rss/brasil.xml");
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
							<p>'.strip_tags($descricao).'</p>
							<a href="http://www.estadao.com.br/" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
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
		$xml = simplexml_load_file("http://www.estadao.com.br/rss/politica.xml");
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
							<p>'.strip_tags($descricao).'</p>
							<a href="http://politica.estadao.com.br/" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
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
		$xml = null;
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
							<p>'.strip_tags($descricao).'</p>
							<a href="http://economia.estadao.com.br/" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
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
		$xml = simplexml_load_file("http://www.estadao.com.br/rss/esportes.xml");
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
							<p>'.strip_tags($descricao).'</p>
							<a href="http://esportes.estadao.com.br/" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
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
		$xml = simplexml_load_file("http://www.estadao.com.br/rss/internacional.xml");
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
							<p>'.strip_tags($descricao).'</p>
							<a href="http://www.estadao.com.br/internacional/" class="btn btn-default btn-xs pull-right" target="_blank">Leia mais</a>
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