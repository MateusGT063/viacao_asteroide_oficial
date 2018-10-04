<?php

/*

Autor: Gabriel de Melo Marcondes
Data: 05/04/2018
Controller: controle dos funcionários.

*/

class Funcionario{
    
    // Atributos da classe.
    public $idFuncionario;
    public $nome;
    public $sobrenome;
    public $rg;
    public $cpf;
    public $usuario;
    public $senha;
    public $idEndereco;
    public $idNivelFuncionario;
    public $ativo;
    
    public function __construct(){
        require_once('bd_class.php');
    }
    
    // Insere o registro no BD.
    public static function Insert($funcionario){
        
//        $sql = "INSERT INTO tbl_funcionario SET nome = '".$funcionario->nome."', sobrenome = '".$funcionario->sobrenome."', rg = '".$funcionario->rg."', cpf = '".$funcionario->cpf."', usuario = '".$funcionario->usuario."', senha = '".$funcionario->senha."', idEndereco = ".$funcionario->idEndereco.", idNivelFuncionario = ".$funcionario->idNivelFuncionario.", ativo = 1";
        
        $sql = "INSERT INTO tbl_funcionario(nome, sobrenome, rg, cpf, usuario, senha, idEndereco, idNivelFuncionario, ativo)
        VALUES('".$funcionario->nome."', '".$funcionario->sobrenome."', '".$funcionario->rg."', '".$funcionario->cpf."', '".$funcionario->usuario."', '".$funcionario->senha."', ".$funcionario->idEndereco.", ".$funcionario->idNivelFuncionario.", 1);";
        
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
    
    // Atualiza o registro no BD.
    public function Update($funcionario){
        
        $sql = "UPDATE tbl_funcionario SET nome = '".$funcionario->nome."', sobrenome = '".$funcionario->sobrenome."', rg = '".$funcionario->rg."', cpf = '".$funcionario->cpf."', usuario = '".$funcionario->usuario."', senha = '".$funcionario->senha."', idEndereco = ".$funcionario->idEndereco.", idNivelFuncionario = ".$funcionario->idNivelFuncionario." WHERE idFuncionario = ".$funcionario->idFuncionario.";";
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            header('location:index.php');
            echo("OI");
        }else{
            echo("Não atualizou o funcionário.<br>".$sql."<br>");
        }
        
        $conex->Desconectar();
        
    }
    
    // Deleta o registro no BD.
    public function Delete($funcionario){
        
        $sql = "DELETE FROM tbl_funcionario WHERE idFuncionario = ".$funcionario->idFuncionario;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            header("location:index.php");
//            echo("Deletou o funcionário.<br>".$sql."<br>");
        }else{
            echo("Não deletou o funcionário.<br>".$sql."<br>");
        }
        
        $conex->Desconectar();
        
    }
    
    // Lista todos os registros do BD.
    public function Select(){
        
        $sql = "SELECT f.*, f.idEndereco AS end, e.*, nf.*, te.* FROM tbl_funcionario AS f 
        INNER JOIN tbl_endereco AS e ON f.idEndereco = e.idEndereco 
        INNER JOIN tbl_tipoendereco AS te ON e.idTipoEndereco = te.idTipoEndereco
        INNER JOIN tbl_nivelfuncionario AS nf ON f.idNivelFuncionario = nf.idNivelFuncionario
        ORDER BY f.idFuncionario DESC;";
        
//        echo($sql);
        
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listFuncionario[] = new Funcionario();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            
            $listFuncionario[$cont]->idFuncionario = $rs['idFuncionario'];
            $listFuncionario[$cont]->nome = $rs['nome'];
            $listFuncionario[$cont]->sobrenome = $rs['sobrenome'];
            $listFuncionario[$cont]->rg = $rs['rg'];
            $listFuncionario[$cont]->cpf = $rs['cpf'];
            $listFuncionario[$cont]->usuario = $rs['usuario'];
            $listFuncionario[$cont]->senha = $rs['senha'];
            $listFuncionario[$cont]->logradouro = $rs['logradouro'];
            $listFuncionario[$cont]->bairro = $rs['bairro'];
            $listFuncionario[$cont]->cep = $rs['cep'];
            $listFuncionario[$cont]->cidade = $rs['codCidade'];
            $listFuncionario[$cont]->idNivelFuncionario = $rs['idNivelFuncionario'];
            $listFuncionario[$cont]->idEndereco = $rs['end'];
            $listFuncionario[$cont]->ativo = $rs['ativo'];
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listFuncionario)){
            return $listFuncionario;
        }
        
    }
    
    // Busca um registro específico no BD.
    public function SelectById($funcionario){
        
        $sql = "SELECT f.*, f.idEndereco AS end, e.*, nf.*, te.* FROM tbl_funcionario AS f 
        INNER JOIN tbl_endereco AS e ON f.idEndereco = e.idEndereco 
        INNER JOIN tbl_tipoendereco AS te ON e.idTipoEndereco = te.idTipoEndereco
        INNER JOIN tbl_nivelfuncionario AS nf ON f.idNivelFuncionario = nf.idNivelFuncionario
        WHERE f.idFuncionario = ".$funcionario->idFuncionario."
        ORDER BY f.idFuncionario DESC";
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        $select = $POD_conex->query($sql);
        
        if ($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            $listFuncionario = new Funcionario();

            // Guarda os dados de BD em cada indice do objeto criado.
            $listFuncionario->idFuncionario = $rs['idFuncionario'];
            $listFuncionario->nome = $rs['nome'];
            $listFuncionario->sobrenome = $rs['sobrenome'];
            $listFuncionario->rg = $rs['rg'];
            $listFuncionario->cpf = $rs['cpf'];
            $listFuncionario->usuario = $rs['usuario'];
            $listFuncionario->senha = $rs['senha'];
            $listFuncionario->logradouro = $rs['logradouro'];
            $listFuncionario->bairro = $rs['bairro'];
            $listFuncionario->cep = $rs['cep'];
            $listFuncionario->cidade = $rs['codCidade'];
            $listFuncionario->idNivelFuncionario = $rs['idNivelFuncionario'];
            $listFuncionario->idEndereco = $rs['end'];
            
        }else{
            echo("Erro ao buscar um registro do banco.");
        }
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listFuncionario)){
            return $listFuncionario;
        }
        
        $conex->Desconectar();
        
    }
    
    public function Desable($funcionario){
        
        $sql = "UPDATE tbl_funcionario SET ativo = 0 WHERE idFuncionario = ".$funcionario->idFuncionario;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            
            echo("Funcionário desativado com sucesso.<br>".$sql);
            header('location:index.php');
            
            $conex->Desconectar();
        }else{
            echo("Erro ao desativar um funcionário no banco.<br>".$sql);
        }
        
        $conex->Desconectar();
        
    }
    
    public function ToActivate($funcionario){
        
        $sql = "UPDATE tbl_funcionario SET ativo = 1 WHERE idFuncionario = ".$funcionario->idFuncionario;
        
        // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            
            echo("Funcionário ativado com sucesso.<br>".$sql);
            header('location:index.php');
            
            $conex->Desconectar();
        }else{
            echo("Erro ao ativar um funcionário no banco.<br>".$sql);
        }
        
        $conex->Desconectar();
        
    }
    
}

?>