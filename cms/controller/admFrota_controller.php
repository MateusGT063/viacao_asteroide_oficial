<?php

/*

autor: Vinicius Matias Rodrigues.
data: 16/04/2018
controller: Administração de Frotas.

*/


class admFrotasController{
    
    //Inserir Registro
    public function Novo(){
        
        $contato = new AdmFrota();
        
        
        $contato->placa = $_POST['txtPlaca'];
        $contato->fabricacao = $_POST['txtFabricacao'];
        $contato->descricao = $_POST['txt_DescrFrota'];
        $contato->idTipoOnibus = $_POST['cbx_Frota'];
        
        $contato::Insert($contato);
        
    }
    
    
    
      public function Listar(){
        
        $contato = new AdmFrota();
        
        return $contato::Select();
        
    }
    
    
       public function Excluir(){
        
        
        $contato = new AdmFrota();
        
        $contato->idOnibus = $_GET['id'];
        
        $contato::Delete($contato);
        
    }
    
     // Desativa um passageiro no banco
    public function Desativar(){
        
        $idOnibus = $_GET['id'];
        
        $contato = new AdmFrota();
        
         $contato->idOnibus = $idOnibus;
       
        $contato::Desativando($contato);
        
    }
    
    // Ativa um passageiro no banco
    public function Ativar(){
        
        $idOnibus = $_GET['id'];
        
        $contato = new AdmFrota();
        
        $contato->idOnibus = $idOnibus ;
        
        $contato::Ativando($contato);
        
    }

    
        // Buscar registros.
    public function Buscar(){
        
        $contato = new AdmFrota();
        
        $contato->idOnibus = $_GET['id'];
        
        $listadmFrota = $contato::SelectById($contato);
        
        require_once('view/partida.php');
        
    
    }
    
    // Atualizar registro.
    public function Editar(){
        
        $contato = new AdmFrota();
        
        $contato->idOnibus = $_GET['id'];
        $contato->placa = $_POST['txtPlaca'];
        $contato->fabricacao = $_POST['txtFabricacao'];
        $contato->descricao = $_POST['txt_DescrFrota'];
        $contato->idTipoOnibus = $_POST['cbx_Frota'];
        
        $contato::Update($contato);
        
    }
    
}





?>