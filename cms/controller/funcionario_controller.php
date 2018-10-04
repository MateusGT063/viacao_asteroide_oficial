<?php

/*

autor: Gabriel de Melo Marcondes.
data: 05/04/2018
controller: controle de funcionários.

*/

class funcionarioController{
    
    public function Novo($idEnd){
        
        // Istancia a classe "Funcionario" do arquivo "funcionario_class".
        $funcionario = new Funcionario();
        
        // Guarda os valores passados por metodo via post em cada variavel da classe "Funcionario".
        $funcionario->nome = $_POST['txt_nome'];
        $funcionario->sobrenome = $_POST['txt_sobrenome'];
        $funcionario->rg = $_POST['txt_rg'];
        $funcionario->cpf = $_POST['txt_cpf'];
        $funcionario->numero= $_POST['numero'];
        $funcionario->usuario = $_POST['txt_usuario'];
        $funcionario->senha = md5($_POST['txt_senha']);
        $funcionario->idEndereco = $idEnd;
        $funcionario->idNivelFuncionario = $_POST['cbx_nivelFuncionario'];
        
        // Chama o método "Insert" passando as variáveis, para inserir o novo registro.
        $funcionario::Insert($funcionario);
        
    }
    
    // Trás todos os registros existentes.
    public function Listar(){
        
        // Istancia a classe "Funcionario" do arquivo "funcionario_class".
        $funcionario = new Funcionario();
        
        return $funcionario::Select();
        
    }
    
    // Deleta um registro existente.
    public function Deletar(){
        
        // Istancia a classe "Funcionario" do arquivo "funcionario_class".
        $funcionario = new Funcionario();
        
        // Pega o id do funcionário para deletá-lo.
        $funcionario->idFuncionario = $_GET['id'];
        
        // Chama o metodo para executar o delete.
        $funcionario::Delete($funcionario);
        
    }
    
    // Trás um registro específico existente.
    public function Buscar(){
        
        // Istancia a classe "Funcionario" do arquivo "funcionario_class".
        $funcionario = new Funcionario();
        
        // pega o id do registro e o id do endereco do funcionário para fazer a busca no banco.
        $funcionario->idFuncionario = $_GET['id'];
        $funcionario->idEndereco = $_GET['idEnd'];
        
        // Chama o metodo para buscar o registro e o que retornar da busca será guardado na variável "$listF".
        $listF = $funcionario::SelectById($funcionario);
        
        $_SESSION['pagina'] = "adm/funcionario/funcionario_view.php";
        
        // Ao fazer a busca será feito o require_once do arquivo que contem o código html para mostrar na tela os dados do registro encontrado na busca.
        require_once("index.php");
        
    }
    
    // Atualiza um registro existente.
    public function Editar(){
        
        // Istancia a classe "Funcionario" do arquivo "funcionario_class".
        $funcionario = new Funcionario();
        $endereco = new Endereco();
        
        // Pega o id do registro e os demais dados para fazer uma atualização do mesmo.
        // Variáevis do funcionário.
        $funcionario->idFuncionario = $_GET['id'];
        $funcionario->nome = $_POST['txt_nome'];
        $funcionario->sobrenome = $_POST['txt_sobrenome'];
        $funcionario->rg = $_POST['txt_rg'];
        $funcionario->cpf = $_POST['txt_cpf'];
        $funcionario->usuario = $_POST['txt_usuario'];
        $funcionario->senha = $_POST['txt_senha'];
        $funcionario->idNivelFuncionario = $_POST['cbx_nivelFuncionario'];
        $funcionario->idEndereco = $_GET['idEnd'];
        // Variáveis do endereço do funcionário.
        $endereco->bairro = $_POST['txt_bairro'];
        $endereco->logradouro = $_POST['txt_logradouro'];
        $endereco->cep = $_POST['txt_cep'];
        $endereco->cidade = $_POST['cbx_cidade'];
        $endereco->idEndereco = $_GET['idEnd'];
        
        // Chama o metodo para atualizar o endereço do funcionário.
        $sucess = $endereco::Update($endereco);
        
        // Chama o metodo para atualizar o funcionário apenas se a atualização do endereço dele foi bem sucedida.
        if($sucess == 1){
            $funcionario::Update($funcionario);
        }
        
    }
    
    public function Desativar(){
        
        $funcionario = new Funcionario();
        
        $funcionario->idFuncionario = $_GET['id'];
        $funcionario::Desable($funcionario);
        
    }
    
    public function Ativar(){
        
        $funcionario = new Funcionario();
        
        $funcionario->idFuncionario = $_GET['id'];
        $funcionario::ToActivate($funcionario);
        
    }
    
}

?>