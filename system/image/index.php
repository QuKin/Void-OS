<?php
    $img=array('gif','png','jpg');
    $dir = 'img/';
    $pic = array();
    foreach($img as $k=>$v){
        $pattern = $dir.'*'.$v;
        $all = glob($pattern);
        $pic = array_merge($pic,$all);
    }
    /*
    foreach($pic as $p){
        echo "<img src='{$p}' />";
    }
    */
?>
<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>图库</title>
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="./index.css">
    <script src="/js/jquery.js"></script>
    <script src="./index.js"></script>
</head>
<body>
<img src="/bg.jpg" alt="" id="bj">
    <header class="fix">
        <p id="head_p">图库</p>
    </header>
    <main class="abs">
        <form action="">
            <div id="search" class="abs"><img src="./search.png" alt=""></div>
            <input style="padding-left: 40px;width: 85%;" type="text" placeholder="搜索图片">
        </form>
        <ul id="main_ul"><?php foreach ($pic as $p){ ?><li class="img_li"><?php echo "<img style=\"\" src='{$p}' />"; ?></li> <?php } ?></ul>
        <div id="add" class="fix"><p>+</p></div>
    </main>
    <footer class="fix">
        <nav>
            <ul>
                <a href="#">
                    <li id="foot_li1" class="foot_li">
                        <img src="./img.png" alt="">
                        <p>图库</p>
                    </li>
                </a>
            </ul>
        </nav>
    </footer>
    <div id="tc" class="fix">
        <form class="input_file abs" nv-file-drop="" uploader="uploader" action="upload.php" method="post" enctype="multipart/form-data">
            <input class="file_ele" type="file" file-model="image" name="image" nv-file-select uploader="uploader" multiple />
            <div class="file_open">Uploader</div>
            <input type="submit" value="提交" class="sub">
        </form>
    </div>
    <div id="tp_max" class="fix">
        <img src="" alt="" class="tp_max_img">
    </div>
    <div id="qx" class="fix">
        <!-- 点击这一块区域会放下弹窗 -->
    </div>
    <script>
        setTimeout(function () {
            waterFall();
        },1000);
        $(window).on('load',function(){

        })//等到dom元素，图片，内容都加载完才会执行js
        function waterFall(){
            var box=$(".img_li").children('img');
            var boxWidth=box.innerWidth();//当前图片宽度
            var screenWidth=$(window).width();//当前屏幕宽度
            //求出列数
            var cols=parseInt(screenWidth/boxWidth);
            //创建数组
            var heightArr=[];
            //遍历循环，除第一排不需要定位，取高度值其他排定位处理
            $.each(box,function(index,item)
            {
                //取出对应图片的高度
                var boxHeight=$(item).innerHeight();
                if(index<cols)//是不是第一排的
                {
                    heightArr[index]=boxHeight;
                }
                else{
                    //最小图片高度，求数组中的最小值
                    var minBoxHeight=Math.min(...heightArr);
                    //最小的索引,$.inArray()用于查找对应数组中指定值的索引。(未匹配成功的话，返回-1)
                    var minBoxIndex=$.inArray(minBoxHeight,heightArr)
                    $(item).css({
                        position:'absolute',
                        left:minBoxIndex*boxWidth+'px',
                        top:minBoxHeight+'px'
                    })
                    //高度追加
                    heightArr[minBoxIndex]+=boxHeight;
                }
            })
        }
    </script>
</body>
</html>