<?php

/*

Autor: Eduardo Rocha
Data: 17/04/2018
Controller: Passagem

*/

class Passagem{
    
    // Atributos da classe.
    public $destino;
    public $dataEmbarque;
    public $horaEmbarque;
    public $tipoOnibus;
    public $idviagem;
    public $idPassagem;
    public $idCliente;
    public $nomeCompleto;
    public $rg;
    public $telefone;
    public $email;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Lista todos os registros do BD.
    public function Select(){
        
//        $sql = " select concat_ws(' ', c.nome, c.sobrenome) AS nome, d.destino, c.rg, c.email,c.telefone, d.hora_saida, d.data FROM tbl_cliente AS c inner join tbl_destino as d ON c.idCliente = d.idCliente ORDER BY d.data, d.hora_saida; ";
         
        $sql ="SELECT * FROM passagem_view  group by idViagem order by idViagem desc";
        
//        concat_ws(cid.nomeCidade, des.nomeCidade)
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listPassageiros[] = new Passagem();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listPassageiros[$cont]->idViagem= $rs['idViagem'];
            $listPassageiros[$cont]->destino= $rs['destinos'];
            $listPassageiros[$cont]->dataEmbarque= $rs['dataEmbarque'];
            $listPassageiros[$cont]->horaEmbarque= $rs['horaEmbarque'];
            $listPassageiros[$cont]->tipoOnibus= $rs['tipoOnibus'];
            
//            var_dump($listPassagem[$cont]);
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listPassageiros)){
            return $listPassageiros;
        }
        
    }
    
    // Lista todos os registros do BD.
    public function SelectView($sqlGeral){
        
//        $sql = " select concat_ws(' ', c.nome, c.sobrenome) AS nome, d.destino, c.rg, c.email,c.telefone, d.hora_saida, d.data FROM tbl_cliente AS c inner join tbl_destino as d ON c.idCliente = d.idCliente ORDER BY d.data, d.hora_saida; ";
        
//        concat_ws(cid.nomeCidade, des.nomeCidade)
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sqlGeral);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listPassageiros[] = new Passagem();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listPassageiros->idViagem= $rs['idViagem'];
            $listPassageiros->destino= $rs['destinos'];
            $listPassageiros->dataEmbarque= $rs['dataEmbarque'];
            $listPassageiros->horaEmbarque= $rs['horaEmbarque'];
            $listPassageiros->tipoOnibus= $rs['tipoOnibus'];
            
//            var_dump($listPassagem[$cont]);
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listPassageiros)){
            return $listPassageiros;
        }
        
    }
    
    public function SelectPassageiros($idViagem){
        
//        $sql = " select concat_ws(' ', c.nome, c.sobrenome) AS nome, d.destino, c.rg, c.email,c.telefone, d.hora_saida, d.data FROM tbl_cliente AS c inner join tbl_destino as d ON c.idCliente = d.idCliente ORDER BY d.data, d.hora_saida; ";
         
        $sql =" SELECT * FROM passagem_view WHERE idViagem = $idViagem ";
        
//        concat_ws(cid.nomeCidade, des.nomeCidade)
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listPassageiros1[] = new Passagem();
            
//             Guarda os dados de BD em cada indice do objeto criado.
            $listPassageiros1[$cont]->idViagem= $rs['idViagem'];
            $listPassageiros1[$cont]->destino= $rs['destinos'];
            $listPassageiros1[$cont]->dataEmbarque= $rs['dataEmbarque'];
            $listPassageiros1[$cont]->horaEmbarque= $rs['horaEmbarque'];
            $listPassageiros1[$cont]->tipoOnibus= $rs['tipoOnibus'];
            $listPassageiros1[$cont]->idPassagem= $rs['idPassagem'];
            $listPassageiros1[$cont]->idCliente= $rs['idCliente'];
            $listPassageiros1[$cont]->nomeCompleto= $rs['nomeCompleto'];
            $listPassageiros1[$cont]->rg= $rs['rg'];
            $listPassageiros1[$cont]->telefone= $rs['telefone'];
            $listPassageiros1[$cont]->email= $rs['email'];
            
            
//            var_dump($listPassageiros1[$cont]);
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listPassageiros1)){
            return $listPassageiros1;
        }
        
    }
     
}

?>