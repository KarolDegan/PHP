<?php 

namespace Alura\Banco\Modelo;


/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 * 
 */

final class Endereco{

    use AcessoPropriedades;//trait

    private string $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero){
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }
    public function setCidade(string $cidade): void{
        $this->cidade = $cidade;
    }


    public function getBairro(): string
    {
        return $this->bairro;
    }
    public function setBairro(string $bairro): void{
        $this->bairro= $bairro;
    }


    public function getRua(): string
    {
        return $this->rua;
    }
    public function setRua(string $rua): void{
        $this->rua= $rua;
    }


    public function getNumero(): string
    {
        return $this->numero;
    }
    public function setNumero(string $numero): void{
        $this->numero= $numero;
    }


    public function __toString():string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }


    /*
    public function __get(string $nomeAtributo) {
        
        $metodo = 'get' . ucfirst($nomeAtributo);
        echo $this->$metodo();
    }

   /* public function __set(string $nomeAtributo, string $valor){

        $metodo = 'set'. ucfirst($nomeAtributo);
        $this->$metodo($valor);
    }
*/
    
    public function __set(string $nomeAtributo, string $valor){
        $this->nomeAtributo = $valor;
    }
    
    
}