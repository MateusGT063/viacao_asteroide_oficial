<?php

/*

autor: Eduardo Rocha and Mateus Silva.
data: 12/04/2018 - 25/04/2018
controller: Passageiros.

Select dos passageiros e seu destino
*/

class passageirosController{
    
    public function Novo(){
        
        // Istancia a classe "Passageiros" do arquivo "passageiros_class".
        $passageiros = new Passageiros();
        
        // Guarda os valores passados por metodo via post em cada variavel da classe "Funcionario".
        $funcionario->nome = $_POST['txt_nome'];
        
        // Chama o método "Insert" passando as variáveis, para inserir o novo registro.
        $funcionario::Insert($funcionario);
        
    }
    
    public function Listar(){
        
        $passageiros = new Passageiros();
        
        return $passageiros::Select();
        
    }
    
    // Deleta um passageiro existente.
    public function Deletar(){
        
        $idPassagem = $_GET['id'];
        
        $passageiros = new Passageiros();
        
        $passageiros->idPassagem = $idPassagem;
        
        $passageiros::Delete($passageiros);
        
    }
    
    // Desativa um passageiro no banco
    public function Desativar(){
        
        $idPassagem = $_GET['id'];
        
        $passageiros = new Passageiros();
        
        $passageiros->idPassagem = $idPassagem;
        
        $passageiros::Desativando($passageiros);
        
    }
    
    // Ativa um passageiro no banco
    public function Ativar(){
        
        $idPassagem = $_GET['id'];
        
        $passageiros = new Passageiros();
        
        $passageiros->idPassagem = $idPassagem;
        
        $passageiros::Ativando($passageiros);
        
    }
      
}

?>