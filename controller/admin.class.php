<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );

class adminController extends appController
{
	function __construct()
	{
		parent::__construct();
		
	}
	
	
	function login(){
		$data['title'] = $data['top_title'] = c('site_name');
		if(!empty($_COOKIE['admin'])){
				$GLOBALS['a']='manage';
				$data['id']=$_COOKIE['admin'];
				$data['admin']=get_admin();
				$data['books']=get_books();
				$data['order']=get_order();
//				setcookie("admin","admin",time()+3600);
				return render($data,'web','main');
		}else{
			return render($data , 'web','main');
		}
	  	
	  }
	
	function islogin(){
		$data['title'] = $data['top_title'] = c('site_name');
		$id=v('id');
		$pwd=v('pwd');
		$sql="select password from admin where name='$id'";
		$pwd_db=get_line($sql);
		if($pwd==$pwd_db['password']){
			$GLOBALS['a']='manage';
			$data['id']=$id;
			$data['admin']=get_admin();
			$data['books']=get_books();
			$data['order']=get_order();
			setcookie("admin",$id);
			return render($data,'web','main');
		}else{
			header("location:index.php?c=guest&a=books");
		}
		
	}

	function add_admin(){
		$name=v('name');
		$pwd=v('pwd');
		$rad=v('radio');
		$sql="insert into admin(name,password,permission) values('$name','$pwd','$rad')";
		run_sql($sql);
//		$GLOBALS['a']='manage';
		return $this->login();
	}


	function delete(){
		$name=v('name');
		$sql="delete from admin where name='$name'";
		run_sql($sql);
		echo "2";
	}

}