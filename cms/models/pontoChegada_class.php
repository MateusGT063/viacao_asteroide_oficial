<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 26/04/2018
Class: ponto de chegada.

Esta classe faz o metodo que fará
a listagem dos pontos de Chegada na tela.

*/

class PontoChegada{
    
    // Atributos desta classe.
    public $idPontoChegada;
    public $idPostoRodoviarioChegada;
    public $nomePosto;
    public $telefonePosto;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    public function Select(){
        
        $sql = "SELECT c.*, pr.nome, pr.telefone FROM tbl_chegada AS c INNER JOIN tbl_postorodoviario AS pr ON c.idPostoRodoviario = pr.idPostoRodoviario";
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Destino.
            $list[] = new PontoPartida();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $list[$cont]->idPontoChegada = $rs['idPontoChegada'];
            $list[$cont]->idPostoRodoviarioPartida = $rs['idPostoRodoviario'];
            $list[$cont]->nomePosto = $rs['nome'];
            $list[$cont]->nomePonto = $rs['nomePonto'];
            $list[$cont]->telefonePosto = $rs['telefone'];
            
//            var_dump($list[$cont]);
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