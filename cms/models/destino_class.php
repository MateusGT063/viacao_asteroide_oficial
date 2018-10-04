<?php

/*

autor: Gabriel de Melo Marcondes.
data: 09/04/2018 ... Data de modificação: 02/05/2018
controller: Destinos.

Esta classe tem as funções que fazem
ações na tabela de destinos.

*/



class Destino{
    
    // Variáveis desta classe.
    public $idViagem;
    public $data;
    public $hora_partida;
    public $hora_chegada;
    public $descricao;
    public $tamanhoRota;
    public $idPontoPartida;
    public $idPontoChegada;
    public $idOnibus;
    public $idMotorista;
    public $idEpoca;
    public $finalizada;
    public $imagem1;
    public $imagem2;
    public $codCidade;
    public $idDestino;
    public $valor;
    public $cidade;
    public $tipo;
    public $placa;
    public $acentos;
    public $parada;
    public $idOnbs;
  
    
    public function __construct(){
        require_once("bd_class.php");
    }
    
    public function Insert($destino){
        
        $sql = "INSERT INTO tbl_viagem(dtPartida, hrPartida, hrChegada, descricao, tamanhoRota, idPontoPartida, idPontoChegada, idOnibus, idMotorista, idEpoca, finalizada, imagem1, imagem2, codCidade, idDestino,valor)
        
        VALUES
        ('".$destino->data."', '".$destino->hora_partida."', '".$destino->hora_chegada."', '".$destino->descricao."', ".$destino->tamanhoRota.", ".$destino->idPontoPartida.", ".$destino->idPontoChegada.", ".$destino->idOnibus.", 1, ".$destino->idEpoca.", 0, '".$destino->imagem1."', '".$destino->imagem2."', '".$destino->codCidade."', '".$destino->idDestino."','".$destino->valor."');";
        
//        echo($sql);
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            header('location:index.php');
//            echo '!!!!!!!!!!!!!!!!!!   Salvo com sucesso   !!!!!!!!!!!!!!!!!!';
            
            // Fecha a conexão com o BD.
            $conex->Desconectar();
        }else{
            echo("Erro ao inserir no banco.<br>");
            echo($sql);
        }
        
    }
    

    
  public function Select(){
      
      
      
      $sql="select * from viagens_view ORDER BY RAND() limit 4";
          
        //Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Destino.
            $listDestino[] = new Destino();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listDestino[$cont]->idViagem = $rs['idViagem'];
            $listDestino[$cont]->destino = $rs['Destino'];
            $listDestino[$cont]->imagem1 = $rs['primairaImagem'];
            $listDestino[$cont]->imagem2 = $rs['segundaImagem'];
//            $listDestino[$cont]->data = $rs['dtPartida'];
//            $listDestino[$cont]->hora_partida = $rs['hrPartida'];
//            $listDestino[$cont]->hora_chegada = $rs['hrChegada'];
            $listDestino[$cont]->descricao = $rs['descricao'];
            $listDestino[$cont]->valor = $rs['valor'];
            
//            var_dump( $listDestino);
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna a lista se existir dados no BD.
        if(isset($listDestino)){
            return $listDestino;
        }
        
    }
    
       // Lista todos os registros do BD.
    public function SelectViews($sqlGeral){
        
//        concat_ws(cid.nomeCidade, des.nomeCidade)
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sqlGeral);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listDestino[] = new Destino();
            
            // Guarda os dados de BD em cada indice do objeto criado.
             // Guarda os dados de BD em cada indice do objeto criado.
            $listDestino[$cont]->idDestino = $rs['destino'];
            $listDestino[$cont]->imagem1 = $rs['imagem1'];
            $listDestino[$cont]->imagem2 = $rs['imagem2'];
//            $listDestino[$cont]->data = $rs['dtPartida'];
//            $listDestino[$cont]->hora_partida = $rs['hrPartida'];
//            $listDestino[$cont]->hora_chegada = $rs['hrChegada'];
            $listDestino[$cont]->descricao = $rs['descricao'];
            $listDestino[$cont]->valor = $rs['valor'];
            
//            var_dump($listPassagem[$cont]);
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listDestino)){
            return $listDestino;
        }
        
    }
    
  public function SelectTurismo(){
      
      $sql="select * from viagens_view limit 3 ";
          
        //Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Destino.
            $listDestino[] = new Destino();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listDestino[$cont]->destino = $rs['Destino'];
            $listDestino[$cont]->imagem1 = $rs['primairaImagem'];
            $listDestino[$cont]->imagem2 = $rs['segundaImagem'];
//            $listDestino[$cont]->data = $rs['dtPartida'];
//            $listDestino[$cont]->hora_partida = $rs['hrPartida'];
//            $listDestino[$cont]->hora_chegada = $rs['hrChegada'];
            $listDestino[$cont]->descricao = $rs['descricao'];
            $listDestino[$cont]->valor = $rs['valor'];
            
//            var_dump( $listDestino);
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna a lista se existir dados no BD.
        if(isset($listDestino)){
            return $listDestino;
        }
        
    }
        
    
  public function SelectVendas(){
      
      $sql="select * from viagens_view";
          
        //Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Destino.
            $listDestino[] = new Destino();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listDestino[$cont]->destino = $rs['Destino'];
            $listDestino[$cont]->imagem1 = $rs['primairaImagem'];
            $listDestino[$cont]->imagem2 = $rs['segundaImagem'];
//            $listDestino[$cont]->data = $rs['dtPartida'];
//            $listDestino[$cont]->hora_partida = $rs['hrPartida'];
//            $listDestino[$cont]->hora_chegada = $rs['hrChegada'];
            $listDestino[$cont]->descricao = $rs['descricao'];
            $listDestino[$cont]->valor = $rs['valor'];
            
//            var_dump( $listDestino);
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna a lista se existir dados no BD.
        if(isset($listDestino)){
            return $listDestino;
        }
        
    }    
    
    public function SelectView(){
        
        $sql ="select * from viagens_view";
        
        
        //Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Destino.
            $listDestino[] = new Destino();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listDestino[$cont]->idViagem = $rs['idViagem'];
            $listDestino[$cont]->destino = $rs['Destino'];
            $listDestino[$cont]->imagem1 = $rs['primairaImagem'];
            $listDestino[$cont]->imagem2 = $rs['segundaImagem'];
            $listDestino[$cont]->data = $rs['dtPartida'];
            $listDestino[$cont]->hora_partida = $rs['hrPartida'];
            $listDestino[$cont]->hora_chegada = $rs['hrChegada'];
            $listDestino[$cont]->descricao = $rs['descricao'];
            $listDestino[$cont]->valor = $rs['valor'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna a lista se existir dados no BD.
        if(isset($listDestino)){
            return $listDestino;
        }
        
    }
    
    
    
    
    
    
    
    
    // Busca um registro específico no BD.
    public function SelectById($destino){
        
        $sql = "SELECT * FROM destinos_view WHERE idViagem = ".$destino->idViagem;
        
//        echo($sql);
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        $select = $POD_conex->query($sql);
        
        if ($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listDestino = new Destino();

            // Guarda os dados de BD em cada indice do objeto criado.
            $listDestino->idViagem = $rs['idViagem'];
//            $listDestino->destino = $rs['Destino'];
            $listDestino->imagem1 = $rs['primairaImagem'];
            $listDestino->imagem2 = $rs['segundaImagem'];
            $listDestino->data = $rs['dtPartida'];
            $listDestino->hora_partida = $rs['hrPartida'];
            $listDestino->hora_chegada = $rs['hrChegada'];
            $listDestino->descricao = $rs['descricao'];
            /* Bem feito !*/
            $listDestino->tamanhoRota = $rs['tamanhoRota'];
            $listDestino->idPontoPartida = $rs['idPontoPartida'];
            $listDestino->idPontoChegada = $rs['idPontoChegada'];
            $listDestino->idOnibus = $rs['idOnibus'];
            $listDestino->idMotorista = $rs['idMotorista'];
            $listDestino->idDestino = $rs['destino'];
            $listDestino->codCidade = $rs['origem'];
            /**/
            $listDestino->idEpoca = $rs['idEpoca'];
            $listDestino->valor = $rs['valor'];
            
//            var_dump($listDestino);
            
        }else{
            echo("Erro ao buscar um registro do banco.");
        }
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listDestino)){
            return $listDestino;
        }
        
        $conex->Desconectar();
        
    }
    
    
    // Deleta o registro no BD.
    public function Delete($destino){
        $sql = "DELETE FROM destinos_view WHERE idViagem = ".$destino->idViagem;
        
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
    
    
    
    public function nhaaaa($destino){
        
        $sql ="select * from viagens_view WHERE idViagem = ".$destino->idViagem;
        
//        echo($sql);
        //Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Destino.
            $listDestino[] = new Destino();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listDestino[$cont]->idViagem = $rs['idViagem'];
            $listDestino[$cont]->destino = $rs['Destino'];
            $listDestino[$cont]->imagem1 = $rs['primairaImagem'];
            $listDestino[$cont]->imagem2 = $rs['segundaImagem'];
            $listDestino[$cont]->data = $rs['dtPartida'];
            $listDestino[$cont]->hora_partida = $rs['hrPartida'];
            $listDestino[$cont]->hora_chegada = $rs['hrChegada'];
            $listDestino[$cont]->descricao = $rs['descricao'];
            $listDestino[$cont]->valor = $rs['valor'];
            $listDestino[$cont]->tipo = $rs['tipo'];
            $listDestino[$cont]->idOnbs = $rs['idTipoOnibus'];
            $listDestino[$cont]->placa = $rs['placa'];
            $listDestino[$cont]->acentos = $rs['acentosOnibus'];
            
//            var_dump($listDestino);
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna a lista se existir dados no BD.
        if(isset($listDestino)){
            return $listDestino;
        }
        
    }
    
     public function selectCompras($destino){
        
        $sql ="select * from viagens_view";
         
        //Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Destino.
            $listDestino[] = new Destino();
            
            // Guarda os dados de BD em cada indice do objeto criado.
//            $listDestino[$cont]->idViagem = $rs['idViagem'];
            $listDestino[$cont]->idViagem = $rs['idViagem'];
            $listDestino[$cont]->destino = $rs['Destino'];
            
            $_SESSION['teste'] = $rs['Destino'];
//            $listDestino[$cont]->imagem1 = $rs['primairaImagem'];
//            $listDestino[$cont]->imagem2 = $rs['segundaImagem'];
            $listDestino[$cont]->data = $rs['dtPartida'];
            $listDestino[$cont]->hora_partida = $rs['hrPartida'];
            $listDestino[$cont]->hora_chegada = $rs['hrChegada'];
            $listDestino[$cont]->descricao = $rs['descricao'];
            $listDestino[$cont]->valor = $rs['valor'];
            $listDestino[$cont]->tipo = $rs['tipo'];
            $listDestino[$cont]->placa = $rs['placa'];
            $listDestino[$cont]->acentos = $rs['acentosOnibus'];
//            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna a lista se existir dados no BD.
        if(isset($listDestino)){
            return $listDestino;
        }
        
    }
    
    
    
    public function selectParadaSelecionada($paradaSelecionada){
        
        $sql ="select * from pontosparadas_view WHERE idPontos_viagem = ".$paradaSelecionada->idPontoPartida;
        
//        echo($sql);
        //Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Destino.
            $listParadas[] = new Destino();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listParadas[$cont]->nomePonto = $rs['nomePonto'];
            
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna a lista se existir dados no BD.
        if(isset($listParadas)){
            return $listParadas;
        }
        
    }
    
    // Pesquisa as viagens de acordo com a pesquisa feita na home.
    public function Seach($destino){
        
        $sql ="SELECT 
                `c`.`idViagem` AS `idViagem`,
                CONCAT_WS(' > ',
                        `cid`.`nomeCidade`,
                        `dest`.`nomeCidade`) AS `Destino`,
                `c`.`imagem1` AS `primairaImagem`,
                `c`.`imagem2` AS `segundaImagem`,
                `c`.`descricao` AS `descricao`,
                DATE_FORMAT(`c`.`dtPartida`, '%d/%m/%y') AS `dtPartida`,
                TIME_FORMAT(`c`.`hrPartida`, '%H:%i') AS `hrPartida`,
                TIME_FORMAT(`c`.`hrChegada`, '%H:%i') AS `hrChegada`,
                `o`.`idOnibus` AS `numeroOnibus`,
                `o`.`placa` AS `placa`,
                `tip`.`qntLugares` AS `acentosOnibus`,
                `tip`.`tipo` AS `tipo`,
                `tip`.`idTipoOnibus` AS `idTipoOnibus`,
                `c`.`hrChegadaReal` AS `hrChegadaReal`,
                `c`.`valor` AS `valor`
            FROM
                ((((`tbl_viagem` `c`
                JOIN `tbl_cidade` `cid`)
                JOIN `tbl_cidade` `dest`)
                JOIN `tbl_onibus` `o`)
                JOIN `tbl_tipoonibus` `tip`)
            WHERE
                ((`c`.`codCidade` = `cid`.`codCidade`)
                    AND (`c`.`idDestino` = `dest`.`codCidade`)
                    AND (`c`.`idOnibus` = `o`.`idOnibus`)
                    AND (`o`.`idTipoOnibus` = `tip`.`idTipoOnibus`)
                    AND (`cid`.`nomeCidade` = '".$destino->codCidade."')
                    AND (`dest`.`nomeCidade` = '".$destino->idDestino."')
                    AND (`c`.`dtPartida` = '".$destino->data."'))
            ORDER BY `c`.`idDestino` DESC";
        
//        echo($sql);
        //Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Destino.
            $listDestino[] = new Destino();
            
            // Guarda os dados de BD em cada indice do objeto criado.
//            $listDestino[$cont]->idViagem = $rs['idViagem'];
            $listDestino[$cont]->idViagem = $rs['idViagem'];
            $listDestino[$cont]->destino = $rs['Destino'];
            
            $_SESSION['teste'] = $rs['Destino'];
//            $listDestino[$cont]->imagem1 = $rs['primairaImagem'];
//            $listDestino[$cont]->imagem2 = $rs['segundaImagem'];
            $listDestino[$cont]->data = $rs['dtPartida'];
            $listDestino[$cont]->hora_partida = $rs['hrPartida'];
            $listDestino[$cont]->hora_chegada = $rs['hrChegada'];
            $listDestino[$cont]->descricao = $rs['descricao'];
            $listDestino[$cont]->valor = $rs['valor'];
            $listDestino[$cont]->tipo = $rs['tipo'];
            $listDestino[$cont]->placa = $rs['placa'];
            $listDestino[$cont]->acentos = $rs['acentosOnibus'];
            
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna a lista se existir dados no BD.
        if(isset($listDestino)){
            return $listDestino;
        }else{
            return "Não há viagens programadas com essas caracteristicas.";
        }
        
    }
  
}
?>