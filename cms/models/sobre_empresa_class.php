<?php 

/**

Autor: Mateus Silva de Abreu
Data: 12/04/2018
Model: Sobre a Empresa

**/

class Sobre_empresa {
    //atributos da classe
    public $idVersao;
    public $imagemSobre;
    public $textoSobre;
    public $ativo;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    //Insere o registro no Banco
    public static function Insert($sobre_empresa){
        
        $sql = "INSERT INTO pg_quemsomos(imagemSobre, textoSobre, ativo)
        VALUES('".$sobre_empresa->imagemSobre."', '".$sobre_empresa->textoSobre."', 0);";
        
//        echo ($sql);
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
            echo("Erro ao inserir no banco.");
        }
//        
        
    }
    
     // Desativa um passageiro do BD
    public function Desativando($sobre_empresa){
        
        $sql =" UPDATE pg_quemsomos set ativo =0 WHERE idVersao =".$sobre_empresa->idVersao;
        
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
    public function Ativando($sobre_empresa){
        
        $sql =" UPDATE pg_quemsomos set ativo =1 WHERE idVersao =".$sobre_empresa->idVersao;
        
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
    

    
    public function Select(){
        
//        $sql = "SELECT * FROM pg_quemsomos";
        
        $sql = "SELECT * FROM pg_quemsomos group by idVersao ORDER BY idVersao ASC;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listSobre_empresa[] = new Sobre_empresa();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listSobre_empresa[$cont]->idVersao = $rs['idVersao'];
            $listSobre_empresa[$cont]->imagemSobre = $rs['imagemSobre'];
            $listSobre_empresa[$cont]->textoSobre = $rs['textoSobre'];
            $listSobre_empresa[$cont]->ativo = $rs['ativo'];
            
//            var_dump($listSobre_empresa[$cont]);
            
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listSobre_empresa)){
            return $listSobre_empresa;
        }    
        
    } 
    
    public function SelectView(){
        
//        $sql = "SELECT * FROM pg_quemsomos";
        
        $sql = "SELECT * FROM pg_quemsomos WHERE ativo = 1;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listSobre_empresa[] = new Sobre_empresa();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listSobre_empresa[$cont]->idVersao = $rs['idVersao'];
            $listSobre_empresa[$cont]->imagemSobre = $rs['imagemSobre'];
            $listSobre_empresa[$cont]->textoSobre = $rs['textoSobre'];
            $listSobre_empresa[$cont]->ativo = $rs['ativo'];
            
//            var_dump($listSobre_empresa[$cont]);
            
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listSobre_empresa)){
            return $listSobre_empresa;
            echo'Eea MAn';
        }    
        
    }
    
    // Deleta o registro no BD.
    public function Delete($sobre_empresa){
        
        $sql = "DELETE FROM pg_quemsomos WHERE idVersao = ".$sobre_empresa->idVersao;
        
        
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
            echo("Erro ao deletar no banco de dados.");
        }
    }    
    
 // Busca um registro específico no BD.
    public function SelectById($sobre_empresa){
        
        $sql = "SELECT * FROM pg_quemsomos WHERE idVersao = ".$sobre_empresa->idVersao;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        $select = $POD_conex->query($sql);
        
        if ($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listSobre_empresa = new Sobre_empresa();

            // Guarda os dados de BD em cada indice do objeto criado.
            
            $listSobre_empresa->idVersao = $rs['idVersao'];
            $listSobre_empresa->imagemSobre = $rs['imagemSobre'];
            $listSobre_empresa->textoSobre = $rs['textoSobre'];
            $listSobre_empresa->ativo = $rs['ativo'];
            
            
        }else{
            echo("Erro ao buscar um registro do banco.");
        }
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listSobre_empresa)){
            return $listSobre_empresa;
        }
        
        $conex->Desconectar();
        
    }
    
    public function Update($sobre_empresa){
        
        $sql = "UPDATE pg_quemsomos SET imagemSobre = '".$sobre_empresa->imagemSobre."',
        textoSobre = '".$sobre_empresa->textoSobre."' WHERE idVersao = ".$sobre_empresa->idVersao;
        
//        echo($sql);
//        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            header("location:index.php");
        }else{
            echo 'Falha ao atualizar no banco.<br><br>'.$sql;
        }
        
    }}

?>