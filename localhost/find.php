<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" / >
	<title>Магазин сантехники</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body class=gradient>
<center>
<svg height=202px>
	<!//<polygon points="40,95 140,0 230,95" fill=blue/>
	<!<path d="M 230 95 A 1 1 0 0 1 40 95" fill="blue	" />
	<path d="M57.034,166.534c2.398,3.801,3.664,8.181,3.664,12.685c0,13.128-10.681,23.809-23.809,23.809S13.08,192.347,13.08,179.219
	c0-4.522,1.276-8.919,3.692-12.731l13.664-23.069c1.351-2.28,3.803-3.678,6.453-3.678c2.649,0,5.103,1.398,6.453,3.678
	L57.034,166.534z M190.514,43.376h-49.038v-1.025c0-4.142-3.357-7.5-7.5-7.5h-11.233v-6.495h30.661c4.143,0,7.5-3.358,7.5-7.5
	v-4.251C160.903,7.449,153.454,0,144.298,0H76.017c-9.156,0-16.605,7.449-16.605,16.605v4.251c0,4.142,3.358,7.5,7.5,7.5h30.662
	v6.495H86.339c-4.142,0-7.5,3.358-7.5,7.5v1.025H58.84c-27.156,0-49.249,22.093-49.249,49.25v25.194
	c-2.69,1.139-4.578,3.804-4.578,6.909c0,4.142,3.358,7.5,7.5,7.5h4.578h35.714h4.103c4.142,0,7.5-3.358,7.5-7.5
	c0-2.918-1.67-5.441-4.103-6.681v-16.932c0-4.429,3.603-8.032,8.032-8.032h10.502v2.547c0,4.142,3.358,7.5,7.5,7.5h47.636
	c4.143,0,7.5-3.358,7.5-7.5v-0.329h49.038c4.143,0,7.5-3.358,7.5-7.5V50.876C198.014,46.734,194.656,43.376,190.514,43.376z"/>
</svg>
<h1 class=title2>Сантехника</h1>
</center>
<div class="buttonmenu" >
	<center>
<button><a href="http://localhost/truba.html">Труба</a></button>
<button><a href="http://localhost/unitaz.html">Унитазы</a></button>
<button><a href="http://localhost/vanna.html">Ванны</a></button>
<button><a href="http://localhost/registra.html">Заказ</a></button>

<button><a href="http://localhost/T4.html">Регистрация</a></button>
<button><a href="http://localhost/authform.html">Авторизация</a></button>
<button><a href="http://localhost/cabinet.php">Кабинет</a></button>
</center>
</div>
<?php
$con = mysqli_connect('localhost', 'ad', '1','zakaz');
$Name = $_REQUEST['Name'];
$sql_select = "SELECT * FROM zakaz WHERE Name='$Name'";
//var_dump($sql_select);
$result = mysqli_query($con,$sql_select);
//var_dump($result);
$row = mysqli_fetch_array($result);
if($row) 
	{ printf($row['TextZakaz']);echo(" ");
	if ($row['Status']==0) echo "Заказ не завершен"; else echo "Заказ завершен"; }
else { echo ("Такой Name в базе нет"); }

?>

<form method='post' action='status.html'><b/>
<input id='submitread'  type='submit' value="Вернуться к поиску"><b/><b/>
</form>
<br>
<form method="post" action="menu.html">
<input id="submitback" type="submit" value="На главную">
</form>
</body>
</html>
