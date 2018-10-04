<?php

class Usuario  {

    public $idCliente;
    public $nome;
    public $sobrenome;
    public $cpf;   
    public $rg;
    public $data;
    public $sexo;
    public $celular;    
    public $telefone;
    public $email;
    public $idEndereco;
    public $cep;
    public $estado;
    public $cidade;
    public $bairro;
    public $logradouro;
    public $numero;    
    public $usuario;


    public function __construct(){

        require_once("bd_class.php");
    }
    
    public function Insert(){
        
        
        $sql = "INSERT INTO tbl_cliente(nome, sobrenome, cpf, rg, sexo, celular, telefone,usuario,senha,email,dt_nasc)
        VALUES('".$usuario->nome."','".$usuario->sobrenome."','".$usuario->cpf."','".$usuario->rg."','".$usuario->sexo."','".$usuario->celular."','".$usuario->telefone."','".$usuario->usuario."' '".$usuario->senha."','".$usuario->email."','".$usuario->data."');";
        
//        echo($sql);
        
         // Instancia a classe do BD.
        $conex = new Mysql_db();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            
//            header("location:index.php");
//            echo("Funcionário salvo com sucesso.<br>".$sql);
            header('location:index.php');
            
            $conex->Desconectar();
        }else{
            echo("Erro ao inserir no banco.<br>".$sql);
        }
        
        $conex->Desconectar();        
        
       
        
        
    }
    
    

    public function Select(){


        $sql = 'SELECT * FROM tbl_cliente ORDER BY idCliente DESC';
            
        $conex = new Mysql_db();
        
         // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rs = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listUsuario[] = new Usuario();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listUsuario[$cont]->idCliente = $rs['idCliente'];
            $listUsuario[$cont]->nome = $rs['nome'];
            $listUsuario[$cont]->sobrenome = $rs['sobrenome'];
            $listUsuario[$cont]->telefone = $rs['telefone'];
            $listUsuario[$cont]->celular = $rs['celular'];
            $listUsuario[$cont]->cpf = $rs['cpf'];
            $listUsuario[$cont]->sexo = $rs['sexo'];
            $listUsuario[$cont]->rg = $rs['rg'];
            $listUsuario[$cont]->email = $rs['email'];
            $listUsuario[$cont]->idEndereco = $rs['idEndereco'];
            
            
            $cont+=1;
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listUsuario)){
            return $listUsuario;
        }else{
            echo('Erro ao trazer todos os registros do banco');
        }

    }
    
    // Deleta o registro no BD.
    public function Delete($usuario){
        
        $sql = "DELETE FROM tbl_cliente WHERE idCliente = ".$usuario->idCliente;
        
        
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
    
}

?>