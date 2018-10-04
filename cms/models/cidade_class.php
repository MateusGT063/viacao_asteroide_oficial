<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 23/04/2018
Controller: Cidade.

Esta classe salva uma
nova cidade no banco.

*/

class Cidade{
    
    // Atributos desta classe.
    public $codCidade;
    public $nomeCidade;
    public $codEstado;
    
    // Para fazer o select.
    public $nome;
    
    // Contrutor da classe.
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Salva um novo registro.
    public function Insert($cidade){
        
        $sql = "INSERT INTO tbl_cidade(nomeCidade, codEstado)
        VALUES('".$cidade->nomeCidade."', ".$cidade->codEstado.");";
        
        $conex = new Mysql_db();
        
        $PDO_conex = $conex->Conectar();
        
        if($PDO_conex->query($sql)){
            
            header('location:index.php');
            
        }else{
            echo 'Erro ao salvar um registro do banco.<br> sql: <br>'.$sql;
        }
        
    }
    
    // Deleta um registro existente.
    public function Delete($cidade){
        
        $sql = "DELETE FROM tbl_cidade WHERE codCidade = ".$cidade->codCidade;
        
        $conex = new Mysql_db();
        
        $PDO_conex = $conex->Conectar();
        
        if($PDO_conex->query($sql)){
            
            header('location:index.php');
            
        }else{
            echo 'Erro ao deletar um registro do banco.<br> sql: <br>'.$sql;
        }
        
    }
    
    // Busca por um registro existente.
    public function SelectById($cidade){
        
        $sql = "SELECT c.codCidade, c.nomeCidade, e.codEstado FROM tbl_cidade AS c INNER JOIN tbl_estado AS e ON c.codEstado = e.codEstado WHERE codCidade = ".$cidade->codCidade;
        
        $conex = new Mysql_db();
        
        $PDO_conex = $conex->Conectar();
        
        $select = $PDO_conex->query($sql);
        
        if($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listCidade = new Cidade();
            
            $listCidade->codCidade = $rs['codCidade'];
            $listCidade->nomeCidade = $rs['nomeCidade'];
            $listCidade->codEstado = $rs['codEstado'];
            
        }
        
        if(isset($listCidade)){
            return $listCidade;
        }
        
    }
    
    // Busca todos os registros.
    public function Select(){
        
        $sql = "SELECT c.codCidade, c.nomeCidade, e.nomeEstado FROM tbl_cidade AS c INNER JOIN tbl_estado AS e ON c.codEstado = e.codEstado ORDER BY codCidade DESC;";
        
        $conex = new Mysql_db();
        
        $PDO_conex = $conex->Conectar();
        
        $select = $PDO_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listCidade[] = new Cidade();
            
            $listCidade[$cont]->codCidade = $rs['codCidade'];
            $listCidade[$cont]->nomeCidade = $rs['nomeCidade'];
            $listCidade[$cont]->nomeEstado = $rs['nomeEstado'];
            
            $cont+=1;
            
        }
        
        $conex->Desconectar();
        
        if(isset($listCidade)){
            return $listCidade;
        }
        
    }
    
    // Busca todos os registros.
    public function Select_cbx(){
        
        $sql = "SELECT c.codCidade, c.nomeCidade, e.nome FROM tbl_cidade AS c INNER JOIN tbl_estado AS e ON c.codEstado = e.codEstado ORDER BY nomeCidade;";
        
        $conex = new Mysql_db();
        
        $PDO_conex = $conex->Conectar();
        
        $select = $PDO_conex->query($sql);
        
        $cont = 1;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listCidade[] = new Cidade();
            
            $listCidade[$cont]->codCidade = $rs['codCidade'];
            $listCidade[$cont]->nomeCidade = $rs['nomeCidade'];
            $listCidade[$cont]->nome = $rs['nome'];
            
            $cont+=1;
            
        }
        
        $conex->Desconectar();
        
        if(isset($listCidade)){
            return $listCidade;
        }
        
    }
    
    // Atualiza um registro existente.
    public function Update($cidade){
        
        $sql = "UPDATE tbl_cidade SET nomeCidade = '".$cidade->nomeCidade."', codEstado = ".$cidade->codEstado." WHERE codCidade = ".$cidade->codCidade;
        
        $conex = new Mysql_db();
        
        $PDO_conex = $conex->Conectar();
        
        if($PDO_conex->query($sql)){
            
            header('location:index.php');
            
        }else{
            echo 'Erro ao salvar um registro do banco.<br> sql: <br>'.$sql;
        }
        
    }
    
    public function SelectCidade(){
        
        $sql = "SELECT codCidade, nomeCidade FROM tbl_cidade ORDER BY nomeCidade;";
        
        $conex = new Mysql_db();
        
        $PDO_conex = $conex->Conectar();
        
        $select = $PDO_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listCidade[] = new Cidade();
            
            $listCidade[$cont]->codCidade = $rs['codCidade'];
            $listCidade[$cont]->nomeCidade = $rs['nomeCidade'];
            
            $cont+=1;
            
        }
        
        $conex->Desconectar();
        
        if(isset($listCidade)){
            return $listCidade;
        }
        
    }
    
}

?>