<?php
$f1 = fopen('app.ini','r');
while(!feof($f1)){
    $line=trim(fgets($f1));
    $arr[]=$line;
}
$keys=array_filter($arr);
?>
<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>主页</title>
    <link rel="stylesheet" href="../css/system_style.css">
    <link rel="icon" href="../favicon.ico">
    <script src="https://pv.sohu.com/cityjson?ie=utf-8"></script>   <!-- 定位 -->
    <script src="../js/jquery.js"></script>
<!--    <script src="https://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
    <script src="../js/sys_main.js"></script>
<!--    <script>-->
<!--        console.log(returnCitySN['cname']);-->
<!--    </script>-->
</head>
<body>
    <img src="../img/bg1.jpg" alt="" id="bj">
    <header class="fix">
        <p id="head_p"></p>
    </header>
    <main id="one" class="abs">
        <div id="top">
            <div id="top_time">
                <div id="top_time_max">
                    <p id="top_time_max_p"></p>
                </div>
                <div id="top_time_min">
                    <p id="top_time_min_p" class="p"></p>
                </div>
            </div>
            <div id="top_positioning">
                <p id="top_positioning_time_p" class="p"></p>
                <p id="top_positioning_p" class="p"></p>
            </div>
            <div id="top_weather">
                <iframe width="120%" height="60" frameborder="0" scrolling="no" allowtransparency="true" src="https://i.tianqi.com?c=code&id=14&icon=1&site=12" style="position: absolute;left: -20%;"></iframe>
            </div>
        </div>
        <div id="bottom">
            <ul>
                <li id="set_up"><img src="./img/set_up.png" alt=""><p>设置</p><span>./set_up/index.php</span></li>
                <li id="image"><img src="./img/image.png" alt=""><p>图库</p><span>./image/index.php</span></li>
                <li id="information"><img src="./img/calculator.png" alt=""><p>计算器</p><span>./calculator/index.html</span></li>
                <li id="bell">
                    <div id="clock">
                        <div id="h"></div>
                        <div id="m"></div>
                        <div id="s"></div>
                    </div>
                    <p>时钟</p>
                    <span>./clock/index.html</span>
                </li>
                <li id="phone"><img src="./img/phone.png" alt=""><p>电话</p><span>./phone/index.php</span></li>
                <li id="lock_screen"><img src="./img/lock_screen.png" alt=""><p>锁屏</p><span>./lock_screen/index.html</span></li>
                <li id="memorandum"><img src="./img/memorandum.png" alt=""><p>备忘录</p><span>./memorandum/index.php</span></li>
                <li id="app"><img src="./img/APP.png" alt=""><p>APP</p><span>./app/index.php</span></li>
            </ul>
        </div>
    </main>
    <main id="two" class="abs">
        <nav>
            <ul>
                <li id="kf"><img src="./img/development.png" alt=""><p>开发</p><span>./development/index.php</span></li>
                <?php
                    foreach ($arr as $key=>$app){
                        echo '<li id="app'.$key.'">';
                        $app_arr=explode("^^^",$app);
                        @$aaa="<img src='".$app_arr[2]."'/><p>".$app_arr[1]."</p><span>".$app_arr[0]."</span>";
                        echo $aaa;
                    }
                ?>
                </li>
            </ul>
        </nav>
    </main>
    <footer>
        <nav>
            <ul>
                <li id="footer_phone"><img src="./img/phone.png" alt=""><span>./phone/index.php</span></li>
                <li id="footer_lock_screen"><img src="./img/lock_screen.png" alt=""><span>./lock_screen/index.html</span></li>
                <li id="footer_qb"><img src="./img/set.png" alt=""><span>Y</span></li>
                <li id="footer_image"><img src="./img/image.png" alt=""><span>./image/index.php</span></li>
                <li id="footer_memorandum"><img src="./img/memorandum.png" alt=""><span>./memorandum/index.php</span></li>
            </ul>
        </nav>
    </footer>
    <div id="fh" class="fix">
        <div id="an" class="abs"></div>
    </div>
    <div id="ht" class="fix">
        <nav>
            <ul>
            </ul>
        </nav>
        <div id="ht_x" class="fix"><p>×</p></div>
        <div id="ht_qx"></div>
    </div>
    <div id="qcht" class="fix">
        <p id="qcht_p">以为你清除后台</p>
    </div>
</body>
</html>
