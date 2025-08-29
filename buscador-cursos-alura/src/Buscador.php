<?php 

namespace Karoldegan\BuscadorCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador{
    
    public function __construct(
        private ClientInterface $httpClient, 
        private Crawler $crawler)
    {
        
    }

    public function buscarCurso (string $url): array{
        $resposta = $this->httpClient->request('GET', $url);

        $html = $resposta->getBody();


        $this->crawler->addHtmlContent($html);
        
        $elementosSpan = $this->crawler->filter('span.card-curso__nome');

        $cursos= [];
        
        foreach ($elementosSpan as $elementospan){
            $cursos[] = $elementospan->textContent;
            
        }

        return $cursos;
    }
}