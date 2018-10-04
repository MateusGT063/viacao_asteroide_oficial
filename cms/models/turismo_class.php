<?php

/*

Autor: Gabriel de Melo Marcondes
Data: 31/03/2018
Controller: Pontos turisticos

*/

class Turismo{
    
    // Atributos da classe.
    public $idPontoTuristico;
    public $epoca;
    public $idEpoca;
    public $imagem;
    public $descricao;
    public $ativo;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Insere o registro no BD.
    public static function Insert($turismo){
        
        $sql = "INSERT INTO pg_pontoturistico(idEpoca, imagem, descricao, ativo)
        VALUES(".$turismo->idEpoca.", '".$turismo->imagem."', '".$turismo->descricao."', 0);";
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        echo("Salvo no banco.");
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            header('location:index.php');
            
            // Fecha a conexão com o BD.
            $conex->Desconectar();
        }else{
            echo("Erro ao inserir no banco.");
        }
        
    }
    
    // Atualiza o registro no BD.
    public function Update($turismo){
        
        $sql = "UPDATE pg_pontoturistico SET idEpoca = ".$turismo->idEpoca.", imagem = '".$turismo->imagem."', descricao = '".$turismo->descricao."' WHERE idPontoTuristico = ".$turismo->idPontoTuristico;
        
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
    
    // Deleta o registro no BD.
    public function Delete($turismo){
        $sql = "DELETE FROM pg_pontoturistico WHERE idPontoTuristico = ".$turismo->idPontoTuristico;
        
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
        }
    }
    
    // Desativa um passageiro do BD
    public function Desativando($turismo){
        
        $sql =" UPDATE pg_pontoturistico set ativo =0 WHERE idPontoTuristico = ".$turismo->idPontoTuristico;
        
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
    public function Ativando($turismo){
        
        $sql =" UPDATE pg_pontoturistico set ativo =1 WHERE idPontoTuristico = ".$turismo->idPontoTuristico;
        
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
    
    // Lista todos os registros do BD.
    public function Select(){
        
        $sql = "SELECT t.idPontoTuristico, e.epoca, t.idEpoca, t.imagem, t.descricao, t.ativo FROM pg_pontoturistico AS t INNER JOIN tbl_epoca AS e ON t.idEpoca = e.idEpoca ORDER BY t.idPontoTuristico DESC;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listTurismo[] = new Turismo();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listTurismo[$cont]->idPontoTuristico = $rs['idPontoTuristico'];
            $listTurismo[$cont]->epoca = $rs['epoca'];
            $listTurismo[$cont]->idEpoca = $rs['idEpoca'];
            $listTurismo[$cont]->imagem = $rs['imagem'];
            $listTurismo[$cont]->descricao = $rs['descricao'];
            $listTurismo[$cont]->ativo = $rs['ativo'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listTurismo)){
            return $listTurismo;
        }
        
    }
    
    public function SelectView(){
        
        $sql = "SELECT p.* , e.epoca FROM pg_pontoturistico  as p INNER JOIN tbl_epoca as e ON p.idEpoca = e.idEpoca WHERE p.ativo = 1  group by idEpoca ORDER BY idEpoca ASC;";
        
//        $sql="SELECT p.* , e.epoca FROM pg_pontoturistico  as p
//INNER JOIN tbl_epoca as e
//ON p.idEpoca = e.idEpoca 
//WHERE p.ativo = 1 
//ORDER BY idEpoca;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listTurismo[] = new Turismo();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listTurismo[$cont]->idPontoTuristico = $rs['idPontoTuristico'];
            $listTurismo[$cont]->epoca = $rs['idEpoca'];
            $listTurismo[$cont]->idEpoca = $rs['idEpoca'];
            $listTurismo[$cont]->imagem = $rs['imagem'];
            $listTurismo[$cont]->descricao = $rs['descricao'];
            $listTurismo[$cont]->ativo = $rs['ativo'];
            $listTurismo[$cont]->epoca = $rs['epoca'];
            
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listTurismo)){
            return $listTurismo;
            echo 'Funfo';
        }else{
            echo 'Funfo Não Tiw'.$sql;
        }
        
    }    
    
    // Busca um registro específico no BD.
    public function SelectById($turismo){
        
        $sql = "SELECT * FROM pg_pontoturistico WHERE idPontoTuristico = ".$turismo->idPontoTuristico;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        $select = $POD_conex->query($sql);
        
        if ($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listTurismo = new Turismo();

            // Guarda os dados de BD em cada indice do objeto criado.
            $listTurismo->idPontoTuristico = $rs['idPontoTuristico'];
            $listTurismo->idEpoca = $rs['idEpoca'];
            $listTurismo->imagem = $rs['imagem'];
            $listTurismo->descricao = $rs['descricao'];
            $listTurismo->ativo = $rs['ativo'];
        }else{
            echo("Erro ao buscar um registro do banco.");
        }
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listTurismo)){
            return $listTurismo;
        }
        
        $conex->Desconectar();
        
    }
    
}

?>