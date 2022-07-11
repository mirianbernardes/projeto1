<?php

require_once __DIR__."/vendor/autoload.php";

use App\Projeto\Cliente\{Cliente, CNPJ, CPF, Endereco, PessoaFisica, PessoaJuridica};

$endereco = new Endereco("logradouro","cep","numero","bairro","Cidade","Estado","Pais");
$cpf = new CPF("12345678");
$cnpj = new CNPJ("277213266r");

$pessoaFisica = new PessoaFisica($cpf);
$pessoaFisica->nome = "Ricardo";
$pessoaFisica->email="rssantan@gmail.com";
$pessoaFisica->endereco=$endereco;

$pessoaJuridica = new PessoaJuridica($cnpj);
$pessoaJuridica->nome = "Ricardo";
$pessoaJuridica->email="rssantan@gmail.com";
$pessoaJuridica->endereco=$endereco;
$pessoaJuridica->nomeFantasia="NEED Solution LTDA.";
$pessoaJuridica->inscricaoEstadual="Isento";    
$pessoaJuridica->inscricaoMunicipal="Isento";  
 
// print_r($pessoaFisica->getData());
// print_r($pessoaJuridica->getData());
 

 $cliente = new Cliente($pessoaFisica);
 $cliente2 = new Cliente($pessoaJuridica);
 print_r($cliente);
 print_r($cliente2);