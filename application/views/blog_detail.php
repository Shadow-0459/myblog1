<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Protects详情</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/blog_detail.css">
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
    <h1><?php echo $blog->title;?>详情页面</h1>
    <div class="article">
        <img  class="img-main" src="<?php echo $blog->img;?>">
        <p class="article-content"><?php echo $blog->content;?></p>
        <ul class="article-info">
            <li><img class="article-img" src="img/thumbsup_clicked.jpg">&nbsp;<?php echo $blog->clicked;?></li>
            <li><img class="article-img" src="img/category.jpg">&nbsp;<?php echo $blog->cate_name;?></li>
            <li><img class="article-img" src="img/日期.jpg">&nbsp;<?php echo $blog->post_data;?></li>
        </ul>
    </div>
    <div class="article-comment">
        <h3><span class="comment-num" id="comment-number"><?php echo count($blog->comments)?></span> Responses</h3>
        <div class="comment-wrapper">
            <ul class="comment-list">
                <?php
                    foreach ($blog->comments as $comment){
                ?>
                <li>
                    <img class="comment-head">
                    <div class="comment">
                        <div class="comment-info">
                            <span class="username"><?php echo $comment->username;?></span>
                            <span class="post-date"><?php echo $comment->post_data;?></span>
                        </div>
        <!--                //<div class="article-comment"></div>-->
                        <p class="content"><?php echo $comment->message;?></p>
                    </div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
        <div class="comment-form">
            <h3>leave a comment</h3>
<!--            <form class="" method="post" action="">-->
            <input type="hidden" value="<?php echo $blog->blog_id?>" id="blogId">
                <p><input type="text" placeholder="Name" id="username" name="username" class="text-box"></p>
                <p><input type="email" placeholder="Email" id="email" name="email" class="text-box"></p>
                <p><input type="tel" placeholder="Phone" id="phone" name="phone" class="text-box"></p>
                <p><textarea id="message" cols="30" rows="10" name="message" class="text-box"></textarea></p>
                <p><button type="button" value="Send" id="btn-send">SEND</button></p>
<!--            </form>-->
        </div>
    </div>
    <script src="js/require.js" data-main="js/blog_detail"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
</body>
</html>