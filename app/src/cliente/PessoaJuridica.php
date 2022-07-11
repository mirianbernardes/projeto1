<?php

namespace App\Projeto\Cliente;

class PessoaJuridica extends Pessoa
{
    
    public string $nomeFantasia;
    public string $inscricaoMunicipal;    
    public string $inscricaoEstadual;    

    public function __construct(
        public CNPJ $cnpj    
    ){}

    public function getData():array 
    {   
        return  array_merge(parent::getData(),
            [
            "cpnj"=>$this->cnpj,
            "nome_fantasia"=>$this->nomeFantasia,
            "incricao_municipal"=>$this->inscricaoMunicipal,
            "incricao_estadual"=>$this->inscricaoEstadual
        ]);
    }

}