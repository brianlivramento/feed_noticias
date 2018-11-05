<?php

namespace App\Controllers;

use Symfony\Component\Yaml\Yaml;
use Slim\Views\Twig;

class IndexController 
{
	const NEWS_LIMIT = 6;
	const TABS = ['principal', 'politica', 'econonomia', 'esporte', 'mundo'];

	private $view;

	public function __construct() 
	{
        $this->view =  new \Slim\Views\Twig('../templates', [
			'cache' => '../templates/cache'
		]);
    }

	public function getAllNews($arr_xml, $result = array()) 
	{		
		for ($i=0; $i < count($arr_xml) ; $i++)  
		{
			for ($j=0; $j < count(self::TABS) ; $j++) 
			{
				for ($k=0; $k < self::NEWS_LIMIT ; $k++) 
				{	
					$xml = array_values($arr_xml);
					$xml = array_values($xml[$i])[$j];										
					$xml = simplexml_load_file($xml);	
					
					if ( isset($xml->channel->item[$k]->title) )
					{
						$headline = [
							'title' => $xml->channel->item[$k]->title,
							'description' => strip_tags($xml->channel->item[$k]->description),
							'link' => $xml->channel->item[$k]->link
						];
						array_push($result, $headline);
					} else if ( isset($xml->entry[$i]->title) )
					{						
						$description = ( isset($xml->entry[$i]->content) ? 
							$xml->entry[$i]->content : $xml->entry[$i]->summary );
						
						$headline = [
							'title' => $xml->entry[$i]->title,
							'description' => strip_tags($description),
							'link' => $xml->entry[$i]->link
						];
						array_push($result, $headline);
					} 
				}
			}
		}		
		return $this->view->fetch('midias/midia.html.twig', [
			'news' => $result
		]);
	}

	public function getAllMidias()
	{		
		$yaml = Yaml::parse(file_get_contents('../rss/rss.yml'));
		return $this->getAllNews( array_shift($yaml) );
	}
}