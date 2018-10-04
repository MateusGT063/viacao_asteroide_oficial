<?php

class usuarioController{
    
    public function Novo(){
        
        $usuario = new Usuario();
        
        $usuario->nome = $_POST['txtNome'];
        $usuario->sobrenome = $_POST['txtSobrenome'];
        $usuario->cpf = $_POST['txtCpf'];
        $usuario->rg = $_POST['txtRG'];
        $usuario->data = $_POST['data'];
        $usuario->sexo = $_POST['selectSexo'];
        $usuario->celular = $_POST['txtCelular'];
        $usuario->telefone = $_POST['txtTelefone'];
        $usuario->usuario = $_POST['txtUsuario'];   
        $usuario->senha = $_POST['txtSenha'];  
        $usuario->email = $_POST['txtEmail'];  
        $usuario->idEndereco = $idEnd;
        
        $usuario::Insert($usuario);
        
        
        
 
    }


    public function Listar(){

    
        $usuario = new Usuario();

        return $usuario::Select();

        
    }


     // Deleta um registro existente.
    public function Deletar(){
        
        $idCliente = $_GET['id'];
        
        $usuario = new Usuario();
        
        $usuario->idCliente = $idCliente;
        
        $usuario::Delete($usuario);
        
    }

}

?>