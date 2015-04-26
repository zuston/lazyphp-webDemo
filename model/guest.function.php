<?php 
/**
 * @return param
 * 获取首页的少量文章
 */
 
 function get_books(){
 	return get_data("select * from books");
 }
   
function get_price($id){
	return get_line("select price from books where id='$id'");
}
  
function get_grap_data(){
	$data=get_data("select * from books order by number asc  limit 5");
	return $data;
}
  
  
  

 