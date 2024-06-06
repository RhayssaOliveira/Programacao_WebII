<?php
    //incluindo o arquivo em 'conexao.php'
    require_once '../controller/conexao.php';

    class Pessoa{
        //variaveis 
        private $id;
        private $nome;
        private $endereco;
        private $bairro;
        private $cep;
        private $cidade;
        private $estado;
        private $telefone;
        private $celular;
        private $conexao; //objeto de conexao com o bd

        //colhendo valores por meio de 'guetters' e 'setters'
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;

        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getEndereco(){
            return $this->endereco;
        }
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        public function getBairro(){
            return $this->bairro;
        }
        public function setBairro($bairro){
            $this->bairro = $bairro;
        }
        public function getCep(){
            return $this->cep;
        }
        public function setCep($cep){
            $this->cep = $cep;
        }
        public function getCidade(){
            return $this->cidade;
        }
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
        public function getEstado(){
            return $this->estado;
        }
        public function setEstado($estado){
            $this->estado = $estado;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function getCelular(){
            return $this->celular;
        }
        public function setCelular($celular){
            $this->celular = $celular;
        }
        
        //criando nova conexao
        public function __construct(){
            $this->conexao = new Conexao();
        }

        //metodo para inserir o que o user inseriu no bd
        public function inserir(){
            //preparando a consulta sql
            $sql = "INSERT INTO cliente (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
            //declarando sql
            $stmt = $this->conexao->getConexao()->prepare($sql);
            //ligando os parametros aos valores das variaveis
            $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
            //consultando sql e retornando o resultado
            return $stmt->execute(); 
        }
    }

    ?>