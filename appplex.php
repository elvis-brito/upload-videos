<?php
	$ticket = isset($_POST["ticket"])?$_POST["ticket"]:"[Nao informado]";

	$arquivo = $_FILES['arquivo']['name'];
	$separa = explode(".",$arquivo);
	$separa = array_reverse($separa);
	$tipo = $separa[0];

	$ticket = $ticket.".".$tipo;

	$uploaddir = './media/';

	if(move_uploaded_file($_FILES['arquivo']['tmp_name'] , $uploaddir.$ticket)){
		chmod ($uploaddir.$_FILES['arquivo']['name'], 0777);
		header("Location: index.php?rt=1");
	}else{
		echo "Nao enviado!";
	}
?>