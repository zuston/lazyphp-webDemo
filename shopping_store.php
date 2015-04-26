<?php
	$msg=$_REQUEST['data'];
	$id=$_REQUEST['id'];
	$price=$_REQUEST['price'];
	header("location:index.php?c=guest&a=shopping_store&msg=$msg&id=$id&price=$price");
//	echo $msg;
