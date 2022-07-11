<?php

namespace App\Projeto\Cliente;

class CNPJ
{
     
     public function __construct(
         public string $cnpj 
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
 