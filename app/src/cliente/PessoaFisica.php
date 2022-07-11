<?php

namespace App\Projeto\Cliente;

class PessoaFisica extends Pessoa
{
    public function __construct(
        public CPF $cpf    
    ){}    

    public function getData():array 
    {
        return  array_merge(parent::getData(), [ 
            "CPF" => $this->cpf->cpf 
        ]);
    }
  
}
