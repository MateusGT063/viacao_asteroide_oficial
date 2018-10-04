
<link rel="stylesheet" type="text/css" href="view/adm/passagem/css/style2.css">

<script src="view/adm/passagem/js/jquery2.js"></script>

<script>
    
$(document).ready(function() {
    

  $(".ver").click(function() {
//    alert(idIten);  
    $(".modalContainer").slideToggle(2000);
	//slideToggle
	//toggle
	//FadeIn
  });
    
    
    
    
});   
    
    function Modal(idIten){  
//        alert(idIten);
		$.ajax({
			type: "POST",
			url: "modal.php",
			data: {id:idIten},
			success: function(dados){
				$('.modal').html(dados);
			}
		});
	}
//    
   
	
	

</script>


<form name="CRUD de Dicas" method="post" action="router.php" enctype="multipart/form-data">
                    <div id="area_adm_passagem">
                        <div id="caixa_dentro_area_adm_passagem">
                            <div id="titulo_pagina_passagem">
                                Passagem
                            </div>

                            <div id="caixaPassagem">
                                <div id="titlePassagem">
                                    <div class="tituloPassagem1">
                                        Nome Destino:
                                    </div>
                                    <div class="tituloPassageiros1">
                                        Data:
                                    </div>
                                    <div class="tituloPassageiros1">
                                        Hora:
                                    </div>
                                    <div class="tituloPassagem2">
                                        Onibus:
                                    </div>
                                    <div class="tituloPassagem2">
                                        Passageiros:
                                    </div>
                                </div>
                                <div id="caixaCrescePassagem">
                                    
                                    
                                    <?php
                                        require_once('controller/passagem_controller.php');
                                        require_once('models/passagem_class.php');
                                    // Instancia o Controller.
                                        $controller_passagem = new passagemController();

                                    // Chama o metodo para listar todos os registros.
                                                
                                    $list = $controller_passagem::Listar();

                                                
                                    $cont = 0;
       
                                    while($cont < count($list)){

                                            
                                    ?>
                                    
                                    <div class="conteudoPassagem">
                                        <?php echo($list[$cont]->destino) ; ?>
                                    </div>
                                    <div class="conteudoPassagem">
                                        <?php echo($list[$cont]->dataEmbarque);?>
                                    </div>
                                    <div class="conteudoPassagem">
                                        <?php echo($list[$cont]->horaEmbarque);?>
                                    </div>
                                    <div class="conteudoPassagem">
                                        <?php echo($list[$cont]->tipoOnibus);?>
                                    </div>
                                    <div class="conteudoPassagem">
                                        
                                        <a class="ver" href="#" onclick="Modal('<?php echo($list[$cont]->idViagem);?>');" >
                                            <img src="icones/visualizar.png" width="29">
                                        </a>
                                        
                                        
                                        
                                    </div>
                                    <?php 
                                        $cont+=1;
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

