<?php
	
	$uploaddir = './media/';
	if(rename($_FILES['arquivo']['tmp_name'] , $uploaddir.$_FILES['arquivo']['name'])){
		chmod ($uploaddir.$_FILES['arquivo']['name'], 0777);
		header("Location: index.php?rt=1");
	}else{
		echo "Nao enviado!";
	}
?>