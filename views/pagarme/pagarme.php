<?php 

//echo 'pagamento sendo feito...';

//class Transacao{
////    Dados relacionados ao produto
//    public $id;
//    public $amout; //Valor da compra
//    public $payment_method; // Forma de pagamento do Produto
//    public $title; // Nome do Item- Numero da Poltrona (poderia ser um array, mas no nosso caso so vai ser de 1 em 1)
//    public $quantity;
//    public $tangible;
//    public $type;
//    
//    /* ------------------- */
//    
//    //Dados relacionados a compra utilizando o Cartão (caso a compra seja por cartao)
//    
//    public $card_number;
//    public $card_cvv;
//    public $card_brand;
//    public $card_expiration_month;
//    public $card_expiration_year;
//    public $card_holder_name;
//    public $installments;
//    
//    /* --------------------- */
//    
//    //Dados relacionado ao Cliente (Usado no array customer)
//    
//    public $external_id;
//    public $name;
//    public $country;
//    public $cpf;
//    public $phone_numbers;
//    public $email;
//    
//    /* ------------------------- */
//    
//    //Dados relacionados ao endereco do Cliente (Usado no Billing)
//    
//    public $street;
//    public $street_number;
//    public $state;
//    public $city;
//    public $neighborhood;
//    public $zipcode;
//    
//    public function efetuarTransacao($req){
//        try{
////            var_dump($req);   
//            $transaction = new PagarMe_Transaction($req);
//            $transaction ->charge();
//            
//            return true;
//        } 
//    }
//}

 class Pagamento {
     
     public function transacao($pagamento){

         $apiKey = 'ak_test_rjp1rKRcwNGyearZDawjIyTjMcST6p';
         
         require_once 'pagarme-php/Pagarme.php';

//         PagarMe::setApiKey('ak_test_rjp1rKRcwNGyearZDawjIyTjMcST6p');
         
         PagarMe::setApiKey($apiKey);
         
         
         $transaction = new PagarMe_Transaction(array(
          "amount" => 2300,
          "card_number" => '4096029760098117',
//          "card_number" =>  $pagamento->cartao,
//          "card_cvv" => $pagamento->senha,
          "card_cvv" => '123',
          "card_expiration_month" => "09",
          "card_expiration_year" => "22",
          "card_holder_name" => $pagamento->nomeCompleto,
          "payment_method" => "credit_card",
          "customer" => array(
              "external_id" => $pagamento->idCliente,
              "name" => $pagamento->nomeCompleto,
              "type" => "individual",
              "country" => "br",
              "documents" => array(
                array(
                  "type" => "cpf",
                  "number" => "00000000000"
                )
              ),
              "phone_numbers" => array( "+5511923781202"),
              "email" => $pagamento->email
          ),
          "billing" => array(
            "name" => $pagamento->nomeCompleto,
            "address" => array(
                "country" => "br",
                "street" => $pagamento->logradouro,
//                "street" => "sem nada",
                "street_number" => $pagamento->numero,
//                "street_number" => "11",
                "state" => "sp",
//                "city" => $pagamento->city,
                "city" => "Sao Paulo",
                "neighborhood" => $pagamento->bairro,
//                "neighborhood" => "sao goncalo",
//                "zipcode" => $pagamento->cep
                "zipcode" => "06449360"
            )
          ),
          "items" => array(
            array(
              "id" => $pagamento->viagemzinha,
              "title" => $pagamento->destinoC,
              "unit_price" => 8900,
              "quantity" => 1,
              "tangible" => true
            )
          )
        ));

        $transaction -> charge();
         
//         echo ($transaction);
         header ('location: index.php');
     }
 }



?>