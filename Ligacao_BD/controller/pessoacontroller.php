<?php
    require_once '../model/pessoa.php';

    //definindo a classe que vai receber os dados
    class PessoaController{
        //variavel pessoa
        private $pessoa;
        
        public function __construct(){

            //instanciando a classe
            $this->pessoa = new Pessoa();

            //comando para inserir os dados
            $this->inserir();
        }

        //valores que o user vai inserir
        public function inserir(){
            $this->pessoa->setNome($_POST['nome']);
            $this->pessoa->setEndereco($_POST['endereco']);
            $this->pessoa->setBairro($_POST['bairro']);
            $this->pessoa->setCep($_POST['cep']);
            $this->pessoa->setCidade($_POST['cidade']);
            $this->pessoa->setEstado($_POST['estado']);
            $this->pessoa->setTelefone($_POST['telefone']);
            $this->pessoa->setCelular($_POST['celular']);
            
            $this->pessoa->inserir();

        }
    }

    //instanciando
    new PessoaController();
?>