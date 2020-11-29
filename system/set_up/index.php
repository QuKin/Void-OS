<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>设置</title>
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="index.css">
    <script src="/js/jquery.js"></script>
    <script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="index.js"></script>
</head>
<body>
<img src="/bg.jpg" alt="" id="bj">
    <header class="fix">
        <p id="head_p">设置</p>
    </header>
    <main class="fix">
        <div id="top">
            <p id="top_p"><?php if (!empty($_COOKIE['user'])){echo $_COOKIE['user'];}else{echo '请先登录,3秒后跳转到登录界面';header('refresh:3;url=../../index.php');} ?></p>
        </div>
    </main>
    <footer class="fix">
        <nav>
            <ul>
                <li id="foot_li1" class="foot_li">
                    <p>系统</p>
                    <span>VoidOS 0.1 正式版</span>
                </li>
                <li id="foot_li2" class="foot_li">
                    <p>关于</p>
                    <span>QuKin制作</span>
                </li>
                <li id="foot_li3" class="foot_li">
                    <p>下载介绍文档</p>
                    <span><a href="http://39.97.221.139/zip/Void%20OS%201.1.zip">Void OS 1.1 下载</a> </span>
                </li>
            </ul>
        </nav>
    </footer>
    <div id="qx" style="position: fixed;width: 100%;height: 100%;display: none;bottom: 0;"></div>
    <div id="tc">
        <h2><?php echo $_COOKIE['user']; ?></h2>
        <p>退出</p>
    </div>
</body>
</html>