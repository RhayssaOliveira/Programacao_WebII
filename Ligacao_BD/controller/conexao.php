<?php
    //conectando ao banco de dados
    class Conexao {
        //variaveis ligando ao server
        private $host = "localhost"; //endereco do servidor do banco de dados
        private $usuario = "root"; //nome do user do banco de dados
        private $senha = ""; //senha pra acessar o banco de dados
        private $banco = "cliente"; //nome do banco de dados
        private $conexao; //variavel do objeto para conexao

        //metodo construtor
        public function __construct() {
            //inicializando a conexao com o banco de dados
            $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
            
            //caso nao consiga fazer a conexao, exibe a seguinte mensagem:
            if ($this->conexao->connect_error) {
                die("Falha na conexão: " . $this->conexao->connect_error);
            }
        }

        //retorno o objeto 'conexao'
        public function getConexao() {
            return $this->conexao;
        }
    }
?>