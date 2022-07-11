<?php 

namespace App\Projeto\Cliente;

interface ItipoPessoa{
    public function getData():array;
}

abstract class Pessoa implements ItipoPessoa{
    public string $nome;
    public string $email;
    public Endereco $endereco;

    public function getData():array{
        return [          
            "nome"=>$this->nome,
            "email"=>$this->email,
            "endereco"=>$this->endereco,       
        ];
    }
}