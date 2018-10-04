<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 23/04/2018
Controller: Cidade.

Esta controller chama o metodo
para salvar uma nova cidade
no banco.

*/






class cidadeController{
    
    public function Novo(){
        
        $cidade = new Cidade();
        
        $cidade->nomeCidade = $_POST['txt_cidade'];
        $cidade->codEstado = $_POST['cbx_estado'];
        
        $cidade::Insert($cidade);
        
    }
    
    public function Listar(){
        
        $cidade = new Cidade();
        return $cidade::Select();
        
    }
    
    public function Listar_cbx(){
        
        $cidade = new Cidade();
        return $cidade::Select_cbx();
        
    }
    
    public function ListarCidade(){
        
        $cidade = new Cidade();
        return $cidade::SelectCidade();
        
    }
    
    public function Deletar(){
        
        $cidade = new Cidade();
        
        $cidade->codCidade = $_GET['id'];
        
        $cidade::Delete($cidade);
        
    }
    
    public function Buscar(){
        
        $cidade = new Cidade();
        
        $cidade->codCidade = $_GET['id'];
        
        $listCidade = $cidade::SelectById($cidade);
        
        require_once("view/partida.php");
        
    }
    
    public function Editar(){
        
        $cidade = new Cidade();
        
        $cidade->codCidade = $_GET['id'];
        $cidade->nomeCidade = $_POST['txt_cidade'];
        $cidade->codEstado = $_POST['cbx_estado'];
        
        $cidade::Update($cidade);
        
    }
    
}

?>