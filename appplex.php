<?php
	
	$uploaddir = '/data/www/media/';
	if(rename($_FILES['arquivo']['tmp_name'] , $uploaddir.$_FILES['arquivo']['name'])){
		chmod ($uploaddir.$_FILES['arquivo']['name'], 0777);
		echo "Enviado!";
	}else{
		echo "Nao enviado!";
	}
?>