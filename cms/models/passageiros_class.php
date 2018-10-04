<?php

/*

Autor: Eduardo Rocha
Data: 11/04/2018
Controller: Passageiros

*/

class Passageiros{
    
    // Atributos da classe.
    public $idPassagem;
    public $nome;
    public $destino;
    public $email;
    public $dtPartida;
    public $hrPartida;
    public $ativo;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Lista todos os registros do BD.
    public function Select(){
        
//        $sql = " select concat_ws(' ', c.nome, c.sobrenome) AS nome, d.destino, c.rg, c.email,c.telefone, d.hora_saida, d.data FROM tbl_cliente AS c inner join tbl_destino as d ON c.idCliente = d.idCliente ORDER BY d.data, d.hora_saida; ";
        
        //$sql ="SELECT * FROM tbl_passageiros ORDER BY data, hora";
        
        
        $sql="select * from passageiros_view;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listPassageiros[] = new Passageiros();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listPassageiros[$cont]->idPassagem = $rs['idPassagem'];
            $listPassageiros[$cont]->nome = $rs['nomeCompleto'];
            $listPassageiros[$cont]->destino = $rs['Destino'];
            $listPassageiros[$cont]->email = $rs['email'];
            $listPassageiros[$cont]->dtPartida = $rs['dtPartida'];
            $listPassageiros[$cont]->hrPartida = $rs['hrPartida'];
            $listPassageiros[$cont]->ativo = $rs['ativo'];
            
//            var_dump($listPassageiros);
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listPassageiros)){
            return $listPassageiros;
        }
        
    }
    
    // Deleta o registro no BD.
    public function Delete($passageiros){
        $sql = "DELETE FROM tbl_passagem WHERE idPassagem = ".$passageiros->idPassagem;
        
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
            echo($sql);
            echo("Erro ao deletar no banco de dados.");
        }
    }
    
    // Desativa um passageiro do BD
    public function Desativando($passageiros){
        
        $sql =" UPDATE passageiros_view set ativo =0 WHERE idPassagem =".$passageiros->idPassagem;
        
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
    public function Ativando($passageiros){
        
        $sql =" UPDATE passageiros_view set ativo =1 WHERE idPassagem =".$passageiros->idPassagem;
        
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