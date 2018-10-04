<?php


/*

autor: Vinicius Matias Rodrigues.
data: 24/04/2018
controller: Adminidtração Frota.

Esta classe tem as funções que fazem
ações na tabela de AdmFrota.

*/

class AdmFrota{
    
    // Variáveis desta classe.
    public $idOnibus;
    public $idTipoOnibus;
    public $placa;
    public $fabricacao;
    public $descricao;
    public $ativo;
    
    // Construct da classe.
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Inserir registro.
    public function Insert($contatos){
        
        $sql = "INSERT INTO tbl_onibus(placa, idTipoOnibus, descricao, numFabricacao, ativo) VALUES('".$contatos->placa."', '".$contatos->idTipoOnibus."', '".$contatos->descricao."','".$contatos->fabricacao."', 1);";
        
        echo($sql);
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
           header('location:index.php');
           
            // Fecha a conexão com o BD.
            // Fecha a conexão com o BD.
            $conex->Desconectar();
        }else{
            echo("<br><br>Erro ao inserir no banco.<br><br>".$sql);
        }
        
    }
    
  public function Select(){
      
      $sql = "select oni.idOnibus, oni.placa, oni.numFabricacao, tipo.tipo, oni.descricao, oni.ativo
      from tbl_tipoonibus as tipo inner join tbl_onibus as oni on oni.idTipoOnibus = tipo.idTipoOnibus ORDER BY idOnibus DESC";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
      
      while($rs = $select->fetch(PDO::FETCH_ASSOC)){
          
          $listadmFrota[] = new admFrota();
          
          $listadmFrota[$cont]->idOnibus = $rs['idOnibus'];
          $listadmFrota[$cont]->placa = $rs['placa'];
          $listadmFrota[$cont]->idTipoOnibus = $rs['tipo'];
          $listadmFrota[$cont]->descricao = $rs['descricao'];
          $listadmFrota[$cont]->fabricacao = $rs['numFabricacao'];
          $listadmFrota[$cont]->ativo = $rs['ativo'];
          
//          var_dump($listadmFrota[$cont]->placa);
          $cont += 1 ;
          
      }
        
      if (isset($listadmFrota)){
          return $listadmFrota; 
      }
  }
    
    public function Delete($contato){
        
        $sql = "DELETE FROM tbl_onibus WHERE idOnibus = ".$contato->idOnibus;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            header('location:index.php');
            
            // Fecha a conexão com o BD.
            $conex->Desconectar();
        }else{
            echo("Erro ao deletar no banco de dados.");
            echo($sql);
        }
        
    }
    
    // Desativa um passageiro do BD
    public function Desativando($contato){
        
        $sql =" UPDATE tbl_onibus set ativo =0 WHERE idOnibus =".$contato->idOnibus;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            header('location:index.php');
            
            // Fecha a conexão com o BD.
            $conex->Desconectar();
        }else{
            echo($sql);
            echo("Erro ao Desativar no banco de dados.");
        }
        
    }
    
    // Ativa um passageiro do BD
    public function Ativando($contato){
        
        $sql =" UPDATE tbl_onibus set ativo =1 WHERE idOnibus =".$contato->idOnibus;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            header('location:index.php');
            
            // Fecha a conexão com o BD.
            $conex->Desconectar();
        }else{
            echo($sql);
            echo("Erro ao Desativar no banco de dados.");
        }
        
    }
    
    
    
     // Buscar registros.
    public function SelectById($contato){
        
        $sql = "SELECT * FROM tbl_onibus WHERE idOnibus = ".$contato->idOnibus;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        $select = $POD_conex->query($sql);
        
        if ($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listadmFrota = new admFrota();

            // Guarda os dados de BD em cada indice do objeto criado.
            $listadmFrota->idOnibus = $rs['idOnibus'];
            $listadmFrota->placa = $rs['placa'];
            $listadmFrota->idTipoOnibus = $rs['idTipoOnibus'];
            $listadmFrota->descricao = $rs['descricao'];
            $listadmFrota->fabricacao = $rs['numFabricacao'];
            $listadmFrota->ativo = $rs['ativo'];
            
        }else{
            echo("Erro ao buscar um registro do banco.");
        }
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listadmFrota)){
            return $listadmFrota;
        }
        
        $conex->Desconectar();
        
    }
    
    // Atualizar registro.
    public function Update($contato){
        
        $sql = "UPDATE tbl_onibus SET placa = '".$contato->placa."', idTipoOnibus = '".$contato->idTipoOnibus."', descricao = '".$contato->descricao."', numFabricacao = '".$contato->fabricacao."' WHERE idOnibus = ".$contato->idOnibus;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            header('location:index.php');
            
            // Fecha a conexão com o BD.
            $conex->Desconectar();
        }else{
            echo("Erro ao atualizar no banco.");
        }
    
    }
}
?>