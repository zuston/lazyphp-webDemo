<?php 
	$name=$_POST['name'];
	header("location:index.php?c=admin&a=delete&name=$name");
