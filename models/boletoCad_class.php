<?php

class boletoCad{

    public $viagem;
    public $acento;
    public $idParada;
    public $idCliente;
    public $ativo;
    public $vencimento;
    public $hrPartida;
    public $dtPartida;
    public $destino;
    public $valor;
    public $numeroDocumento;
    public $sigla;
    
    
    public $nome;
    public $sobrenome;
    public $cpf;
    public $rg;
    public $idEndereco;
    public $sexo;
    public $celular;
    public $telefone;
    public $senha;
    public $email;
    public $dt_nasc;
    public $bairro;
    public $logradouro;
    public $cep;
    public $numero;
    public $nomeCidade;
    public $nomeEstado;
    
    

    public function __construct(){

        require_once("bd_class.php");
    }
    
    public function Insert($boletoCad){   
        
        $sql = "INSERT INTO tbl_passagem (acento, idCliente, idPontos_viagem, idViagem, ativo,vencimento,dataDocumento,numeroDocumento, agenciaCodBeneficiario) VALUES('".$boletoCad->acento."','".$boletoCad->idCliente."','".$boletoCad->idParada."','".$boletoCad->viagem."','0',date_format(date_add( curdate(), INTERVAL 10 DAY),'%d/%m/%Y' ), date_format(curdate(), '%d/%m/%Y'),`acento` + 003, `idCliente` + 1);";
        
//        echo ($sql);
         // Instancia a classe do BD.
        $conex = new Mysql_db1();
        
        // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex.
        $POD_conex = $conex->Conectar();
        
        // Executa o Script no BD.
        if($POD_conex->query($sql)){
            
//            header("location:index.php");
//            echo("Cadastro salvo com sucesso.<br>".$sql);
            header('location:views/boleto/boleto.php');
            
            $conex->Desconectar();
        }else{
            echo("Erro ao cadastrar no banco.<br>".$sql);
        }
        
        $conex->Desconectar();        
//        
       
    }

    public function Select($boletoList){

        $sql = 'SELECT * FROM selectpassagens_view where idCliente='.$boletoList->idCliente;
        
//        echo($boletoList->idCliente);
        
//        echo($sql);
            
        $conex = new Mysql_db1();
        
         // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rsCliente = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listPassagensCliente[] = new boletoCad();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listPassagensCliente[$cont]->idPassagem = $rsCliente['idPassagem'];
            $listPassagensCliente[$cont]->hrPartida = $rsCliente['hrPartida'];
            $listPassagensCliente[$cont]->dtPartida = $rsCliente['dtPartida'];
            $listPassagensCliente[$cont]->destino = $rsCliente['destino'];
            $listPassagensCliente[$cont]->valor = $rsCliente['valor'];
            $listPassagensCliente[$cont]->ativo = $rsCliente['ativo'];
            $listPassagensCliente[$cont]->idCliente = $rsCliente['idCliente'];
            $listPassagensCliente[$cont]->numeroDocumento = $rsCliente['numeroDocumento'];
            
            
            $cont+=1;
            
//            var_dump ($listPassagensCliente);
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listPassagensCliente)){
            return $listPassagensCliente;
        }else{
            echo('Erro ao trazer todos os registros do banco');
        }

    }
    
    
    public function SelectPerfil($boletoUser){
        $sql = 'SELECT * FROM perfilusuario_view where idCliente='.$boletoUser->idCliente;
        
//        echo($sql);
            
        $conex = new Mysql_db1();
        
         // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rsCliente = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listPerfilCliente[] = new boletoCad();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listPerfilCliente[$cont]->idCliente = $rsCliente['idCliente'];
            $listPerfilCliente[$cont]->nome = $rsCliente['nome'];
            $listPerfilCliente[$cont]->sobrenome = $rsCliente['sobrenome'];
            $listPerfilCliente[$cont]->cpf = $rsCliente['cpf'];
            $listPerfilCliente[$cont]->rg = $rsCliente['rg'];
            $listPerfilCliente[$cont]->dt_nasc = $rsCliente['dt_nasc'];
            $listPerfilCliente[$cont]->sexo = $rsCliente['sexo'];
            $listPerfilCliente[$cont]->celular = $rsCliente['celular'];
            $listPerfilCliente[$cont]->telefone = $rsCliente['telefone'];
            $listPerfilCliente[$cont]->email = $rsCliente['email'];
            
            $listPerfilCliente[$cont]->bairro = $rsCliente['bairro'];
            $listPerfilCliente[$cont]->logradouro = $rsCliente['logradouro'];
            $listPerfilCliente[$cont]->cep = $rsCliente['cep'];
            $listPerfilCliente[$cont]->numero = $rsCliente['numero'];
            $listPerfilCliente[$cont]->nomeCidade = $rsCliente['nomeCidade'];
            $listPerfilCliente[$cont]->nomeEstado = $rsCliente['nomeEstado'];
//            $listPerfilCliente[$cont]->sigla = $rsCliente['sigla'];
            
            
            $cont+=1;
            
//            var_dump ($listPassagensCliente);
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listPerfilCliente)){
            return $listPerfilCliente;
        }else{
            echo('Erro ao trazer todos os registros do banco');
        }

    }
      
    
    public function SelectInf(){
        $sql = 'SELECT * FROM informacoesboleto_view where teste='.$numeroDocumento;
        
        echo($sql);
            
        $conex = new Mysql_db1();
        
         // Chama o metodo para conectar no BD, e guarda o retorno da conexão na variavel
        $POD_conex = $conex->Conectar();
        
        // Executa o select no BD e guarda o retorno na variavel $select.
        $select = $POD_conex->query($sql);
        
        $cont = 0;
        
        while($rsCliente = $select->fetch(PDO::FETCH_ASSOC)){
            
            // Cria um array de objetos da classe Contato.
            $listPerfilCliente[] = new boletoCad();
            
            // Guarda os dados de BD em cada indice do objeto criado.
            $listPerfilCliente[$cont]->idCliente = $rsCliente['idCliente'];
            $listPerfilCliente[$cont]->nome = $rsCliente['nome'];
            $listPerfilCliente[$cont]->sobrenome = $rsCliente['sobrenome'];
            $listPerfilCliente[$cont]->cpf = $rsCliente['cpf'];
            $listPerfilCliente[$cont]->rg = $rsCliente['rg'];
            $listPerfilCliente[$cont]->dt_nasc = $rsCliente['dt_nasc'];
            $listPerfilCliente[$cont]->sexo = $rsCliente['sexo'];
            $listPerfilCliente[$cont]->celular = $rsCliente['celular'];
            $listPerfilCliente[$cont]->telefone = $rsCliente['telefone'];
            $listPerfilCliente[$cont]->email = $rsCliente['email'];
            
            $listPerfilCliente[$cont]->bairro = $rsCliente['bairro'];
            $listPerfilCliente[$cont]->logradouro = $rsCliente['logradouro'];
            $listPerfilCliente[$cont]->cep = $rsCliente['cep'];
            $listPerfilCliente[$cont]->numero = $rsCliente['numero'];
            $listPerfilCliente[$cont]->nomeCidade = $rsCliente['nomeCidade'];
            $listPerfilCliente[$cont]->nomeEstado = $rsCliente['nomeEstado'];
            
            
            $cont+=1;
            
//            var_dump ($listPassagensCliente);
        }
        
        $conex->Desconectar();
        
        // Apenas retorna o listContatos se existir dados no BD.
        if(isset($listPerfilCliente)){
            return $listPerfilCliente;
        }else{
            echo('Erro ao trazer todos os registros do banco');
        }

    }
    
}

?>