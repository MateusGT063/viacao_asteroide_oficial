<?php

/*

autor: Vinicius Matias.
data: 19/04/2018
controller: Manutenções.

    Aparecerá todas as manutenções.
*/

class fichaManutencaoController{
    
    public function Excluir($idOnibusExcluir){
        
        
        $manuntecao = new Manutencao();
        
        $manuntecao::Delete($idOnibusExcluir);
        
        
    }
      
}

?>