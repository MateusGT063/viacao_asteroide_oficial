<?php
/*

autor: Gabriel de Melo Marcondes.
data: 31/03/2018
controller: Pontos turisticos.

*/
class turismoController{
    
    public function Novo(){
        
        // Caminho da pasta onde as imagens serão armazenadas.
        $upload_dir = "imagens/";

        // Para manipular arquivos, deve ser usado "$_FILES"!!!
        // Armazenando o nome e a extensão do arquivo que foi selecionado.
        $nome_arq = basename($_FILES['btnImagem']['name']);

        // Verifica o tipo de extensão permitida para o upload do arquivo,
        // usamos o comando "strstr()" para localizar a sequência de caracteres.
        if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif')){

            $upload_file = $upload_dir . $nome_arq;

            if(move_uploaded_file($_FILES['btnImagem']['tmp_name'], $upload_file)){

                $turismo = new Turismo();
                
                $turismo->idEpoca = $_POST['cbx_estacoes'];
                $turismo->imagem = $upload_file;
                $turismo->descricao = $_POST['txtDescricao'];
                
                $turismo::Insert($turismo);
                     echo("Controller.");
            }else{
                echo("Falha ao mover o arquivo!");
            }

        }
        
    }
    
    // Trás todos os registros existentes.
    public function Listar(){
        
        $turismo = new Turismo();
        
        return $turismo::Select();
        
    }
    
    public function ListarView(){
        
        $turismo = new Turismo();
        
        return $turismo::SelectView();
        
    }    
    
    	 // Desativa um passageiro no banco
    public function Desativar(){
        
        $idTurismo = $_GET['id'];
        
        $turismo = new Turismo();
        
        $turismo->idPontoTuristico = $idTurismo;
        
        $turismo::Desativando($turismo);
        
    }
    
    // Ativa um passageiro no banco
    public function Ativar(){
        
        $idTurismo = $_GET['id'];
        
        $turismo = new Turismo();
        
        $turismo->idPontoTuristico = $idTurismo;
        
        $turismo::Ativando($turismo);
        
    }
    
    
    
    // Deleta um registro existente.
    public function Deletar(){
        
        $idTurismo = $_GET['id'];
        
        $turismo = new Turismo();
        
        $turismo->idPontoTuristico = $idTurismo;
        
        $turismo::Delete($turismo);
        
    }
    
    // Trás um registro específico existente.
    public function Buscar(){
        
        $idTurismo = $_GET['id'];
        
        $turismo = new Turismo();
        
        $turismo->idPontoTuristico = $idTurismo;
        
        $pontoT = $turismo::SelectById($turismo);
        
        require_once("view/partida.php");
        
    }
    
    // Atualiza um registro existente.
    public function Atualizar(){
        
        $idTurismo = $_GET['id'];
        $imagem = $_GET['imagem'];
        
        if(!empty($_FILES['btnImagem']['name'])){
            // Caminho da pasta onde as imagens serão armazenadas.
            $upload_dir = "imagens/";

            // Para manipular arquivos, deve ser usado "$_FILES"!!!
            // Armazenando o nome e a extensão do arquivo que foi selecionado.
            $nome_arq = basename($_FILES['btnImagem']['name']);

            // Verifica o tipo de extensão permitida para o upload do arquivo,
            // usamos o comando "strstr()" para localizar a sequência de caracteres.
            if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif')){

                $upload_file = $upload_dir . $nome_arq;

                if(move_uploaded_file($_FILES['btnImagem']['tmp_name'], $upload_file)){

                    $turismo = new Turismo();

                    $turismo->idEpoca = $_POST['cbx_estacoes'];
                    $turismo->imagem = $upload_file;
                    $turismo->descricao = $_POST['txtDescricao'];
                    $turismo->idPontoTuristico = $idTurismo;

                    $turismo::Update($turismo);

                }else{
                    echo("Falha ao mover o arquivo!");
                }

            }
        }else{
            
            $turismo = new Turismo();

            $turismo->idEpoca = $_POST['cbx_estacoes'];
            $turismo->imagem = $imagem;
            $turismo->descricao = $_POST['txtDescricao'];
            $turismo->idPontoTuristico = $idTurismo;

            $turismo::Update($turismo);
            
        }
        
    }
    
}

?>