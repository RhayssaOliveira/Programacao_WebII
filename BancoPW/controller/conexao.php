<?php

//gerenciando o banco
class Conexao {
    private $host = "localhost";  // host do banco de dados
    private $usuario = "root";    // nome de usuário do banco de dados
    private $senha = "";          // senha do banco de dados
    private $banco = "exemplo_aula_pw"; // nome do banco de dados
    private $conexao;             // objeto de conexão

    // inicializando a conexao com o bd
    public function __construct() {
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        if ($this->conexao->connect_error) {
            // se tiver erro, aparece a msg:
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
    }

    public function getConexao() {
        return $this->conexao; 
    }
}

?>
