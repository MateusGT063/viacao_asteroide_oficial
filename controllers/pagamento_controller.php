<?php

class pagamentoController{
    
    public function cartao(){

        require_once ('views/pagarme/pagarme.php'); 
        
        $pagamento = new Pagamento();
        
        $pagamento->cartao = $_POST['txtCartao'];
        $pagamento->senha = $_POST['txtSenha'];
        $pagamento->nomeCompleto = $_POST['txtName'];
        $pagamento->idCliente = $_SESSION['cliente'];
        $pagamento->cpf = $_SESSION ['cpfUsuario'];
        $pagamento->email = $_SESSION ['email'];
        $pagamento->viagemzinha = $_SESSION['vig'];
        $pagamento->destinoC = $_SESSION ['destinoC'];
        $pagamento->cellphone = $_SESSION['telefoneCliente'];
        
        $pagamento->city = $_SESSION['cidade'];
        $pagamento->sigla = $_SESSION['sigla'];
        $pagamento->bairro = $_SESSION['bairro'];
        $pagamento->logradouro = $_SESSION['logradouro'];
        $pagamento->numero = $_SESSION['numero'];
        $pagamento->cep = $_SESSION['cep'];
        
        
        
        $pagamento::transacao($pagamento);
        
        
        
//        $pagamento::Insert($pagamento);
        
//        var_dump($pagamento);
    }
    
//     public function NovoBoleto(){
//        
//        $boletoCad = new boletoCad();
//        
//        $idViagem = $_GET['idViagem'];
////        echo($idViagem);
//        $acento = $_GET['acento'];
//        $idParada = $_GET['parada'];
//        $idCliente = $_GET['cliente'];
////        $boletoCad->email = $_POST['txtEmail'];
////        $boletoCad->descricao = $_POST['textObs'];
//        
//        $boletoCad->viagem = $idViagem;
//        $boletoCad->acento = $acento;
//        $boletoCad->idParada = $idParada;
//        $boletoCad->idCliente = $idCliente;
//        
////        var_dump($boletoCad);
//     }
//    
//    
}

?>