<?php

/*

Autor: Eduardo Rocha
Data: 11/04/2018
Controller: Passageiros

*/

class fichaManutencao{
    
    // Atributos da classe.
    public $tipoOnibus;
    public $idOnibus;
    public $placa;
    public $abertura;
    public $fechamento;
    public $quilometragem;
    public $item;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Lista todos os registros do BD.
    public function Select(){
        
//        $sql = " select concat_ws(' ', c.nome, c.sobrenome) AS nome, d.destino, c.rg, c.email,c.telefone, d.hora_saida, d.data FROM tbl_cliente AS c inner join tbl_destino as d ON c.idCliente = d.idCliente ORDER BY d.data, d.hora_saida; ";
        
        $sql ="SELECT * FROM manutencao_view;";
        
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listManutencao[] = new Manutencao();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listManutencao[$cont]->tipoOnibus = $rs['TipoOnibus'];
            $listManutencao[$cont]->placa = $rs['placa'];
            $listManutencao[$cont]->abertura = $rs['abertura'];
            $listManutencao[$cont]->fechamento = $rs['fechamento'];
            $listManutencao[$cont]->quilometragem = $rs['quilometragem'];
            $listManutencao[$cont]->item = $rs['item'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listManutencao)){
            return $listManutencao;
        }
        
    }
    
    public function Delete($manutecao){
        
        $sql = "DELETE FROM tbl_fichamanutencao WHERE idOnibus = ".$idOnibusExcluir;
        
        echo $sql;
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        if ($POD_conex->query($sql)){
            
            echo("<script> alert('O registro foi excluido =D'); </script>");
            
            
        }else{
            
            
            echo("<script> alert('Não tinha um registro com esse ID :('); </script>");
        }
        
        $conex->Desconectar();
        
    }
    
    
    
    
    
    
    
    
    public function SelectByIdFicha($manutecao){
        
        $sql= "SELECT idFichaManutncao FROM tbl_fichamanutencao WHERE idOnibus = ".$manutecao->idOnibus;
        
        echo $sql;
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        $select = $POD_conex->query($sql);
        
        if ($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $idFichaManutencaoRs = new Manutencao();

            // Guarda os dados de BD em cada indice do objeto criado.
            $idFichaManutencaoRs->idFichaManutencao = $rs['idFichaManutencao'];
            
        }else{
            echo("Erro ao buscar um registro do banco.");
        }
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($idFichaManutencaoRs)){
            return $idFichaManutencaoRs;
        }
        
        $conex->Desconectar();
        
    }
    
    
  
    
}

?>