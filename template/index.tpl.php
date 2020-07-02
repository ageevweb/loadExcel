<!doctype html>
<html>
<head>
<meta charset="utf-8" /> 
<link rel="stylesheet" href="template/css/uimini.css"/>
<link rel="stylesheet" href="template/css/style.css"/>

<link rel="icon" type="image/png" sizes="32x32" href="template/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="template/favicon-16x16.png">

<title>Load .xlsx</title>
</head>
<body>

	<div class="wrap">
		
		<div class="content">

			<a href="/table.html" class="button button--round button-light check-table">смотреть таблицу</a>

			<div class="before-downl">
				<h2>Важно!</h2>
				<p>При загрузке .xlsx файла, убедитесь что он имеет необходимые поля</p>
				<img src="template/format.jpg" alt="">
				<p>Или скачайте и заполните готовый шаблон:</p>
				<a class="button button--round button-default btn-downl" href="template/test.xlsx" download>Скачать файл</a>
			</div>
	
			<form action="index.php?task=export" method="POST" enctype="multipart/form-data">
				<h3>Выберите файл для загрузки</h3> 
				<input class="" type="file" name="xls"/> </br>
				<input class="button button--round button-primary" type="submit" value="Отправить"/>
			</form>

		</div>	
	</div>
</body>	
</html>