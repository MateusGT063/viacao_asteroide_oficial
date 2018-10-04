<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 26/04/2018
Controller: ponto de partida.

Esta controller chama o metodo que fará
a listagem dos pontos de partida na tela.

*/

class pontoPartidaController{
    
    public function Listar(){
        
        $pontoPartida = new PontoPartida();
        return $pontoPartida::Select();
        
    }
    
}

?>