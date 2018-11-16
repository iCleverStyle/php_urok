<?php

function articles_all() {
	$art1 = ["id"=>1, "title"=>"Заголовок 1", "date"=>"2018-11-15", "content"=>"Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст...Какой-то текст..."];
	$art2 = ["id"=>2, "title"=>"Title2", "date"=>"2018-11-16", "content"=>"Content2"];
	
	$arr[0] = $art1;
	$arr[1] = $art2;
	
	return $arr;	
}
function articles_get($id) {
	
}
function articles_new($title, $date, $content) {
	
}
function articles_edit($id, $title, $date, $content) {
	
}
function articles_del($id) {
	
}
?>