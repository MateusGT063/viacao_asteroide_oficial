<?php

/*

Autor: Vinicius Matias Rodrigues
Data de modificação: 27/03/2018
Controller: Cadastro

*/

class Mysql_db1{

    private $server;
    private $user;
    private $password;
    private $dataBaseName;

     // Metodo mágico ou construtor.
    public function __construct(){
        /*
            pc da sala do kassiano
        */
        //$this->server = "10.107.134.6";
        
        /*
            pc da sala do marcel
        */
        //$this->server = "10.107.144.16";
        $this->server = "localhost";
        $this->user = "root";
        /*
            Senha do banco no senai
        */
        $this->password = "bcd127";
        /*
            Senha do banco em casa (edu)
        */
//        $this->password = "senai127";
        /*
            Nome do banco fora do servidor
        */
        $this->dataBaseName = "db_viacao_asteroide";

        
        /*
            Servidor
        */
        
//        $this->server = "192.168.1.1";
//        $this->user = "viacao_lt";
//        $this->password = "legacytech_bcd127";
//        $this->dataBaseName = "dbviacaoasteroide_lt";
    }

       // Conectar no banco.
    public function Conectar(){

        try{

            // Modo de conexão PDO: $conexao = new PDO(string, user, password).
            // "string": 'mysql:host=server;dbname=db'.
            // Vantagem: dentro de uma concepção de Orientação a Objeto e segurança contra o SQL inject.
            $conexao = new PDO('mysql:host='.$this->server.';dbname='.$this->dataBaseName, $this->user, $this->password);

            //
            return $conexao;

        }catch(PDOException $Error){

            echo("Erro ao conectar no banco de dados.<br>
                linha do erro: ".$Error->getLine()."<br>
                Mensagem do erro: ".$Error->getMessage()
                );

        }



    }

    // Desconectar do banco.
    public function Desconectar(){

        // Elimina a conexão com o BD.
        $conexao = null;

    }
}




?>
