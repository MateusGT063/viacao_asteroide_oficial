<?php

/*

autor: Gabriel de Melo Marcondes.
data: 03/04/2018
controller: Dúvidas frequentes.

*/

class contatosController{
    
    // Inserir registro.
    public function Novo(){
        
        $contatos = new Contato();
        
        $contatos->pergunta = $_POST['txt_pergunta'];
        $contatos->resposta = $_POST['txt_resposta'];
        
        $contatos::Insert($contatos);
        
    }
    
    // Deletar registro.
    public function Deletar(){
        
        $contatos = new Contato();
        
        $contatos->id = $_GET['id'];
        
        $contatos::Delete($contatos);
        
    }
    
    // Listar registro.
    public function Listar(){
        
        $contatos = new Contato();
        
        return $contatos::Select();
        
    }
    
    
    
    // Buscar registros.
    public function Buscar(){
        
        $contatos = new Contato();
        
        $contatos->id = $_GET['id'];
        
        $listContatos = $contatos::SelectById($contatos);
        
        require_once('view/partida.php');
        
    }
    
    // Atualizar registro.
    public function Editar(){
        
        $contatos = new Contato();
        
        $contatos->id = $_GET['id'];
        $contatos->pergunta = $_POST['txt_pergunta'];
        $contatos->resposta = $_POST['txt_resposta'];
        
        $contatos::Update($contatos);
        
    }
    
}

?>