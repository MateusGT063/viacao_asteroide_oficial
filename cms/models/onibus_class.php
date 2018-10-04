<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 26/04/2018
Class: ônibus.

Esta classe faz o metodo que fará
a listagem dos ônibus na tela.

*/

class Onibus{
    
    // Atributos desta classe.
    public $idOnibus;
    public $placa;
    public $numFabricacao;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    public function Select(){
        
        $sql = "SELECT idOnibus, placa, numFabricacao FROM tbl_onibus;";
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        $select = $POD_conex->query($sql);
        
        $cont = 1;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Destino.
            $list[] = new Onibus();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $list[$cont]->idOnibus = $rs['idOnibus'];
            $list[$cont]->placa = $rs['placa'];
            $list[$cont]->numFabricacao = $rs['numFabricacao'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna a lista se existir dados no BD.
        if(isset($list)){
            return $list;
        }
        
    }
    
}

?>