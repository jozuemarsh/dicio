<?php 
namespace jozuemarsh\Dicio;

use GuzzleHttp\Psr7\Header;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\DomCrawler\Crawler as SymfonyCrawler;

class Crawler{
    public static function page(String $url, array $params = []){
        $client = new Client(['verify' => false,]);
        try {
            $response = $client->get($url, ['query' => $params]);
        } catch (\Exception $ex) {
            exit('Nada encontrado no Dicio Brasileiro.');
        }
        $type = $response->getHeader('content-type');
        $header = new Header;
        $parsed = $header::parse($type);
        $html = $response->getBody()->getContents();
        $html = mb_convert_encoding($html, 'UTF-8', $parsed[0]['charset'] ?: 'UTF-8');
        return new SymfonyCrawler($html);
    }
}
