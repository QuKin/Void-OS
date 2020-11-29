<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>开发</title>
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="index.css">
    <script src="/js/jquery.js"></script>
    <script src="index.js"></script>
</head>
<body>
<img src="/bg.jpg" alt="" id="bj">
    <header class="fix">
        <p id="head_p">开发</p>
    </header>
    <main>
        <form class="input_file abs" nv-file-drop="" uploader="uploader" action="upload.php" method="post" enctype="multipart/form-data">
            <div id="logo">
                <fieldset>
                    <legend>logo</legend>
                    <div id="wl">
                        <input type="radio" name="image[]" id="image_one" checked>
                        <p>网络图片:</p>
                        <input id="image_txt" type="text" name="wltp" placeholder="网络地址">
                    </div>
                    <div id="bd">
                        <input type="radio" name="image[]" id="image_two">
                        <p>本地图片:</p>
                        <input id="image_file" class="file_ele" type="file" file-model="image" name="file" nv-file-select uploader="uploader" multiple enctype="multipart/form-data"/>
                        <div class="file_open">Uploader</div>
                    </div>
                </fieldset>
            </div>
            <div id="mc">
                <fieldset>
                    <legend>名称</legend>
                    <p>最好不要超过5个中文:</p>
                    <input type="text" name="mc" id="mc_input" placeholder="名称">
                </fieldset>
            </div>
            <div id="lj">
                <fieldset>
                    <legend>网络链接</legend>
                    <p>链接复制到这里就行:</p>
                    <input type="text" name="lj" id="mc_input" placeholder="连接">
                </fieldset>
            </div>
            <input type="submit" value="编译" class="sub">
        </form>
    </main>
    <footer></footer>
</body>
</html>