<?php

/*

Autor: Gabriel de Melo Marcondes.
Data: 23/04/2018
Controller: Epoca.

Esta controller chama o metodo
que faz o select no banco para
pegar as quatro estações do ano.

*/

class epocaController{
    
    public function Listar(){
        
        $epoca = new Epoca();
        
        return $epoca::Select();
        
    }
    
}

?>