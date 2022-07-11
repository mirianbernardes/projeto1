<?php 

namespace App\Projeto\Cliente;

class Endereco
{
    public function __construct(
        public string $logradouro, 
        public string $cep, 
        public string $numero,
        public string $bairro,
        public string $cidade,
        public string $estado,
        public string $pais,
    ){}

    public function getEndereco():array
    {
        return [
            "logradouro"=>$this->logradouro,
            "cep"=>$this->cep,
            "numero"=>$this->numero,
            "bairro"=>$this->bairro,
            "cidade"=>$this->cidade,
            "estado"=>$this->estado,
            "pais"=>$this->pais
        ];
    }

    public function __toString()
    {
        return implode(",",$this->getEndereco())."\n";
    }
}
 