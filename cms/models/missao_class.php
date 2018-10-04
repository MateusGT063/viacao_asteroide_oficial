<?php


/*

Autor: Vinicius MAtias Rodrigues
Data de modificação: 27/03/2018
Controller: Cadastro

*/



class Missao{
    
    // Atributos da classe.
    public $idVersao;
    public $missao;
    public $visao;
    public $valores;
    public $ativo;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Insere o registro no BD.
    public function Insert($missao){
        
        $sql= "INSERT INTO pg_missao(missao, visao, valores, ativo) VALUES('".$missao->missao."','".$missao->visao."','".$missao->valores."',0);";
        
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
            echo("Erro ao inserir no banco de dados.");
        }
        
    }
    
    public function Delete($missao){
        
        $sql = "DELETE FROM pg_missao WHERE idVersao = ".$missao->idVersao;
       
//        echo($sql);
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
    
    public function Select(){
        
        $sql = "SELECT * FROM pg_missao ORDER BY idVersao DESC;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listMissao[] = new Missao();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listMissao[$cont]->idVersao = $rs['idVersao'];
            $listMissao[$cont]->missao = $rs['missao'];
            $listMissao[$cont]->visao = $rs['visao'];
            $listMissao[$cont]->valores = $rs['valores'];
            $listMissao[$cont]->ativo = $rs['ativo'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listMissao)){
            return $listMissao;
        }
        
    }
    
    public function SelectView(){
        
        $sql = "SELECT * FROM pg_missao WHERE ativo = 1;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listMissao[] = new Missao();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listMissao[$cont]->idVersao = $rs['idVersao'];
            $listMissao[$cont]->missao = $rs['missao'];
            $listMissao[$cont]->visao = $rs['visao'];
            $listMissao[$cont]->valores = $rs['valores'];
            $listMissao[$cont]->ativo = $rs['ativo'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listMissao)){
            return $listMissao;
            echo 'ola';
        }else{
            echo 'Não pegou...<br><br>'.$sql;
        }
        
    }
    
    public function SelectById($missao){
        
        $sql = "SELECT * FROM pg_missao WHERE idVersao = ".$missao->idVersao.";";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        if($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listMissao = new Missao();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listMissao->idVersao = $rs['idVersao'];
            $listMissao->missao = $rs['missao'];
            $listMissao->visao = $rs['visao'];
            $listMissao->valores = $rs['valores'];
            $listMissao->ativo = $rs['ativo'];
            
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listMissao)){
            return $listMissao;
        }
        
    }
    
    public function Update($missao){
        
        $sql = "UPDATE pg_missao SET missao = '".$missao->missao."', visao = '".$missao->visao."', valores = '".$missao->valores."' WHERE idVersao = ".$missao->idVersao.";";
        
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
            echo("Erro ao atualizar no banco de dados.");
        }
        
    }
    
    
   // Desativa um passageiro do BD
    public function Desativando($missao){
        
        $sql =" UPDATE pg_missao set ativo =0 WHERE idVersao =".$missao->idVersao;
        
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
    public function Ativando($missao){
        
        echo $missao->idVersao;
        
        $sql =" UPDATE  pg_missao set ativo =1 WHERE idVersao =".$missao->idVersao;
        
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
            echo("Erro ao Ativar no banco de dados.");
        }
        
    }
    
    
}


?>