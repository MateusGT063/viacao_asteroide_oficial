<?php

/*

Autor: Gabriel de Melo Marcondes
Data: 31/03/2018
Controller: Pontos turisticos

*/

class Dicas{
    
    // Atributos da classe.
    public $idDicas;
    public $dica;
    public $imagem;
    public $descricao;
    public $ativo;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Insere o registro no BD.
    public static function Insert($dicas){
        
        $sql = "INSERT INTO tbl_dicas(nomeLugar, descricaoDica, imgDica, ativo)
        VALUES('".$dicas->dica."', '".$dicas->descricao."', '".$dicas->imagem."', 0);";
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            
            if(isset($_GET['pag'])){
                header('location:../views/cabecalho.php?href=dicas/dicas_view.php');
            }else{
                header('location:index.php');
            }
            
            // Fecha a conexão com o BD.
            $conex->Desconectar();
        }else{
            echo("Erro ao inserir no banco mano.");
        }
        
    }
    
    // Atualizar registro.
    public function Update($dicas){
        
        $sql = "UPDATE tbl_dicas SET nomeLugar = '".$dicas->dica."', descricaoDica = '".$dicas->descricao."', imgDica = '".$dicas->imagem."' WHERE idDicas =".$dicas->idDicas;
        
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
            echo("Erro ao atualizar no banco mano.");
        }
        
    }
    
    // Deleta o registro no BD.
    public function Delete($dicas){
        
        $sql = "DELETE FROM tbl_dicas WHERE idDicas = ".$dicas->idDicas;
        
        
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
    
    // Lista todos os registros do BD.
    public function Select(){
        
        $sql = " SELECT * FROM tbl_dicas";
        
//        $sql = "SELECT t.idPontoTuristico, e.epoca, t.idEpoca, t.imagem, t.descricao, t.ativo FROM pg_pontoturistico AS t INNER JOIN tbl_epoca AS e ON t.idEpoca = e.idEpoca ORDER BY t.idPontoTuristico DESC;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listDicas[] = new Dicas();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listDicas[$cont]->idDicas = $rs['idDicas'];
            $listDicas[$cont]->dica = $rs['nomeLugar'];
            $listDicas[$cont]->imagem = $rs['imgDica'];
            $listDicas[$cont]->descricao = $rs['descricaoDica'];
            $listDicas[$cont]->ativo = $rs['ativo'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listDicas)){
            return $listDicas;
        }
        
    }    // Lista todos os registros do BD.
    public function SelectView(){
        
        $sql = " SELECT * FROM tbl_dicas WHERE ativo = 1";
        
//        $sql = "SELECT t.idPontoTuristico, e.epoca, t.idEpoca, t.imagem, t.descricao, t.ativo FROM pg_pontoturistico AS t INNER JOIN tbl_epoca AS e ON t.idEpoca = e.idEpoca ORDER BY t.idPontoTuristico DESC;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listDicas[] = new Dicas();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listDicas[$cont]->idDicas = $rs['idDicas'];
            $listDicas[$cont]->dica = $rs['nomeLugar'];
            $listDicas[$cont]->imagem = $rs['imgDica'];
            $listDicas[$cont]->descricao = $rs['descricaoDica'];
            $listDicas[$cont]->ativo = $rs['ativo'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listDicas)){
            return $listDicas;
        }
        
    }
    
    // Busca um registro específico no BD.
    public function SelectById($dicas){
        
        $sql = "SELECT * FROM tbl_dicas WHERE idDicas = ".$dicas->idDicas;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        $select = $POD_conex->query($sql);
        
        if ($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listDicas = new Dicas();

            // Guarda os dados de BD em cada indice do objeto criado.
            $listDicas->idDicas = $rs['idDicas'];
            $listDicas->dica = $rs['nomeLugar'];
            $listDicas->imagem = $rs['imgDica'];
            $listDicas->descricao = $rs['descricaoDica'];
            $listDicas->ativo = $rs['ativo'];
            
        }else{
            echo("Erro ao buscar um registro do banco.");
        }
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listDicas)){
            return $listDicas;
        }
        
        $conex->Desconectar();
        
    }
    
    
    // Desativa um passageiro do BD
    public function Desativando($dicas){
        
        $sql =" UPDATE tbl_dicas set ativo =0 WHERE idDicas =".$dicas->idDicas;
        
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
    public function Ativando($dicas){
        
        $sql =" UPDATE tbl_dicas set ativo =1 WHERE idDicas =".$dicas->idDicas;
        
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