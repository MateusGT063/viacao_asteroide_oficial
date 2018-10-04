<?php 


	$id = $_POST['id'];


?>
<html>
	<head> 
		<title> Passageiros </title>
	</head>
	
	<script>
$(document).ready(function() {
    
  $(".fechar").click(function() {
    //$(".modalContainer").fadeOut();
	$(".modalContainer").slideToggle(1000);
  });
});
	
	</script>
	
<body>

	<div id="btFechar">
		<a href="#" class="fechar">Fechar(x)</a>
	</div>
	<div>
		<?php
//            echo($id);
//            echo ("select * from tbl_passagem where idPassagem =".$id);
            
            //$sql = "select * from ";
        
		?>
        
        
        
        
        
        <div id="titleModalPassageiros">
            Passageiros
        </div>
        <div id="seguraPass">
            
            <div id="seguraMenuP">
                <div class="menusP">
                    Nome:
                </div>
                <div class="menusP">
                    Rg:
                </div>
                <div class="menusP">
                    Telefone:
                </div>
                <div class="menusP">
                    Email:
                </div>
            </div>
            <div id="seguraCp">
            <?php
                require_once('controller/passagem_controller.php');
                require_once('models/passagem_class.php');
                // Instancia o Controller.
                $controller_passageiros = new passagemController();
                // Chama o metodo para listar todos os registros.

                $list = $controller_passageiros::ListarPassageiros($id);

                $cont = 0;

            while($cont < count($list)){

            ?>

                    <div class="campoPassageiros">
                        <?php echo($list[$cont]->nomeCompleto);?>
                    </div>
                    <div class="campoPassageiros">
                        <?php echo($list[$cont]->rg);?>
                    </div>
                    <div class="campoPassageiros">
                        <?php echo($list[$cont]->telefone);?>
                    </div>
                    <div class="campoPassageiros">
                        <?php echo($list[$cont]->email);?>
                    </div>
<!--
            
-->
            <?php 
                $cont+=1;
                }
            ?>
            </div>
        </div>
        
        
        
	</div>

</body>
</html>