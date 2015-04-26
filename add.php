<?php 
	$name=$_POST['name'];
	$pwd=md5($_POST['pwd']);
	$radio=$_POST['optionsRadios'];
	header("location:index.php?c=admin&a=add_admin&name=$name&pwd=$pwd&radio=$radio");
