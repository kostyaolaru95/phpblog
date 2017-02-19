<?php
session_start();

$conn = mysql_connect('localhost', 'root', '');
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("blog", $conn);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>

<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Мій блог</a>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
            <div class="navbar-nav navbar-right">
                <ul class="nav navbar-nav">
                    <?php
                    if (isset($_SESSION['useremail'])) {
                        $useremail = $_SESSION['useremail'];
                        echo '<li><a href="#">'.$useremail.'</a></li>';
                        echo '<li><a href="exit.php">Вихід</a></li>';
                    }else{
                        echo '<li><a href="login.php">Вхід</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Вхід на сайт</h1><br>
            <form action="login1.php" method="get">
                <input type="text" name="email" placeholder="Імя">
                <input type="password" name="pass" placeholder="Пароль">
                <input type="submit" name="login" class="login loginmodal-submit" value="Вхід">
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>