<?php 
	$id=$_POST['id'];
	$pwd=md5($_POST['pwd']);
	header("location:index.php?c=admin&a=islogin&id=$id&pwd=$pwd");
