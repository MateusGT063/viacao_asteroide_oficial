<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 23/04/2018
Controller: Estado.

Esta controller chama o metodo
para pegar todos os estados
do banco.

*/

class estadoController{
    
    public function Listar(){
        
        $estado = new Estado();
        
        return $estado::Select();
        
    }
    
}

?>