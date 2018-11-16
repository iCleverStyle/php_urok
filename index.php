<?php
require_once("database.php");
require_once("models/articles.php");

$articles = articles_all();

include("views/articles.php");
?>

<!--<!doctype html>
<html>
<head>
	<meta charset="utf8">
	<title>Мой первый блог</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Мой первый блог</h1>
		<div>
			<div class="article">
				<h3>Заголовк 1</h3>
				<em>Опубликовано 13.11.2018</em>
				<p><?php 
					function add($param1, $param2) {
						return $param1 + $param2;
					}
					$a = $_GET['a'];
					$b = $_GET['b'];
					echo 'a+b='.add($a, $b);
					echo '<br><br>';
					for ($i=0;$i<=10;$i++){
						echo add($i, $a).'<br>';
					}
				?></p>
			</div>
			<div class="article">
				<h3>Заголовк 2</h3>
				<em>Опубликовано 11.11.2018</em>
				<p>lorem ipsum</p>
			</div>
			<footer>
				<p>&copy; Евгений Кириллов</p>
			</footer>
		</div>
	</div>
</body>
</html>
>>