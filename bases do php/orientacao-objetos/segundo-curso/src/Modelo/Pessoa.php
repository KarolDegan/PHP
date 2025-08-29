<?php 

namespace Alura\Banco\Modelo;


abstract class Pessoa {
    
    use AcessoPropriedades;

    public function __construct(
        protected CPF $cpf,
        protected string $nome,)
        {
            $this->validaNomeTitular($nome);
        }
          
    public function getCpf(): string{
        return $this->cpf->recuperaNumero();
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
   
}