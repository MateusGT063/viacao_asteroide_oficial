<?php

class contatosCadController{
    
    public function NovoCont(){
        
        $usuarioCad1 = new contatosCad();
        
        $usuarioCad1->email = $_POST['txtEmail'];
        $usuarioCad1->descricao = $_POST['textObs'];
        
//        var_dump($usuarioCad1);
        
        $usuarioCad1::Insert($usuarioCad1);
    }
    
    public function acentosUsados(){
        
        $acentosUsados = new contatosCad();
        
        $idViagem = $_SESSION['vig'];
        
//        echo ($idViagem);
        
//        var_dump($usuarioCad1);
        
        return $acentosUsados::acentosUsados($idViagem);
    }
}

?>