<?php
if( !defined('IN') ) die('bad request');
include_once( AROOT . 'controller'.DS.'app.class.php' );

class guestController extends appController
{
	function __construct()
	{
//		$data['title'] = $data['top_title'] = c('site_name');
		parent::__construct(); 
	}
	
	function shopping_store(){
		$msg=v('msg');
		$id=v('id');
		$price=v('price');
		setcookie($id,$msg,time()+3600);
		setcookie(100-$id,$price,time()+3600);
		
//		print_r($_COOKIE);
		
//		echo g('i');
//		$GLOBALS['i']=g('i')+1;
		echo "1";
	}
	
	function books(){
		$data['title'] = $data['top_title'] = c('site_name');
		$data["books"]=get_books();
		$data['grap']=get_grap_data();
		return render($data,'web','main');
	}
	
	function shopping_car(){
		$data['title'] = $data['top_title'] = c('site_name');
//		$data["books"]=get_books();
		return render($data,'web','main');
	}
	
	
	function shopping_buy(){
		
		$id=v('id');
		$msg=run_sql("update books set number=number-1 where id=1");
//		echo $id;
		echo $msg;
	}
	
	
}
	