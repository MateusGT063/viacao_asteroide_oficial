<?php
/*

autor: Gabriel de Melo Marcondes.
data: 31/03/2018
controller: Pontos turisticos.

*/
class dicasController{
    
    public function Novo(){
        
        // Caminho da pasta onde as imagens serão armazenadas.
        $upload_dir = "imagens/";

        // Para manipular arquivos, deve ser usado "$_FILES"!!!
        // Armazenando o nome e a extensão do arquivo que foi selecionado.
        $nome_arq = basename($_FILES['btImagem']['name']);

        // Verifica o tipo de extensão permitida para o upload do arquivo,
        // usamos o comando "strstr()" para localizar a sequência de caracteres.
        if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif')){

            $upload_file = $upload_dir . $nome_arq;

            if(move_uploaded_file($_FILES['btImagem']['tmp_name'], $upload_file)){

                $dicas = new Dicas();
                
                $dicas->dica = $_POST['txtLocal'];
                $dicas->imagem = $upload_file;
                $dicas->descricao = $_POST['txtDescricao'];
                
                $dicas::Insert($dicas);
                
               
                
            }else{
                echo("Falha ao mover o arquivo!");
            }

        }
        
    }
    
    // Trás todos os registros existentes.
    public function Listar(){
        
        $dicas = new Dicas();
        
        return $dicas::Select();
        
    }
        // Trás todos os registros existentes.
    public function ListarView(){
        
        $dicas = new Dicas();
        
        return $dicas::SelectView();
        
    }
    
    // Deleta um registro existente.
    public function Deletar(){
        
        $idDicas = $_GET['id'];
        
        $dicas = new Dicas();
        
        $dicas->idDicas = $idDicas;
        
        $dicas::Delete($dicas);
        
    }
    
    // Trás um registro específico existente.
    public function Buscar(){
        
        $idDicas = $_GET['id'];
        
        $dicas = new Dicas();
        
        $dicas->idDicas = $idDicas;
        
        $localDica = $dicas::SelectById($dicas);
        
        require_once("view/partida.php");
        
    }
    
    // Desativa um passageiro no banco
    public function Desativar(){
        
        $idDicas = $_GET['id'];
        
        $dicas = new Dicas();
        
        $dicas->idDicas = $idDicas;
        
        $dicas::Desativando($dicas);
        
    }
    
    // Ativa um passageiro no banco
    public function Ativar(){
        
        $idDicas = $_GET['id'];
        
        $dicas = new Dicas();
        
        $dicas->idDicas = $idDicas;
        
        $dicas::Ativando($dicas);
        
    }
    
    
    // Atualizar registro.
    public function Editar(){
        
        $idDicas = $_GET['id'];
        $imagem = $_GET['imagem'];
        
        if(!empty($_FILES['btImagem']['name'])){
            // Caminho da pasta onde as imagens serão armazenadas.
            $upload_dir = "imagens/";

            // Para manipular arquivos, deve ser usado "$_FILES"!!!
            // Armazenando o nome e a extensão do arquivo que foi selecionado.
            $nome_arq = basename($_FILES['btImagem']['name']);

            // Verifica o tipo de extensão permitida para o upload do arquivo,
            // usamos o comando "strstr()" para localizar a sequência de caracteres.
            if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif')){

                $upload_file = $upload_dir . $nome_arq;

                if(move_uploaded_file($_FILES['btImagem']['tmp_name'], $upload_file)){
                    
                    $dicas = new Dicas();
                    $dicas->idDicas = $_GET['id'];
                    $dicas->dica = $_POST['txtLocal'];
                    $dicas->imagem = $upload_file;
                    $dicas->descricao = $_POST['txtDescricao'];

                    $dicas::Update($dicas);
                    
                    
                }else{
                    echo("Falha ao mover o arquivo!");
                }

            }
        }else{
            
            $dicas = new Dicas();

            $dicas->idDicas = $idDicas;
            $dicas->dica = $_POST['txtLocal'];
            
            $dicas->imagem = $imagem;
            $dicas->descricao = $_POST['txtDescricao'];

            $dicas::Update($dicas);
            
        }
        
    }
    
}

?>