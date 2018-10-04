<?php

/*

autor: Gabriel de Melo Marcondes.
data: 05/04/2018
controller: controle de funcionários.

*/

class enderecoController{
    
    public function Novo(){
        
        $endereco = new Endereco();
        
        $endereco->bairro = $_POST['txt_bairro'];
        $endereco->logradouro = $_POST['txt_logradouro'];
        $endereco->idTipoEndereco = 1;
        $endereco->cep = $_POST['txt_cep'];
        $endereco->codCidade = $_POST['cbx_cidade'];
        $endereco->numero = $_POST['txt_numero'];
        
//        var_dump($endereco);
        
        return $endereco::Insert($endereco);
        
    }
    
    public function Deletar(){
        
        $endereco = new Endereco();
        
        $endereco->idEndereco = $_GET['idEnd'];
        
        $endereco::Delete($endereco);
        
    }
    
    public function NovoPosto(){
        
        $endereco = new Endereco();
        
        $endereco->bairro = $_POST['txt_bairro'];
        $endereco->logradouro = $_POST['txt_logradouro'];
        $endereco->idTipoEndereco = 1;
        $endereco->cep = $_POST['txt_cep'];
        $endereco->codCidade = $_POST['cbx_cidade'];
        $endereco->numero = $_POST['txt_numero'];
        
//        var_dump($endereco);
        
        return $endereco::Insert($endereco);
        
    }
    
}

?>