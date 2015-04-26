<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $top_title; ?></title>
		<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="static/css/font-awesome.min.css"/> 
		<link rel="stylesheet" type="text/css" href="static/css/mystyle.css"/>
		<link rel="stylesheet" type="text/css" href="static/css/my_icon_round.css"/> 
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script> 
		<script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/4.0.1/highcharts.js"></script>
		<style>
			body{	
				font-family: "微软雅黑";
			}
		</style>
	</head>
	<body>
		
		
		<?php
		include_once (dirname(__FILE__)) . DS . "header.tpl.html";
		?>


		<!--
		/*
		 * show the parts(admin/content/guest)
		 */
		-->
		<?php
//		if (g('gs')) {
//			include_once (dirname(__FILE__)) . DS . "info.tpl.html";
//			
//		} else if(g('c')=='admin'){
//			
//			include_once(dirname(__FILE__)).DS.'main'.DS.g('a').".tpl.html";
//			
//		}else {
//			
//			include_once (dirname(__FILE__)) . DS . g('a') . ".tpl.html";
//			
//			if(g('a')=='content'){
//				include_once(dirname(__FILE__)).DS.'side'.DS."modal.tpl.html";
//			}
//			
//		}
//		if(g('a')=="books"){
//			include_once(dirname(__FILE__)).'/'.g('a').'.tpl.html';
//		}elseif(g('a')=="shopping_car"){
//			include_once(dirname(__FILE__)).'/'.g('a').'.tpl.html';
//		}elseif(g('c')=='admin'&&g('c')=='login'){
//			include_once(dirname(__FILE__)).'/'.g('a').'.tpl.html';
//		}


		include_once(dirname(__FILE__)).'/'.g('a').'.tpl.html';
		?>
		
		
		
		<?php
		include_once (dirname(__FILE__)) . '/' . "footer.tpl.html";
		?>
		
		
		
		   <!--<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>-->
		   <!--<script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/4.0.1/highcharts.js"></script>-->
		   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		   
		   <!--
		   	the js is the  register's process including all the registering process
		   	-->
		   <script type="text/javascript" src="static/script/myjquery.js"></script> 
		   
		   
		   <!--
		   	this is the login register process only when  the c=admin&a=login
		   	-->
		   <script type="text/javascript" 
		   <?php if(g('c')=='admin'&&g('a')=='login'):?>src="static/script/myLogin.js"
		   <?php endif;?>>
		   </script>
		   
		   
		   
		   <!--
		   	the js is provided to insert the article into the db(ajax) 
		   	
		   	-->
		   <script type="text/javascript" 
		   <?php if(g('c')=='admin'):?>src="static/script/myAdminInsertArticle.js"
		   <?php endif;?>>
		   </script>
		   
		 <!--<script type="text/javascript" src="static/script/myAdminInsertArticle.js">
		   	
		   </script>-->
	</body>
</html>





