<?php

class boletoController{
    
    public function NovoBoleto(){
        
        $boletoCad = new boletoCad();
        
        $idViagem = $_GET['idViagem'];
//        echo($idViagem);
        $acento = $_GET['acento'];
        $idParada = $_GET['parada'];
        $idCliente = $_GET['cliente'];
//        $boletoCad->email = $_POST['txtEmail'];
//        $boletoCad->descricao = $_POST['textObs'];
        
        $boletoCad->viagem = $idViagem;
        $boletoCad->acento = $acento;
        $boletoCad->idParada = $idParada;
        $boletoCad->idCliente = $idCliente;
        
//        var_dump($boletoCad);
        
        $boletoCad::Insert($boletoCad);
     }
    
    public function selecionarViagensCliente($numeroCliente){
        
        $boletoList = new boletoCad();
        
        
        $idCliente = $numeroCliente;
        
//        $boletoCad->email = $_POST['txtEmail'];
//        $boletoCad->descricao = $_POST['textObs'];
        
        $boletoList->idCliente = $idCliente;
        
//        var_dump($boletoList);
        
        return $boletoList::Select($boletoList);
     }
    
    
    public function selecionarPerfilCliente($numeroCliente){
        
        $boletoUser = new boletoCad();
        
        
        $idCliente = $numeroCliente;
        
//        $boletoCad->email = $_POST['txtEmail'];
//        $boletoCad->descricao = $_POST['textObs'];
        
        $boletoUser->idCliente = $idCliente;
        
//        var_dump($boletoList);
        
        return $boletoUser::SelectPerfil($boletoUser);
     }
    
    
    public function listaInfBoleto(){
        
        echo 'to aq';
//        $boletoUser = new boletoCad();
    
        
//        return $boletoUser::SelectInf();
     }
    
}

?>