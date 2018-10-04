<?php

/*

autor: Gabriel de Melo Marcondes.
data: 09/04/2018
controller: Destinos.

Esta classe vai chamar as funções que fazem
ações na tabela de destinos.

*/



class destinoController{
    
    public function Novo(){
        
        // Caminho da pasta onde as imagens serão armazenadas.
        $upload_dir = "imagens/";

        // Para manipular arquivos, deve ser usado "$_FILES"!!!
        // Armazenando o nome e a extensão do arquivo que foi selecionado.
        $nome_arq = basename($_FILES['btnImagem1']['name']);

        // Verifica o tipo de extensão permitida para o upload do arquivo,
        // usamos o comando "strstr()" para localizar a sequência de caracteres.
        if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif')){

            $upload_file = $upload_dir . $nome_arq;

            if(move_uploaded_file($_FILES['btnImagem1']['tmp_name'], $upload_file)){

                
                // Caminho da pasta onde as imagens serão armazenadas.
                    $upload_dir = "imagens/";

                    // Para manipular arquivos, deve ser usado "$_FILES"!!!
                    // Armazenando o nome e a extensão do arquivo que foi selecionado.
                    $nome_arq = basename($_FILES['btnImagem2']['name']);

                    // Verifica o tipo de extensão permitida para o upload do arquivo,
                    // usamos o comando "strstr()" para localizar a sequência de caracteres.
                    if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif')){

                        $upload_file1 = $upload_dir . $nome_arq;

                        if(move_uploaded_file($_FILES['btnImagem2']['tmp_name'], $upload_file1)){


                            $destino = new Destino();

                            $destino->data = $_POST['txt_data'];
                            $destino->hora_partida = $_POST['txt_hora_partida'];
                            $destino->hora_chegada = $_POST['txt_hora_chegada'];
                            $destino->descricao = $_POST['txt_descricao'];
                            $destino->tamanhoRota = $_POST['txt_tamanhoRota'];
                            $destino->valor = $_POST['txt_valor'];
                            $destino->idPontoPartida = $_POST['cbx_pontoPartida'];
                            $destino->idPontoChegada = $_POST['cbx_pontoChegada'];
                            $destino->idOnibus = $_POST['cbx_onibus'];
                            $destino->idEpoca = $_POST['cbx_epoca'];
                            $destino->codCidade = $_POST['cbx_cidadePartida'];
                            $destino->idDestino = $_POST['cbx_cidadeChegada'];
                            $destino->imagem1 = $upload_file;
                            $destino->imagem2 = $upload_file1;
                            
                            
//                            echo($destino->idDestino);
                            $destino::Insert($destino);

//                            var_dump($destino);

            //                $dicas = new Dicas();

            //                $dicas->dica = $_POST['txtLocal'];
            //                $dicas->imagem = $upload_file;
            //                $dicas->descricao = $_POST['txtDescricao'];

            //                $dicas::Insert($dicas);



                        }else{
                            echo("Falha ao mover o arquivo 2!");
            //                var_dump($_FILES);
                        }

                    }
                
               
                
                
            }else{
                echo("Falha ao mover o arquivo 1!");
//                var_dump($_FILES);
            }

        }  
        
    }
    
    
    // Trás todos os registros existentes.
    public function Listar(){
        
        $destino = new Destino();
        
        return $destino::Select();
        
    }
    
    public function ListarVendas(){
        
        $destino = new Destino();
        
        return $destino::SelectVendas();
        
    }    
    
    public function ListarTurismo(){
        
        $destino = new Destino();
        
        return $destino::SelectTurismo();
        
    }     
    
    public function ListarView(){
        
        $destino = new Destino();
        return $destino::SelectView();
    }
    
    // Deleta um registro existente.
    public function Deletar(){
        
        $idViagem = $_GET['id'];
        
        $destino = new Destino();
        
        $destino->idViagem = $idViagem;
        
        $destino::Delete($destino);
        
    }
    
        public function ListarViews($sqlGeral){
        
        $destino = new Destino();
        
        return $destino::SelectViews($sqlGeral);
        
    }
    
    
    
    
    
    // Trás um registro específico existente.
    public function Buscar(){
        
        $idViagem = $_GET['id'];
        
        $destino = new Destino();
        
        $destino->idViagem = $idViagem;
        
        $objPassagem = $destino::SelectById($destino);
        
//        var_dump("TO AQUI");
        
        require_once("view/partida.php");
        
    }
    
    // Atualizar registro.
    public function Editar(){
        
        $idViagem = $_GET['id'];
        $imagem = $_GET['imagem1'];
        $imagem2 = $_GET['imagem2'];
        var_dump($imagem);
        var_dump($imagem2);
        
        if(!empty($_FILES['btImagem1']['name'])){
            // Caminho da pasta onde as imagens serão armazenadas.
            $upload_dir = "imagens/";

            // Para manipular arquivos, deve ser usado "$_FILES"!!!
            // Armazenando o nome e a extensão do arquivo que foi selecionado.
            $nome_arq = basename($_FILES['btImagem1']['name']);

            // Verifica o tipo de extensão permitida para o upload do arquivo,
            // usamos o comando "strstr()" para localizar a sequência de caracteres.
            if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif')){

                $upload_file1 = $upload_dir . $nome_arq;

                if(move_uploaded_file($_FILES['btImagem1']['tmp_name'], $upload_file1)){
                    
                    
                    /*
                        SEGUNDA IMAGEM ;
                    */
                    
                    if(!empty($_FILES['btImagem2']['name'])){
                        // Caminho da pasta onde as imagens serão armazenadas.
                        $upload_dir = "imagens/";

                        // Para manipular arquivos, deve ser usado "$_FILES"!!!
                        // Armazenando o nome e a extensão do arquivo que foi selecionado.
                        $nome_arq = basename($_FILES['btImagem2']['name']);

                        // Verifica o tipo de extensão permitida para o upload do arquivo,
                        // usamos o comando "strstr()" para localizar a sequência de caracteres.
                        if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif')){

                            $upload_file2 = $upload_dir . $nome_arq;

                            if(move_uploaded_file($_FILES['btImagem2']['tmp_name'], $upload_file2)){
                            
                                $dicas = new Destino();
                                $dicas->idViagem = $_GET['id'];
                                $dicas->idPontoPartida = $_POST['cbx_pontoPartida'];
                                $dicas->idPontoChegada = $_POST['cbx_pontoChegada'];
                                $dicas->idDestino= $_POST['cbx_cidadeChegada'];
                                $dicas->codCidade = $_POST['cbx_cidadePartida'];
                                $dicas->hora_partida = $_POST['txt_hora_partida'];
                                $dicas->hora_chegada = $_POST['txt_hora_chegada'];
                                $dicas->tamanhoRota = $_POST['txt_tamanhoRota'];
                                $dicas->idOnibus = $_POST['cbx_onibus'];
                        //        $dicas->idMotorista = $_POST[''];
                                $dicas->imagem1 = $upload_file1;
                                $dicas->imagem2 = $upload_file2;
                                $dicas->data = $_POST['txt_data'];
                                $dicas->descricao = $_POST['txt_descricao'];
                                $dicas->idEpoca = $_POST['cbx_epoca'];
                                $dicas->valor = $_POST['txt_valor'];

                                var_dump($dicas);
                                echo('ta mudando as duas');
                        //        $dicas::Update($dicas);
                                
                            
                                }else{
                                    echo("Falha ao mover o arquivo!");
                                }
                            }

                        }else{
                        
                        $destino = new Destino();

                        $destino->idViagem = $idViagem;
                        $destino->idPontoPartida = $_POST['cbx_pontoPartida'];
                        $destino->idPontoChegada = $_POST['cbx_pontoChegada'];
                        $destino->idDestino= $_POST['cbx_cidadeChegada'];
                        $destino->codCidade = $_POST['cbx_cidadePartida'];
                        $destino->hora_partida = $_POST['txt_hora_partida'];
                        $destino->hora_chegada = $_POST['txt_hora_chegada'];
                        $destino->tamanhoRota = $_POST['txt_tamanhoRota'];
                        $destino->idOnibus = $_POST['cbx_onibus'];
                        $destino->data = $_POST['txt_data'];
                        $destino->descricao = $_POST['txt_descricao'];
                        $destino->idEpoca = $_POST['cbx_epoca'];
                        $destino->valor = $_POST['txt_valor'];

                        $destino->imagem1 = $upload_file1;
                        $destino->imagem2 = $imagem2;
                        
                        echo(' mudou 1 nenhuma');
//                        $destino::Update($dicas);
                    }
                }else{
                    echo("Falha ao mover o arquivo!");
                }

            }
        }else{
            
            $destino = new Destino();

            $destino->idViagem = $idViagem;
            $destino->idPontoPartida = $_POST['cbx_pontoPartida'];
            $destino->idPontoChegada = $_POST['cbx_pontoChegada'];
            $destino->idDestino= $_POST['cbx_cidadeChegada'];
            $destino->codCidade = $_POST['cbx_cidadePartida'];
            $destino->hora_partida = $_POST['txt_hora_partida'];
            $destino->hora_chegada = $_POST['txt_hora_chegada'];
            $destino->tamanhoRota = $_POST['txt_tamanhoRota'];
            $destino->idOnibus = $_POST['cbx_onibus'];
            $destino->data = $_POST['txt_data'];
            $destino->descricao = $_POST['txt_descricao'];
            $destino->idEpoca = $_POST['cbx_epoca'];
            $destino->valor = $_POST['txt_valor'];

                        
            $destino->imagem1 = $imagem;
                        
            $destino->imagem2 = $imagem2;
            
            echo('Nao mudo nenhuma ft');
            
        }
                   
        
    }
    
    
    public function buscarViagem(){
        if(isset($_GET['idViagem'])){
            
//            $idViagem = $_GET['idViagem'];
            
            $idViagem = $_GET['idViagem'];
            
            
//            echo('o aqui cariao');
            $destino = new Destino();
        
            $destino->idViagem = $idViagem;
        
            return $destino::nhaaaa($destino);
        } else {
//            echo 'to no else pai';
            $destino = new Destino();
            
//            return $destino::nhaaaa($destino);
            return $destino::selectCompras($destino);
        }
    }
    
    /*
        Função para pegar a parada que a
        pessoa vai embarcar para a viagem
    */
    public function buscaParada(){
        
        $idPontoPartida = $_GET['paradaId'];
//        echo($idPontoPartida);
        $paradaSelecionada = new Destino();
        
        $paradaSelecionada->idPontoPartida = $idPontoPartida;
        
        return $paradaSelecionada::selectParadaSelecionada($paradaSelecionada);
    }
    
    /*
        Função que lista as viagens de 
        acordo com a pesquisa feita 
        na página home do site.
    */
    public function Pesquisa(){
        
        $destino = new Destino();
        $destino->codCidade = $_POST['origem_pesquisa'];
        $destino->idDestino = $_POST['destino_pesquisa'];
        $destino->data = $_POST['dt'];
        return $destino::Seach($destino);
        
    }
    
    
}

?>



