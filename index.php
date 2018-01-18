<!doctype html>
<html lang="pt-br">
  	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="style.css">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  				

	    <title>Aplicação Plex</title>
  	</head>
	<body>
		<?php header("Content-type: text/html; charset=utf-8"); ?>
	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

	    <?php
	    	$resultado = isset($_GET["rt"])?$_GET["rt"]:"[0]";
	    	if($resultado == 1){
	    		echo "Enviado!";
	    	}
	    ?>

		<div class="container-fluid">
			<div class="topo">
				<div class="col-md-12">
					<h1 align="center">Aplicação Plex!</h1>
				</div>
			</div>
	  	

		  	<div class="col-md-12" id="corpo" align="center">
		  		
		  		<form method="POST" action="appplex.php" ENCTYPE="multipart/form-data">
					Selecione o arquivo: <input type="file" name="arquivo">
					<br /><br />
					<button type="submit" class="btn btn-primary">Enviar</button>

				</form>
			</div>

			<div class="col-md-12" id="footer" align="center">
				
				<a href="index.php">
					<img src="./logo.png" class="img-responsive" alt="Imagem responsiva" width="100px" height="26px">
				</a>
			</div>
			

	  	</div>


	</body>
</html>