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
    
}

?>