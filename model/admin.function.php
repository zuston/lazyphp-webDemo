<?php
function get_books(){
	return get_data("select * from books");
}
function get_admin(){
	return get_data("select * from admin");
}
function get_order(){
	return get_data("select * from books where number<200");
}
