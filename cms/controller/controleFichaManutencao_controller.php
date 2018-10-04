<?php

/*

autor: Eduardo Rocha.
data: 12/04/2018
controller: Ficha Manutenções.

    Aparecerá todas as manutenções.
*/

class fichaManutencaoController{
    
    
    public function Listar(){
        
        $manutencao = new Manutencao();
        
        return $manutencao::Select();
        
    }
    
    public function Excluir($idOnibusExcluir){
        
        
        $manuntecao = new Manutencao();
        
        $manuntecao::Delete($idOnibusExcluir);
        
        
    }
    
    public function Buscar($idOnibusExcluir){
        
        $manutecao = new Manutencao();  
        
        
        $manutecao->idOnibus = $idOnibusExcluir;
        
        return $manutecao::SelectByIdFicha($manutecao);
        
    }
    
    public function ExcluirFicha(){
        
        $manutecao = new Manutencao();
            
        $manutencao = $exluirFicha::SelectByIdFicha($manutecao);
        
        $sql= "DELETE FROM tbl_manutencao WHERE idFichaManutncao = idFichaManutncao;";
        
        
        
        
    }   
    
    public function ExcluirOnibus(){
        
        
        $manuntecao = new funcionarioController();
            
        $manuntecao->$idOnibus = $_GET['id'];
            
        $manutencao = $excluirOnibus::SelectById($manuntecao);
        
        $sql= "DELETE FROM tbl_fichamanutencao WHERE idOnibus = _idOnibus;";
        
        
        
        
    }
      
}

?>