<?php 

/**

    Autor: Mateus Silva de Abreu
    Data: 12/04/2018
    Controller: Sobre a Empresa

**/

class sobreempresaController {
    
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

                $sobreEmpresa = new Sobre_empresa();
                
                $sobreEmpresa->textoSobre = $_POST['txt_sobre_empresa'];
                $sobreEmpresa->imagemSobre = $upload_file;
                
                $sobreEmpresa::Insert($sobreEmpresa);
//                 var_dump($sobreEmpresa);
               
                
            }else{
                echo("Falha ao mover o arquivo!");
            }

        }
        
    }
    
    public function Listar(){
                
        $sobre_empresa = new Sobre_empresa();
                
        return $sobre_empresa::Select();
                
    }   
    
        public function ListarView(){
        
        $sobre_empresa = new Sobre_empresa();
        
        return $sobre_empresa::SelectView();
        
    }
    
     // Desativa um passageiro no banco
    public function Desativar(){
        
        $idVersao = $_GET['id'];
        
        $sobre_empresa = new Sobre_empresa();
        
        $sobre_empresa->idVersao = $idVersao;
        
        $sobre_empresa::Desativando($sobre_empresa);
        
    }
    
    // Ativa um passageiro no banco
    public function Ativar(){
        
        $idVersao = $_GET['id'];
        
        $sobre_empresa = new Sobre_empresa();
        
        $sobre_empresa->idVersao = $idVersao;
        
        $sobre_empresa::Ativando($sobre_empresa);
        
    }
    

    
    // Deleta um registro existente.
    public function Deletar(){
        
        $idVersao = $_GET['id'];
        
        $sobre_empresa = new Sobre_empresa();
        
        $sobre_empresa->idVersao = $idVersao;
        
        $sobre_empresa::Delete($sobre_empresa);
        
    } 
  
    // Trás um registro específico existente.
    public function Buscar(){
        
        $idVersao = $_GET['id'];
        
        $sobre_empresa = new Sobre_empresa();
        
        $sobre_empresa->idVersao = $idVersao;
        
        $localSobre_empresa = $sobre_empresa::SelectById($sobre_empresa);
        
        require_once("view/partida.php");
        
    }    
    
    // Atualizar registro.
    public function Editar(){
        
        $idVersao = $_GET['id'];
//        $imagem = $_GET['imagem'];
        $imagemSobre = $_GET['imagemSobre'];
        
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
                    
                    $sobre_empresa = new Sobre_empresa();
                    $sobre_empresa->idVersao = $_GET['id'];
                    $sobre_empresa->textoSobre = $_POST['txt_sobre_empresa'];
                    $sobre_empresa->imagemSobre = $upload_file;

                    $sobre_empresa::Update($sobre_empresa);
                    
                }else{
                    echo("Falha ao mover o arquivo!");
                }

            }
        }else{
            
            $sobre_empresa = new Sobre_empresa();

            $sobre_empresa->idVersao = $idVersao;
            $sobre_empresa->imagemSobre =$imagemSobre;
            $sobre_empresa->textoSobre = $_POST['txt_sobre_empresa'];

            $sobre_empresa::Update($sobre_empresa);
            
        }
        
    }
        
}    
?>