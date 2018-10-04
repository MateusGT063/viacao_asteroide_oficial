<?php
/*

Autor: Vinicius Matias Rodrigues
Data de modificação: 06/04/2018
Controller: Frota

*/


class Frota{


 // Atributos da classe.
    public $id;
    public $imagem;
    public $descricao;
    public $ativo;
    public $idTipoOnibus;
//    public $tipo;
    
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
     // Insere o registro no BD.
    public static  function Insert($frota){
        
        $sql = "INSERT INTO pg_nossafrota(imagem, descricao, idTipoOnibus, ativo)
        VALUES('".$frota->imagem."','".$frota->descricao."',".$frota->idTipoOnibus.", 0);";
        
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
            echo("Erro ao inserir no banco mano.");
        }
        
        
    }
// Lista todos os registros do BD.
    public function Select(){
        
        $sql ="SELECT nf.*, tob.tipo FROM pg_nossafrota AS nf INNER JOIN tbl_tipoonibus AS tob ON nf.idTipoOnibus = tob.idTipoOnibus ORDER BY id DESC;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listFrota[] = new Frota();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listFrota[$cont]->id = $rs['id'];
            $listFrota[$cont]->imagem = $rs['imagem'];
            $listFrota[$cont]->descricao = $rs['descricao'];
            $listFrota[$cont]->idTipoOnibus = $rs['idTipoOnibus'];
            $listFrota[$cont]->tipo = $rs['tipo'];
            $listFrota[$cont]->ativo = $rs['ativo'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listFrota)){
            return $listFrota;
        }
        
    }
    // Lista o registro que está ativo e do tipo de onibus certo.
    public function SelectView($idTipoOnibus){
        
        $sql ="SELECT * FROM pg_nossafrota WHERE idTipoOnibus = ".$idTipoOnibus." AND ativo = 1 LIMIT 1;";
        
//        echo($sql);
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        if($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listFrota = new Frota();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listFrota->id = $rs['id'];
            $listFrota->imagem = $rs['imagem'];
            $listFrota->descricao = $rs['descricao'];
            $listFrota->idTipoOnibus = $rs['idTipoOnibus'];
            $listFrota->ativo = $rs['ativo'];
            
            $cont+=1;
        }else{
            return 'nada';
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listFrota)){
            return $listFrota;
        }
        
    }

 // Deleta o registro no BD.
    public function Delete($frota){
        $sql = "DELETE FROM pg_nossafrota WHERE id = ".$frota->id;
        
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

    
     // Busca um registro específico no BD.
    public function SelectById($frota){
        
        $sql = "SELECT * FROM pg_nossafrota WHERE id = ".$frota->id;
        
//        echo($sql);
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        $select = $POD_conex->query($sql);
        
        if ($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listFrota = new Frota();

        
            // Guarda os dados de BD em cada indice do objeto criado.
            $listFrota->id = $rs['id'];
            $listFrota->imagem = $rs['imagem'];
            $listFrota->descricao = $rs['descricao'];
            $listFrota->idTipoOnibus = $rs['idTipoOnibus'];
            $listFrota->ativo = $rs['ativo'];
        }else{
            echo("Erro ao buscar um registro do banco.");
        }
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listFrota)){
            return $listFrota;
        }
        
        $conex->Desconectar();
        
    }
        // Atualiza o registro no BD.
    public function Update($frota){
        
        $sql = "UPDATE pg_nossafrota SET imagem = '".$frota->imagem."', descricao = '".$frota->descricao."', idTipoOnibus = ".$frota->idTipoOnibus." WHERE id = ".$frota->id.";";
        
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
            echo("Erro ao atualizar no banco.");
        }
        
    }
    
    
    // Desativa um passageiro do BD
    public function Desativando($frota){
        
        $sql =" UPDATE pg_nossafrota set ativo =0 WHERE id =".$frota->id;
        
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
    public function Ativando($frota){
        
        $sql =" UPDATE pg_nossafrota set ativo =1 WHERE id =".$frota->id;
        
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
    

    
}




?>