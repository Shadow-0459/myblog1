<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog_list</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/blog_list.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script>
        window.addEventListener("load",function () {
            setTimeout(hideURLbar,0);
        },false);
        function hideURLbar() {
            window.scrollTo(0,1);
        }
    </script>
</head>
<body>
    <div id="blog_list" class="wrapper">
        <ul>
            <?php
                //if (!empty($blogs))
                foreach($blogs as $blog){
            ?>
                <li>
                    <img src="<?php echo $blog->img;?>">
                    <p class="desc"><?php echo $blog->content;?></p>
                    <p class="info">
                        <a href="#" class="read">READ</a>
                    </p>
                </li>
            <?php
                }
            ?>
<!--            <li>-->
<!--                <img src="upload/2.jpg">-->
<!--                <p class="desc">happiness can be found even in the darkest of times. - albus dumbledore。Don’t struggle so much,best things happen when not expected.</p>-->
<!--                <p class="info">-->
<!--                    <a href="#" class="read">READ</a>-->
<!--                </p>-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="upload/3.jpg">-->
<!--                <p class="desc">happiness can be found even in the darkest of times. - albus dumbledore。Don’t struggle so much,best things happen when not expected.</p>-->
<!--                <p class="info">-->
<!--                    <a href="#" class="read">READ</a>-->
<!--                </p>-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="upload/4.jpg">-->
<!--                <p class="desc">happiness can be found even in the darkest of times. - albus dumbledore。Don’t struggle so much,best things happen when not expected.</p>-->
<!--                <p class="info">-->
<!--                    <a href="#" class="read">READ</a>-->
<!--                </p>-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="upload/5.jpg">-->
<!--                <p class="desc">happiness can be found even in the darkest of times. - albus dumbledore。Don’t struggle so much,best things happen when not expected.</p>-->
<!--                <p class="info">-->
<!--                    <a href="#" class="read">READ</a>-->
<!--                </p>-->
<!--            </li>-->
<!--            <li>-->
<!--                <img src="upload/6.jpg">-->
<!--                <p class="desc">happiness can be found even in the darkest of times. - albus dumbledore。Don’t struggle so much,best things happen when not expected.</p>-->
<!--                <p class="info">-->
<!--                    <a href="#" class="read">READ</a>-->
<!--                </p>-->
<!--            </li>-->

        </ul>

        <div id="more">
            <button id="btn-more">点击加载更多。。。</button>
        </div>
    </div>
    <script src="js/require.js" data-main="js/index"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/blog_list.js"></script>
</body>
</html>
