<?php
/*
 * User: QuKin;
 * Date: 2020/10/30;
 * Time: 13:19;
 */
header("Content-type:text/html;charset=utf-8");
if (!isset($_COOKIE['user'])){
    echo '<script>alert("登录失败或跳转错误")</script>';
    header('refresh:0;url=./index.php');
}
?>
<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Void OS</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" href="./favicon.ico">
</head>
<body>
    <header class="rel">
        <div id="avatar" class="abs">
            <img src="./img/avatar.png" alt="" id="avatar_img" class="abs">
        </div>
        <div id="time" class="abs">
            <div id="time_hour" class="abs time">
                <p id="time_hour_p" class="time_p"></p>
            </div>
            <div id="time_minute" class="abs time">
                <p id="time_minute_p" class="time_p"></p>
            </div>
        </div>
    </header>
    <main class="rel">
        <!-- 触碰密码区域 -->
        <div id="main_one" class="abs main_div"></div>
    </main>
    <footer></footer>
    <script src="./js/jquery.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>
