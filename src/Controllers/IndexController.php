<?php

namespace App\Controllers;

use Symfony\Component\Yaml\Yaml;
use Slim\Views\Twig;

class IndexController 
{
	const NEWS_LIMIT = 6;

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
			$key1 = array_keys( $arr_xml )[$i];
			for ($j=0; $j <= 4 ; $j++) 
			{				
				$key2 = array_keys( $arr_xml[$key1])[$j];
				$header = [
					'site' => $key1,
					'section' => $key2,
					'headline' => null
				];
				$headline = array();
				for ($k=0; $k < self::NEWS_LIMIT ; $k++) 
				{			
					$xml =  $arr_xml[$key1][$key2];					
					$xml = simplexml_load_file($xml);	
					$res = $this->readXML($xml);	
					array_push($headline, $res);			
				}
				$header['headline'] = $headline;
				array_push($result, $header);	
			}
		}		
				
		return $this->view->fetch('midias/midia.html.twig', [
			'news' => $result,
			'hour' => $this->getHourNow()
		]);
	}

	public function getNewsBySitename($request, $arr_xml, $result = array()) 
	{
		$uri = $request->getUri()->getPath();
		$sitename = str_replace('/', '', $uri);
		
		if ($sitename && in_array($sitename, array_keys( $arr_xml )))
		{
			for ($j=0; $j <= 4 ; $j++) 
			{				
				$key2 = array_keys( $arr_xml[$sitename])[$j];
				$header = [
					'site' => $sitename,
					'section' => $key2,
					'headline' => null
				];
				$headline = array();
				for ($k=0; $k < self::NEWS_LIMIT ; $k++) 
				{			
					$xml =  $arr_xml[$sitename][$key2];					
					$xml = simplexml_load_file($xml);	
					$res = $this->readXML($xml);	
					array_push($headline, $res);			
				}
				$header['headline'] = $headline;
				array_push($result, $header);	
			}

			print_r($result);die;
				
			return $this->view->fetch('midias/midia.html.twig', [
				'news' => $result,
				'hour' => $this->getHourNow()
			]);
		}
	}

	public function readXML($xml, $list = array())
	{		
		for ($i=0; $i < count($xml) ; $i++) 
		{
			if ( isset($xml->channel->item[$i]->title) )
			{
				$title = $xml->channel->item[$i]->title;
				$description = strip_tags($xml->channel->item[$i]->description);
				$link = $xml->channel->item[$i]->link;
			} else if ( isset($xml->entry[$i]->title) )
			{
				$title = $xml->entry[$i]->title;
				$description = ( isset($xml->entry[$i]->content) ? 
					$xml->entry[$i]->content : $xml->entry[$i]->summary );
				$link = $xml->entry[$i]->title;
			}

			$l = [
				'title' => (string) $title,
				'description' => (string) $description,
				'link' => (string) $link
			];
			array_push($list, $l);
		}

		return $list;
	}

	public function getAllMidias($request)
	{		
		$yaml = Yaml::parse(file_get_contents('../rss/rss.yml'));
		//return $this->getAllNews( array_shift($yaml) );
		return $this->getNewsBySitename($request, array_shift($yaml));
	}

	public function getHourNow()
	{
		date_default_timezone_set("America/Sao_Paulo");
		return date('H:i');
	}


}