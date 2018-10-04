<?php

function Upload($nomeFile){
    
    // Caminho da pasta onde as imagens serão armazenadas.
    $upload_dir = "imagens/";

    // Para manipular arquivos, deve ser usado "$_FILES"!!!
    // Armazenando o nome e a extensão do arquivo que foi selecionado.
    $nome_arq = basename($_FILES[$nomeFile]['name']);

    // Verifica o tipo de extensão permitida para o upload do arquivo,
    // usamos o comando "strstr()" para localizar a sequência de caracteres.
    if(strstr($nome_arq,'.jpg') || strstr($nome_arq,'.png') || strstr($nome_arq,'.gif')){

        $upload_file = $upload_dir . $nome_arq;

        if(move_uploaded_file($_FILES[$nomeFile]['tmp_name'], $upload_file)){
            
            return $upload_file;
            
        }else{
            return "Falha ao mover o arquivo!";
        }

    }
    
}

?>