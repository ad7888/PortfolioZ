<?php
session_start();
?>
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
    <!<path d="M 230 95 A 1 1 0 0 1 40 95" fill="blue   " />
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
<button><a href="http://localhost/status.html">Статус</a></button>
<button><a href="http://localhost/T4.html">Регистрация</a></button>
<button><a href="http://localhost/authform.html">Авторизация</a></button>
<button><a href="http://localhost/cabinet.php">Кабинет</a></button>
</center>
</div>
<?php
$connection = mysqli_connect('localhost', 'ad', '1','zakaz');
$select_db = mysqli_select_db($connection, 'users');
$username = $_SESSION['username'];
$query = "SELECT isAdmin FROM users WHERE username='$username'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$row = mysqli_fetch_assoc($result);
$isAdmin = $row['isAdmin'];
if ($isAdmin == 1) {
    echo '<div class="container">';
    echo '<h3>Заблокировать аккаунт: </h3>';
    echo '<form action="banuser.php" method="post">';
    echo '<p>Введите имя пользователя: </p>';
    echo '<input name="banuser" type="text" class="form-control">';
    echo '<div align="right">';
    echo '<button class="btn_primary">Заблокировать</button>';
    echo '</div>';
    echo '</form>';
    echo '<h3>Отправить сообщение:</h3>';
    echo '<form action="sendMessage.php" method="post">';
    echo '<p>Введите имя пользователя:</p>';
    echo '<input name="sendName" type="text" class="form-control">';
    echo '<p>Введите тему сообщения:</p>';
    echo '<input name="sendTheme" type="text" class="form-control">';
    echo '<p>Введите сообщение:</p>';
    echo '<input name="sendText" type="text" class="form-control">';
    echo '<div align="right">';
    echo '<button class="btn_primary">Отправить</button>';
    echo '</div>';
    echo '</form>';
    echo '</div>';
    
    echo '';
}
else {
    echo '<h2><font color="red">У Вас нет прав!</font></h2>';
}
?>    
    </body>
</html>