<?php


/*

Autor: Vinicius Matias Rodrigues
Data de modificação: 06/04/2018
Controller: Frota

*/



class frotaController{
    
    public function Novo(){
    
    //Caminho onde as imagens serão alocadas
    $upload_dir = "imagens/";
        
    // Para manipular arquivos, deve ser usado "$_FILES"!!!
    // Armazenando o nome e a extensão do arquivo que foi selecionado.
    $nome_arq=basename($_FILES['btnImagem']['name']);
    
        // Verifica o tipo de extensão permitida para o upload do arquivo,
        // usamos o comando "strstr()" para localizar a sequência de caracteres.
        if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif')){

            $upload_file = $upload_dir . $nome_arq;

            if(move_uploaded_file($_FILES['btnImagem']['tmp_name'], $upload_file)){

                $frota = new Frota();
                
//                $frota->titulo_frota = $_POST['titulo_frota'];
                $frota->imagem = $upload_file;
                $frota->descricao = $_POST['txt_sobre'];
                $frota->idTipoOnibus = $_POST['cbx_tipoOnibus'];
//                $frota->tipo = $_POST['cbx_tipoOnibus'];
//                $frota->tipo = $_POST[$m];
//                var_dump ($frota);
                $frota::Insert($frota);

            }else{
                echo("Falha ao mover o arquivo!");
            }

        }
    }
    
    // Trás todos os registros existentes.
    public function Listar(){
        
        $frota = new Frota();
        
        return $frota::Select();
        
    }
    
    // Trás todos os registros existentes.
    public function ListarView($idTipoOnibus){
        
        $frota = new Frota();
        
        return $frota::SelectView($idTipoOnibus);
        
    }
        
    
    // Desativa um passageiro no banco
    public function Desativar(){
        
     $idFrota = $_GET['id'];
        
     $frota = new Frota();
        
     $frota->id = $idFrota ;
        
     $frota::Desativando($frota);
        
    }
    
    // Ativa um passageiro no banco
    public function Ativar(){
        
     $idFrota = $_GET['id'];
        
     $frota = new Frota();
        
     $frota->id = $idFrota ;
        
     $frota::Ativando($frota);
        
    }
    
    
    
  // Deleta um registro existente.
    public function Deletar(){
        
        $idFrota = $_GET['id'];
        
        $frota = new Frota();
        
        $frota->id = $idFrota ;
        
        $frota::Delete($frota);
        
    }
    
    
     // Trás um registro específico existente.
    public function Buscar(){
        
        $id = $_GET['id'];
        
        $frota = new Frota();
        
        $frota->id = $id;
        
        $frotaEdit = $frota::SelectById($frota);
        
        
        $_SESSION['pagina'] = "marketing/frota/frotas_view.php";
//        echo($frota);
        
        require_once("view/partida.php");
        
    }
    
    
       // Atualiza um registro existente.
    public function Editar(){
        
        $id = $_GET['id'];
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

                    $frota = new Frota();

                    $frota->id = $id;
//                    $frota->titulo_frota = $_POST['titulo_frota'];
                    $frota->imagem = $upload_file;
                    $frota->descricao = $_POST['txt_sobre'];
                    $frota->idTipoOnibus = $_POST['cbx_tipoOnibus'];

                    $frota::Update($frota);
                    
                    
//                    var_dump($frota);

                }else{
                    echo("Falha ao mover o arquivo!");
                }

            }
        }else{
            

             $idFrota = $_GET['id'];

             $frota = new Frota();

            $frota->id = $idFrota;
//            $frota->titulo_frota = $_POST['titulo_frota'];
            $frota->imagem = $imagem;
            $frota->descricao = $_POST['txt_sobre'];
            $frota->idTipoOnibus = $_POST['cbx_tipoOnibus'];

            $frota::Update($frota);
            
        }
    }
        
    
    
    
    
    
}



?>