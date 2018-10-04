<?php

/*

autor: Gabriel de Melo Marcondes.
data: 10/04/2018
controller: tipo de ônibus.

Esta classe tem todas as funções que
fazem ações na tabela de tipo
de ônibus.

*/

class TipoOnibus{
    
    // Variáveis desta classe.
    public $idTipoOnibus;
    public $tipo;
    public $qntLugares;
    public $andares;
    
    public function __construct(){
        require_once("bd_class.php");
    }
    
    public function Select(){
        
        $sql = "SELECT * FROM tbl_tipoonibus;";
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Destino.
            $listTipoOnibus[] = new TipoOnibus();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listTipoOnibus[$cont]->idTipoOnibus = $rs['idTipoOnibus'];
            $listTipoOnibus[$cont]->tipo = $rs['tipo'];
            $listTipoOnibus[$cont]->qntLugares = $rs['qntLugares'];
            $listTipoOnibus[$cont]->andares = $rs['andares'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listTipoOnibus)){
            return $listTipoOnibus;
        }
        
    }
    
}

?>