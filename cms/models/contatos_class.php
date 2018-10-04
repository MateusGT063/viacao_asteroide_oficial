<?php

/*

autor: Gabriel de Melo Marcondes.
data: 03/04/2018
controller: Dúvidas frequentes.

*/

class Contato{
    
    // Variáveis desta classe.
    public $id;
    public $pergunta;
    public $resposta;
    
    // Construct da classe.
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Inserir registro.
    public function Insert($contatos){
        
        $sql = "INSERT INTO tbl_duvida(pergunta, resposta) VALUES('".$contatos->pergunta."', '".$contatos->resposta."');";
        
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
        
    }
    
    // Deletar registro.
    public function Delete($contatos){
        
        $sql = "DELETE FROM tbl_duvida WHERE id =".$contatos->id;
        
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
            echo("Erro ao deletar do banco de dados.");
        }
        
    }
    
    // Listar registro.
    public function Select(){
        
        $sql = "SELECT * FROM tbl_duvida";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listContatos[] = new Contato();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listContatos[$cont]->id = $rs['id'];
            $listContatos[$cont]->pergunta = $rs['pergunta'];
            $listContatos[$cont]->resposta = $rs['resposta'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listContatos)){
            return $listContatos;
        }else{
            echo('Erro ao trazer todos os registros do banco');
        }
        
    }
    
    // Buscar registros.
    public function SelectById($contatos){
        
        $sql = "SELECT * FROM tbl_duvida WHERE id = ".$contatos->id;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        $select = $POD_conex->query($sql);
        
        if ($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listContatos = new Contato();

            // Guarda os dados de BD em cada indice do objeto criado.
            $listContatos->id = $rs['id'];
            $listContatos->pergunta = $rs['pergunta'];
            $listContatos->resposta = $rs['resposta'];
            
        }else{
            echo("Erro ao buscar um registro do banco.");
        }
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listContatos)){
            return $listContatos;
        }
        
        $conex->Desconectar();
        
    }
    
    
    
    // Atualizar registro.
    public function Update($contatos){
        
        $sql = "UPDATE tbl_duvida SET pergunta = '".$contatos->pergunta."', resposta = '".$contatos->resposta."' WHERE id = ".$contatos->id;
        
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