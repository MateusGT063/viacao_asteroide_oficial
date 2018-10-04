<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 26/04/2018
Controller: ponto de chegada.

Esta controller chama o metodo que fará
a listagem dos pontos de partida na tela.

*/

class pontoChegadaController{
    
    public function Listar(){
        
        $pontoChegada = new PontoChegada();
        return $pontoChegada::Select();
        
    }
    
}

?>