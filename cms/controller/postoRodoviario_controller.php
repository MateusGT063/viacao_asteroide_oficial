<?php
/*

autor: Eduardo Rocha.
data:  23/04/2018
controller: Posto Rodoviario.

*/
class postoRodoviarioController{
    
    public function Novo($idEnd){
        
        $postoRodoviario = new postoRodoviario();
        
        
        $postoRodoviario->nome = $_POST['nome'];
        $postoRodoviario->idEndereco = $idEnd;
        $postoRodoviario->telefone = $_POST['txtTelefone'];
        $postoRodoviario->numero = $_POST['txt_numero'];
        
        $postoRodoviario::Insert($postoRodoviario);
        
    }
    
    // Trás todos os registros existentes.
    public function Listar(){
        
        $postoRodoviario = new postoRodoviario();
        
        return $postoRodoviario::Select();
        
    }
    
    // Deleta um registro existente.
    public function Deletar(){
        
        $idPostoRodoviario = $_GET['id'];
        
        $postoRodoviario = new postoRodoviario();
        
        $postoRodoviario->idPostoRodoviario = $idPostoRodoviario;
        
        $postoRodoviario::Delete($postoRodoviario);
        
    }
    
    // Trás um registro específico existente.
    public function Buscar(){
        
        $idPostoRodoviario= $_GET['id'];
        
        $postos = new postoRodoviario();
        
        $postos->idPostoRodoviario = $idPostoRodoviario;
        
        $postoRodoviario = $postos::SelectById($postos);
        
        require_once("view/partida.php");
        
    }
    
    // Atualizar registro.
    public function Editar(){
        
        // Istancia a classe "Posto Rodoviario" do arquivo "postoRodoviario_class".
        $postoRodoviario = new postoRodoviario();
        $endereco = new Endereco();
        
        // Pega o id do registro e os demais dados para fazer uma atualização do mesmo.
        // Variáevis do funcionário.
        $postoRodoviario->idPostoRodoviario = $_GET['id'];
        $postoRodoviario->nome = $_POST['nome'];
        $postoRodoviario->telefone = $_POST['txtTelefone'];
        $postoRodoviario->idEndereco = $_GET['idEnd'];
        // Variáveis do endereço do funcionário.
        $endereco->bairro = $_POST['txt_bairro'];
        $endereco->logradouro = $_POST['txt_logradouro'];
        $endereco->cep = $_POST['txt_cep'];
        $endereco->cidade = $_POST['cbx_cidade'];
        $endereco->idEndereco = $_GET['idEnd'];
        $endereco->numero = $_POST['txt_numero'];
        
//        var_dump($endereco);
        
        // Chama o metodo para atualizar o endereço do funcionário.
        $sucess = $endereco::Update($endereco);
        
        // Chama o metodo para atualizar o funcionário apenas se a atualização do endereço dele foi bem sucedida.
        if($sucess == 1){
//            echo(' Entrou no Update pai ;) ');
            $postoRodoviario::Update($postoRodoviario);
        }
        
    }
    
}

?>