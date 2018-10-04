<?php

class usuarioController{
    
    public function NovoUsuario($idEnd){
        
        $usuarioCad = new UsuarioCad();
        
        $usuarioCad->nome = $_POST['txtNome'];
        $usuarioCad->sobrenome = $_POST['txtSobrenome'];
        $usuarioCad->cpf = $_POST['txtCpf'];   
        $usuarioCad->rg = $_POST['txtRG'];
        $usuarioCad->sexo = $_POST['selectSexo'];
        $usuarioCad->celular = $_POST['txtCelular'];
        $usuarioCad->telefone = $_POST['txtTelefone'];
        $usuarioCad->usuario = $_POST['usuario']; 
        $usuarioCad->senha = md5($_POST['senha']);
//        $usuarioCad->senha = $_POST['senha']; 
        $usuarioCad->email = $_POST['txtEmail']; 
        $usuarioCad->data = $_POST['data']; 
        $usuarioCad->cep = $_POST['txt_cep']; 
        $usuarioCad->bairro = $_POST['txt_bairro']; 
        $usuarioCad->cidade = $_POST['cbx_cidade']; 
        $usuarioCad->logradouro = $_POST['txt_logradouro']; 
//        $usuarioCad->numero = $_POST['txt_numero']; 
        $usuarioCad->idEndereco = $idEnd;
        
//        var_dump($usuarioCad);
        
        $usuarioCad::Insert($usuarioCad);
        
        
        
 
    }


    public function Listar(){

    
        $usuario = new Usuario();

        return $usuario::Select();

        
    }
    
    public function ListarInf(){

    
        $usuario = new UsuarioCad();

        return $usuario::Select();

        
    }
    
    // Desativa um passageiro no banco
    public function DesativarEscolha(){
        
        $idPassagem = $_GET['idPassagem'];
        
        $escolha = new UsuarioCad();
        
        $escolha->idPassagem = $idPassagem;
        
        $escolha::Desativando($escolha);
        
    }
    
    // Ativa um passageiro no banco
    public function AtivarEscolha(){
        
        $idDicas = $_GET['id'];
        
        $dicas = new Dicas();
        
        $dicas->idDicas = $idDicas;
        
        $dicas::Ativando($dicas);
        
    }
    
    public function ListarEscolha(){

    
        $usuario = new Usuario();

        return $usuario::SelectEscolha();

        
    }



}

?>