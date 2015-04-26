<?php 
	$id=$_REQUEST['id'];
	setcookie($id,"");
	header("location:index.php?c=guest&a=shopping_car");
