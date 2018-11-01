<?php

namespace App\Controller;

class IndexController 
{
	const NEWS_LIMIT = 6;

	public function getAllNews($xml) 
	{		
		$result = null;
		$xml = simplexml_load_file($xml);
		if($xml != null) 
		{					
			for ($i=0; $i < self::NEWS_LIMIT ; $i++) 
			{	
				$result = [
					'title' => $xml->channel->item[$i]->title,
					'description' => $xml->channel->item[$i]->description,
					'link' => $xml->channel->item[$i]->link,
				];	
			}	
		}
		return $result;
	}

	public function getNewsl()
	{
		$this->getAllNews('http://g1.globo.com/dynamo/rss2.xml');
		return $result;
	}

	/**
http://g1.globo.com/dynamo/rss2.xml principal
http://g1.globo.com/dynamo/politica/mensalao/rss2.xml
http://g1.globo.com/dynamo/economia/rss2.xml
http://g1.globo.com/dynamo/carros/rss2.xml
http://g1.globo.com/dynamo/mundo/rss2.xml


http://ultimosegundo.ig.com.br/rss.xml
http://br.economia.feedsportal.com/c/33512/f/584953/index.rss
http://esporte.ig.com.br/rss.xml
http://ultimosegundo.ig.com.br/mundo/rss.xml

http://noticias.r7.com/brasil/feed.xml
http://noticias.r7.com/economia/feed.xml
http://esportes.r7.com/futebol/feed.xml
http://noticias.r7.com/internacional/feed.xml

http://feeds.folha.uol.com.br/folha/brasil/rss091.xml
http://feeds.folha.uol.com.br/poder/rss091.xml
http://feeds.folha.uol.com.br/folha/dinheiro/rss091.xml
http://feeds.folha.uol.com.br/folha/esporte/rss091.xml
http://feeds.folha.uol.com.br/folha/mundo/rss091.xml

http://www.estadao.com.br/rss/brasil.xml
http://www.estadao.com.br/rss/politica.xml
http://www.estadao.com.br/rss/esportes.xml
"http://www.estadao.com.br/rss/internacional.xml

http://www.bbc.co.uk/portuguese/index.xml
http://www.bbc.co.uk/portuguese/topicos/economia/index.xml
http://www.bbc.co.uk/portuguese/topicos/internacional/index.xml


http://www.terra.com.br/rss/Controller?channelid=20e07ef2795b2310VgnVCM3000009af154d0RCRD&ctName=atomo-noticia&lg=pt-br

http://noticias.terra.com.br/rss/Controller?channelid=058251a77fb05310VgnVCM4000009bf154d0RCRD&ctName=atomo-noticia&lg=pt-br

http://economia.terra.com.br/rss/Controller?channelid=6f22bd10e1c4a310VgnVCM4000009bcceb0aRCRD&ctName=atomo-noticia&lg=pt-br

http://esportes.terra.com.br/rss/Controller?channelid=2d19f517cd779310VgnVCM5000009ccceb0aRCRD&ctName=atomo-noticia&lg=pt-br

http://noticias.terra.com.br/rss/Controller?channelid=31b0316871bf3310VgnVCM3000009af154d0RCRD&ctName=atomo-noticia&lg=pt-br


http://rss.uol.com.br/feed/noticias.xml
http://rss.uol.com.br/feed/politica.xml
http://rss.uol.com.br/feed/economia.xml
http://esporte.uol.com.br/futebol/ultimas/index.xml
http://rss.uol.com.br/feed/internacional.xml


http://br.noticias.yahoo.com/brasil/?format=rss
http://br.noticias.yahoo.com/politica/?format=rss
http://br.noticias.yahoo.com/economia/?format=rss
http://br.esporteinterativo.yahoo.com/?format=rss
http://br.noticias.yahoo.com/mundo/?format=rss


	**/
}