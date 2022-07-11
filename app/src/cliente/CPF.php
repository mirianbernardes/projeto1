<?php 

namespace App\Projeto\Cliente;

class CPF
{
    public function __construct(
        public string $cpf 
    ){}
    public function isExists()
    {
        return true;
    }
    public function WithFormat()
    {
        return true;
    }
    public function WithoutFormat()
    {
        return true;
    }
    public function validateFormat()
    {
        return true;
    }        
} 