<?php

/*

autor: Eduardo Rocha.
data: 17/04/2018
controller: Passagem.

Select de passagem
*/

class passagemController{
    
    
    public function Listar(){
        
        $passagem = new Passagem();
        
        return $passagem::Select();
        
    }
    
    
    public function ListarView($sqlGeral){
        
        $passagem = new Passagem();
        
        return $passagem::SelectView($sqlGeral);
        
    }
    
    
    public function ListarPassageiros($idViagem){
        $passageiros = new Passagem();
        
        return $passageiros::SelectPassageiros($idViagem);
    }
}

?>