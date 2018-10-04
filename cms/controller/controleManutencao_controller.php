<?php

/*

autor: Eduardo Rocha.
data: 12/04/2018
controller: Manutenções.

    Aparecerá todas as manutenções.
*/

class manutencaoController{
    
    
    public function Listar(){
        
        $manutencao = new Manutencao();
        
        return $manutencao::Select();
        
    }
    
        public function Excluir(){
        
        
        $manuntecao = new Manutencao();
        
        $manuntecao::Delete($manuntecao);
        
        
    }
      
}

?>