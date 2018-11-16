<!doctype html>
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
					<h3><?=$articles['title']?></h3>
					<em>Опубликовано <?=$articles['date']?></em>
					<p><?=$articles['content']?></p>
				</div>
			<footer>
				<p>&copy; Евгений Кириллов</p>
			</footer>
		</div>
	</div>
</body>
</html>