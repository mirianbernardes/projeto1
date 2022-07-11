<?php

namespace App\Projeto\Cliente;

class Cliente
{

    public function __construct(            
        public Pessoa $pessoa,
    ){}
 
    public function save()
    {
        return true;
    }

    public function update()
    {
        return true;
    }
    
    public function delete($id)
    {
        return true;
    }

    public function find($id)
    {
        return true;
    }

    public function findAll()
    {
        return true; 
    }
}

