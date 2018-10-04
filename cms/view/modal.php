<?php 
	$id = $_POST['id'];


?>
<html>
	<head> 
		<title> Teste Modal </title>
	</head>
	
	<script>
$(document).ready(function() {

  $(".fechar").click(function() {
    //$(".modalContainer").fadeOut();
	//$(".modalContainer").slideToggle(3000);
  });
});
	
	</script>
	
<body>

	<div>
		<a href="#" class="fechar">Fechar(x)</a>
	</div>
	<div>
        ahueeeeee
		<?php
            echo ("select * from ");
        
            //$sql = "select * from ";
        
		?>
		ID: <?php echo($id); ?>
	</div>

</body>
</html>