<?php 
namespace jozuemarsh\Dicio;

use Exception;
use GuzzleHttp\Exception\GuzzleException;
use stdClass;
use Symfony\Component\DomCrawler\Crawler as SymfonyCrawler;

class Engine{
    const BASE_URL = 'http://www.dicio.com.br/';
    const HTML_SELECTOR_CARD = '.parent-card > .card';
    
    const HTML_SELECTOR_MEANING = '.significado';
    const HTML_SELECTOR_ETYMOLOGY = '.etim';
    const HTML_SELECTOR_SYNONYMS = '.adicional.sinonimos .wrapper';
    const HTML_SELECTOR_EXTRA = '.adicional';
    const HTML_SELECTOR_PHRASE = '.frases .frase';

    public function search(string $word): stdClass{
        if (empty($word)) {
            throw new Exception('Palavra não encontrada');
        }
        $word = Utils::clear_string($word);
        $url = Utils::format_url(self::BASE_URL) . $word;
        $page = Crawler::page($url);
        if (!is_object($page)) {
            throw new Exception('Erro no Crawler');
        }
        return (object)[
            'titulo' => self::titulo($page),
            'descricao' => self::descricao($page),
            'significado' => self::significado($page),
            'significado2' => self::meaning($page),
            'etimologia' => self::etymology($page),
            'sinonimos' => self::synonyms($page),
            'definicao' => self::definicao($page),
            'revisao' => self::revisao($page),
            'q' => $word,
            'exemplos' => self::examples($page),
            'extras' => self::extras($page),
            'html_card' => self::html_card($page)
        ];
    }
    public function titulo(SymfonyCrawler $page){
        $result = $page->filter(self::HTML_SELECTOR_CARD)->filter('.tit-significado');
        return $result->each(function (SymfonyCrawler $content) {
            $content = trim($content->text(''));
            if (empty($content)) {
                return false;
            }
            return $content;
        });
    }
    public function descricao(SymfonyCrawler $page){
        $result = $page->filter(self::HTML_SELECTOR_CARD)->filter('.significado.textonovo span:nth-child(2)');
        return $result->each(function (SymfonyCrawler $content) {
            $content = trim($content->text(''));
            if (empty($content)) {
                return false;
            }
            return $content;
        });
    }
    public function significado(SymfonyCrawler $page){
        $result = $page->filter(self::HTML_SELECTOR_CARD)->filter('.significado.textonovo span:nth-child(2),.significado.textonovo span:nth-child(4)');
        return $result->each(function (SymfonyCrawler $content) {
            $content = trim($content->text(''));
            if (empty($content)) {
                return false;
            }
            return $content;
        });
    }
    public function definicao(SymfonyCrawler $page){
        $result = $page->filter(self::HTML_SELECTOR_CARD)->filter('.adicional b');
        return $result->each(function (SymfonyCrawler $content) {
            $content = trim($content->text(''));
            if (empty($content)) {
                return false;
            }
            return $content;
        });
    }
    public function revisao(SymfonyCrawler $page){
        $result = $page->filter(self::HTML_SELECTOR_CARD)->filter('.reviewer');
        return $result->each(function (SymfonyCrawler $content) {
            $content = trim($content->text(''));
            if (empty($content)) {
                return false;
            }
            return $content;
        });
    }
    
    public function meaning(SymfonyCrawler $page){
        $result = $page->filter(self::HTML_SELECTOR_MEANING)->filter('br+span');
        $meaning = $result->each(function (SymfonyCrawler $content) {
            $meaning = trim($content->text(''));
            if (empty($meaning) || in_array('.' . trim($content->attr('class')), [self::HTML_SELECTOR_ETYMOLOGY, '.cl'])) {
                return false;
            }
            return trim($meaning);
        });
        return array_filter($meaning, function ($item){
            return !empty($item);
        });
    }
    public function etymology(SymfonyCrawler $page){
        $etymology =  trim($page->filter(self::HTML_SELECTOR_ETYMOLOGY)->text(''));
        $pos = strpos( $etymology, ').');
        if($pos !== false){
            $etymology = substr($etymology, $pos + 2);
        }
        return $etymology;
    }
    public function synonyms(SymfonyCrawler $page){
        $result = $page->filter(self::HTML_SELECTOR_SYNONYMS)->text('');
        $synonyms = explode(',', $result);
        return array_map('trim', $synonyms);
    }
    public function examples(SymfonyCrawler $page){
        $result = $page->filter(self::HTML_SELECTOR_PHRASE);
        return $result->each(function (SymfonyCrawler $content) {
            $content = trim($content->text(''));
            if (empty($content)) {
                return false;
            }
            return $content;
        });
    }
    public function extras(SymfonyCrawler $page){
        $result = $page->filter(self::HTML_SELECTOR_EXTRA)->filter('br+span');
        return $result->each(function (SymfonyCrawler $content) {
            $content = trim($content->text(''));
            if (empty($content)) {
                return false;
            }
            return $content;
        });
    }
    
    public function html_card(SymfonyCrawler $page){
        $result = $page->filter(self::HTML_SELECTOR_CARD.':nth-child(1)')->filter('');
        return $result->each(function (SymfonyCrawler $content) {
            $content = $content->html('');
            // $content = trim($content->html(''));
            if (empty($content)) {
                return false;
            }
            return $content;
        });
    }
}
