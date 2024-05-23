<?php

require_once '../model/pessoa.php';

//criacao de classe
class PessoaController {
    private $pessoa; // instanciando
    
    // metodo construtro
    public function __construct() {
        $this->pessoa = new Pessoa();
        $this->inserir();
    }

    // inserindo os dados no bd
    public function inserir() {
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        
        //salvando no bd
        $this->pessoa->inserir();
    }
}

new PessoaController();

?>
