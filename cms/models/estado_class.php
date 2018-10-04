<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 23/04/2018
Model: Estado.

Esta classe pega todos os estados
do banco.

*/

class Estado{
    
    // Atributos desta classe.
    public $codEstado;
    public $nome;
    public $sigla;
    
    // Construtor da classe.
    public function __construct(){
        require_once("bd_class.php");
    }
    
    public function Select(){
        
        $sql = "SELECT * FROM tbl_estado";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        // Contador.
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Istancia a própria classe.
            $listEstado[] = new Estado();
            
            // Pega os valores e guarda nos atributos da classe.
            $listEstado[$cont]->codEstado = $rs['codEstado'];
            $listEstado[$cont]->nome = $rs['nomeEstado'];
            $listEstado[$cont]->sigla = $rs['sigla'];
            
            $cont+=1;
            
        }
        
        // Retorna a lista se ela existir.
        if(isset($listEstado)){
            return $listEstado;
        }
        
    }
    
}

?>