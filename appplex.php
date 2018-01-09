<?php
	$uploaddir = '/data/www/media/';
	if(rename($_FILES['arquivo']['tmp_name'] , $uploaddir.$_FILES['arquivo']['name'])){
		echo "Enviado!";
	}else{
		echo "Nao enviado!";
	}
?>