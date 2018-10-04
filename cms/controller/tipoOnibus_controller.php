<?php

/*

autor: Gabriel de Melo Marcondes.
data: 10/04/2018
controller: tipo de ônibus.

Esta classe chama as funções que
fazem ações na tabela de tipo
de ônibus.

*/

class tipoOnibusController{
    
    public function Listar(){
        
        
        $tipoOnibus = new TipoOnibus();
        
        return $tipoOnibus::Select();
        
    }
    
    
    /* 
        Etapa 1 da COMPRA
    */
    public function ListarParada($idViagem){
        
//        $idViagem = $_GET['idViagem'];
        
//        $idViagem =$idViagem;
        
       
        
        
        if(isset($_GET['idViagem'])){
            
//            $idViagem = $_GET['idViagem'];
            
            $idViagem = $_GET['idViagem'];
            
            $tipoOnibus = new TipoOnibus();
        
            $tipoOnibus->idViagem = $idViagem;
        
            return $tipoOnibus::SelectParada($tipoOnibus);
            
        } else {
            
            
            $tipoOnibus = new TipoOnibus();
        
            $tipoOnibus->idViagem = $idViagem;
            
//            echo 'to aq kjsdvhsvd';
            return $tipoOnibus::SelectParada($tipoOnibus);
        }
        
    }
    
    public function ListarAcentos(){
        
        $idViagem = $_GET['idViagem'];
        
//        echo($idViagem);
        
        $acentos = new TipoOnibus();
        
        $acentos->idViagem = $idViagem;
        
        return $acentos::SelectAcentos($acentos);
        
//        $tipoOnibus = new TipoOnibus();
//        
//        return $tipoOnibus::SelectAcentos();
        
    }
    
}

?>