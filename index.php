<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" href="./favicon.ico">
    <script src="./js/jquery.js"></script>
    <script src="./js/index.js"></script>
</head>
<body>
<header class="rel">
    <div id="head_left" class="abs">
        <img src="./img/logo.png" alt="">
    </div>
    <div id="head_center">
        <p id="head_center_logo">VoidOS</p>
    </div>
    <div id="head_right" class="abs rotate">
        <p class="head_right_p abs" id="head_right_one">一</p>
        <p class="head_right_p abs" id="head_right_two">一</p>
        <p class="head_right_p abs" id="head_right_three">一</p>
    </div>
</header>
<main>
    <div id="menu" class="rel">
        <ul>
            <li class="menu_li" id="menu_li1">
                <p class="menu_li_p">关于</p>
                <p class="menu_li_xx">VoidOS_QuKin</p>
            </li>
            <li class="menu_li" id="menu_li2">
                <p class="menu_li_p">注册</p>
                <p class="menu_li_xx">如果登录失败，会自动跳到注册页面</p>
            </li>
            <li class="menu_li" id="menu_li3">
                <p class="menu_li_p">其他</p>
                <p class="menu_li_xx">有待开发</p>
            </li>
        </ul>
    </div>
    <div id="main">
        <form action="login_detect.php" method="post">
            <h2 id="main_h2">登录</h2>
            <input id="main_input_user" class="main_input_txt" type="text" name="username" placeholder="账号">
            <input id="main_input_pass" class="main_input_txt" type="password" name="password" placeholder="密码">
            <input id="main_input_sub" type="submit" value="登录" name="sub">
        </form>
    </div>
    <div id="alert">
        <h3 id="alert_h3"></h3>
        <p id="alert_p"></p>
        <button id="alert_button">确定</button>
    </div>
</main>
<footer>
<!--  作用是点击这一区域，还原到原本页面  -->
</footer>
</body>
</html>
<?php
if (isset($_COOKIE['user'])){
    echo <<<USER
<script>
    $('#alert').css('display','block');
    $('#alert_h3').text('欢迎回来');
    $('#alert_p').text('欢迎回来：{$_COOKIE["user"]}. 您已登录，所以直接跳转');
    if ($('#alert_h3').text()=='欢迎回来'){
        $('#alert_button').click(function(){
            window.open('./main.php');
        });
    }
</script>
USER;

}
?>