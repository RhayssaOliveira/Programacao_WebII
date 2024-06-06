<?php
    //conectando ao banco de dados
    class Conexao {
        //variaveis ligando ao server
        private $host = "localhost";
        private $usuario = "root";
        private $senha = "";
        private $banco = "cliente";
        private $conexao; //variavel objeto para conexao

        //metodo construtor
        public function __construct() {
            $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
            
            //caso n seja possivel conectar, exibe a msg:
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