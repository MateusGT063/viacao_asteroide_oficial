<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 26/04/2018
Controller: ônibus.

Esta controller chama o metodo que
fará a listagem dos ônibus na tela.

*/

class onibusController{
    
    public function Listar(){
        
        $bus = new Onibus();
        return $bus::Select();
        
    }
    
}

?>