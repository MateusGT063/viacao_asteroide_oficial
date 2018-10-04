<?php


/*
autor: Eduardo Rocha.
data:  23/04/2018
controller: Posto Rodoviario.

Esta classe tem as funções que fazem
ações na tabela de postos rodoviarios.

*/

class postoRodoviario{
    
    // Variáveis desta classe.
    public $idPostoRodoviario;
    public $nome;
    public $idEndereco;
    public $logradouro;
    public $bairro;
    public $cep;
    public $codCidade;
    public $telefone;
    public $numero;
    
    
    // Construct da classe.
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Inserir registro.
    public function Insert($postoRodoviario){
        
        $sql = "INSERT INTO tbl_postorodoviario (Nome, idEndereco, telefone) VALUES('".$postoRodoviario->nome."', ".$postoRodoviario->idEndereco.",'".$postoRodoviario->telefone."');";
        
//        echo($sql);
        
         // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            
//            header("location:index.php");
            echo("Funcionário salvo com sucesso.<br>".$sql);
            header('location:index.php');
            
            $conex->Desconectar();
        }else{
            echo("Erro ao inserir um funcionário no banco.<br>".$sql);
        }
        
        $conex->Desconectar();
    }
    
    public function Select(){
      
      $sql = "select p.idPostoRodoviario, p.Nome,e.numero, e.logradouro , p.telefone from tbl_postorodoviario as p
              INNER JOIN tbl_endereco as e on p.idEndereco = e.idEndereco;";
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
      
      while($rs = $select->fetch(PDO::FETCH_ASSOC)){
          
          $listaPostos[] = new postoRodoviario();
          
          $listaPostos[$cont]->idPostoRodoviario = $rs['idPostoRodoviario'];
          $listaPostos[$cont]->nome = $rs['Nome'];
          $listaPostos[$cont]->logradouro = $rs['logradouro'];
          $listaPostos[$cont]->telefone = $rs['telefone'];
          $listaPostos[$cont]->numero = $rs['numero'];
          
//          var_dump($listadmFrota[$cont]->placa);
          $cont += 1 ;
          
      }
        
      if (isset($listaPostos)){
          return $listaPostos; 
      }
    }
    
    public function Delete($postos){
        
        $sql = "DELETE FROM tbl_postorodoviario WHERE idPostoRodoviario = ".$postos->idPostoRodoviario;
        
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
//            echo($sql);
        }
        
    }
    
     // Buscar registros.
    public function SelectById($postos){
        
//        $sql = "select p.idPostoRodoviario, p.Nome,e.idEndereco, e.logradouro ,e.bairro , e.cep ,e.codCidade, p.telefone from tbl_postorodoviario as p
//        INNER JOIN tbl_endereco as e on p.idEndereco = e.idEndereco;";
        
        
        $sql= "select p.idPostoRodoviario, p.Nome,e.numero,e.idEndereco, e.logradouro ,e.bairro , e.cep ,e.codCidade, p.telefone from tbl_postorodoviario as p
        INNER JOIN tbl_endereco as e on p.idEndereco = e.idEndereco
        WHERE idPostoRodoviario = ".$postos->idPostoRodoviario;
        
//        echo ($sql);
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        $select = $POD_conex->query($sql);
        
        if ($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listaPostos = new postoRodoviario();

            // Guarda os dados de BD em cada indice do objeto criado.
            $listaPostos->idPostoRodoviario = $rs['idPostoRodoviario'];
            $listaPostos->nome = $rs['Nome'];
            $listaPostos->idEndereco = $rs['idEndereco'];
            $listaPostos->logradouro = $rs['logradouro'];
            $listaPostos->bairro = $rs['bairro'];
            $listaPostos->cep = $rs['cep'];
            $listaPostos->codCidade = $rs['codCidade'];
            $listaPostos->telefone = $rs['telefone'];
            $listaPostos->numero = $rs['numero'];
            
//            var_dump($listaPostos);
            
        }else{
            echo("Erro ao buscar um registro do banco.");
        }
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listaPostos)){
            return $listaPostos;
        }
        
        $conex->Desconectar();
        
    }
    
    // Atualizar registro.
    public function Update($postos){
        
        $sql = "UPDATE tbl_postorodoviario SET nome = '".$postos->nome."', idEndereco = '".$postos->idEndereco."', telefone = '".$postos->telefone."' WHERE idPostoRodoviario = ".$postos->idPostoRodoviario;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            header('location:index.php');
            echo("OI<br>".$sql);
        }else{
            echo("Não atualizou o Posto Rodoviario.<br>".$sql."<br>");
        }
        
        $conex->Desconectar();
    
    }
}
?>