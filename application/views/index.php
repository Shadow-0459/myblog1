<?php
$cate_id = $this -> input ->get('cateId');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal Web</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/Style.css">
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
<!--<img src="../img/hehua.jpg">-->
<div id="huojian"></div>
<div id="Header">
    <div id="MyHeadSculpture"></div>
    <div id="SimpleInformation">
        <div class="hello"></div>
        <h1> 周士琪 </h1>
        <h1>My Name is ZhouShiQi</h1>
        <h4>Web developer and designer</h4>
        <hr>
        <div class="information">
            <ul class="Imformation-ul1">
                <li>Phone</li>
                <li>Address</li>
                <li>Email</li>
                <li>Web</li>
            </ul>
            <ul class="Imformation-ul2">
                <li>13845989080</li>
                <li>黑龙江省哈尔滨市</li>
                <li>736234860@qq.com</li>
                <li>www.zzzzzzzz.com</li>
            </ul>
        </div>
    </div>
</div>
<div id="Navigation">
    <div class="Navigation-list">
        <ul>
            <li class="Navigation-li"><a href="">About</a></li>
            <li class="Navigation-li"><a href="">Experience</a></li>
            <li class="Navigation-li"><a href="">Education</a></li>
            <li class="Navigation-li"><a href="">Skills</a></li>
            <li class="Navigation-li"><a href="welcome/list_blog">MyProjects</a></li>
            <li class="Navigation-li"><a href="welcome/web_demo">ContactMe</a></li>
        </ul>
    </div>
</div>
<div id="AboutMe">
    <div class="AboutMe-pane">
        <h1>About&nbsp;Me</h1>
        <hr style="height:10px;border:none;border-top:10px groove skyblue;" />
        <div class="AboutMe-content">
            <div class="AboutMe-content-left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet sem sit amet dolor luctus pellentesque. Pellentesque eleifend tellus at interdum elementum. Nam egestas molestie elit. Vivamus sed accumsan quam, a mollis magna. Nam aliquet eros eget sapien consequat tincidunt at vel nibh. Duis ut turpis mi. Duis nec scelerisque urna, sit amet varius arcu. Aliquam aliquet sapien quis mauris semper suscipit. Maecenas pharetra dapibus posuere. Praesent odio sem, varius quis dolor vel, maximus dapibus mi. Pellentesque mattis mauris neque. Nam aliquam turpis ante, at cursus massa ullamcorper ut. Proin id diam id nisi sagittis pellentesque sed sit amet eros.
                In porttitor tempus nulla, a porta purus commodo sed. Praesent hendrerit nisi nunc, ut porttitor justo pellentesque et ac gravida sem mattis. Donec ornare justo nec
            </div>
            <div class="AboutMe-content-right">
                <h2>Awdards</h2>
                <ul>
                    <li>&gt;Im a hansome man.!!!!!</li>
                    <li>&gt;Im a hansome man.!!!!!</li>
                    <li>&gt;Im a hansome man.!!!!!</li>
                    <li>&gt;Im a hansome man.!!!!!</li>
                    <li>&gt;Im a hansome man.!!!!!</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="Experience">
    <div class="Experience-pane">
        <h1>Work&nbsp;Experience</h1>
        <hr style="height:10px;border:none;border-top:10px groove skyblue;" />
        <div class="Experience-contents">
            <div class="Experience-content Experience-content1">
                <div class="Experience-content-left">
                    <h3 class="year">2014-2015</h3>
                    <img src="img/文件箱.jpg" class="box box1">
                </div>
                <div class="Experience-content-right"></div>
            </div><div class="Experience-content Experience-content2 ">
                <div class="Experience-content-left">

                    <img src="img/文件箱.jpg" class="box box2">
                </div>
                <div class="Experience-content-right">
                    <h3 class="year">2015-2016</h3>
                </div>
            </div>
            <div class="Experience-content Experience-content3">
                <div class="Experience-content-left">
                    <h3 class="year">2015-2017</h3>
                    <img src="img/文件箱.jpg" class="box box3">
                </div>
                <div class="Experience-content-right"></div>
            </div>
            <div class="Experience-content Experience-content4">
                <div class="Experience-content-left">
                    <img src="img/文件箱.jpg" class="box box4">
                </div>
                <div class="Experience-content-right">
                    <h3 class="year">2017-2018</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div id="Education"></div> -->
<div id="MyProjects">
    <div class="MyProjects-pane">
        <h1>My&nbsp;Projects</h1>
        <hr style="height:10px;border:none;border-top:10px groove skyblue;" />
        <ul class="MyProjects-ul">
            <div>
                <li ><a class="active" href="javascript:;" data-id="<??>">All</a></li>
                <!--                <li><a href="">Photoshop</a></li>-->
                <!--                <li><a href="">Html/Css</a></li>-->
                <!--                <li><a href="">Javascript</a></li>-->
                <!--                <li><a href="">Php</a></li>-->
                <?Php
                foreach ($categories as $category){
                    ?>
                    <li><a class="active" href="javascript:;" data-id="<?php echo $category->cate_id;?>"><?php echo $category->cate_name;?></a></li>
                    <?php
                }

                ?>
            </div>
        </ul>

        <!-- <div class="MyProjects-projects projects1"></div>
        <div class="MyProjects-projects projects2"></div>
        <div class="MyProjects-projects projects3"></div>
        <div class="MyProjects-projects projects4"></div>
        <div class="MyProjects-projects projects5"></div>
        <div class="MyProjects-projects projects6"></div>
        <div class="MyProjects-projects projects7"></div>
        <div class="MyProjects-projects projects8"></div>
        <div class="MyProjects-projects projects9"></div> -->
        <ul class="MyProjects-contents">
            <?php
            foreach($blogs as $blog){
                ?>
                <li class="MyProjects-projects projects1">
                    <a href="welcome/view_blog?blogId=<?php echo $blog->blog_id;?>">
                        <img src="<?php echo $blog->img;?>">
                        <div class="MyProjects-desc">
                            <p class="MyProjects-title"><?php echo $blog->title;?></p>
                            <span class="MyProjects-click"><?php echo $blog->clicked;?></span>
                        </div>
                        <div class="mask">
                            <h3>Photo</h3>
                            <span>Click Photo</span>
                        </div>
                    </a>
                </li>
                <?php


            }

            ?>
            <!--            <li class="MyProjects-projects projects1">-->
            <!--                <a href="">-->
            <!--<!--                    <img src="upload/1.jpg">-->-->
            <!--<!--                    <div class="MyProjects-desc">-->-->
            <!--<!--                        <p class="MyProjects-title">Title1</p>-->-->
            <!--<!--                        <span class="MyProjects-click">111</span>-->-->
            <!--<!--                    </div>-->-->
            <!--<!--                    <div class="mask">-->-->
            <!--<!--                        <h3>Photo</h3>-->-->
            <!--<!--                        <span>Click Photo</span>-->-->
            <!--<!--                    </div>-->-->
            <!--                </a>-->
            <!--            </li>-->
            <!--            <li class="MyProjects-projects projects2">-->
            <!--                <a href="">-->
            <!--                    <img src="upload/2.jpg">-->
            <!--                    <div class="MyProjects-desc">-->
            <!--                        <p class="MyProjects-title">Title2</p>-->
            <!--                        <span class="MyProjects-click">222</span>-->
            <!--                    </div>-->
            <!--                    <div class="mask">-->
            <!--                        <h3>Photo</h3>-->
            <!--                        <span>Click Photo</span>-->
            <!--                    </div>-->
            <!--                </a>-->
            <!--            </li>-->
            <!--            <li class="MyProjects-projects projects3">-->
            <!--                <a href="">-->
            <!--                    <img src="upload/3.jpg">-->
            <!--                    <div class="MyProjects-desc">-->
            <!--                        <p class="MyProjects-title">Title3</p>-->
            <!--                        <span class="MyProjects-click">333</span>-->
            <!--                    </div>-->
            <!--                    <div class="mask">-->
            <!--                        <h3>Photo</h3>-->
            <!--                        <span>Click Photo</span>-->
            <!--                    </div>-->
            <!--                </a>-->
            <!--            </li>-->
            <!--            <li class="MyProjects-projects projects4>-->
            <!--						<a href="">-->
            <!--            <img src="upload/4.jpg">-->
            <!--            <div class="MyProjects-desc">-->
            <!--                <p class="MyProjects-title">Title4</p>-->
            <!--                <span class="MyProjects-click">444</span>-->
            <!--            </div>-->
            <!--            <div class="mask">-->
            <!--                <h3>Photo</h3>-->
            <!--                <span>Click Photo</span>-->
            <!--            </div>-->
            <!--            </a>-->
            <!--            </li>-->
            <!--            <li class="MyProjects-projects projects5">-->
            <!--                <a href="">-->
            <!--                    <img src="upload/5.jpg">-->
            <!--                    <div class="MyProjects-desc">-->
            <!--                        <p class="MyProjects-title">Title5</p>-->
            <!--                        <span class="MyProjects-click">555</span>-->
            <!--                    </div>-->
            <!--                    <div class="mask">-->
            <!--                        <h3>Photo</h3>-->
            <!--                        <span>Click Photo</span>-->
            <!--                    </div>-->
            <!--                </a>-->
            <!--            </li>-->
            <!--            <li class="MyProjects-projects projects6">-->
            <!--                <a href="">-->
            <!--                    <img src="upload/6.jpg">-->
            <!--                    <div class="MyProjects-desc">-->
            <!--                        <p class="MyProjects-title">Title6</p>-->
            <!--                        <span class="MyProjects-click">666</span>-->
            <!--                    </div>-->
            <!--                    <div class="mask">-->
            <!--                        <h3>Photo</h3>-->
            <!--                        <span>Click Photo</span>-->
            <!--                    </div>-->
            <!--                </a>-->
            <!--            </li>-->
        </ul>

    </div>
</div>
<div id="Skills">
    <div class="Skills-pane">

        <div class="Skills-contents">
            <h1>My&nbsp;Skills</h1>
            <hr style="height:10px;border:none;border-top:10px groove skyblue;" />
            <div class="Skills-content">
                <div class="Skills-content-left">
                    <div class="Skills-content-pane">
                        <h3 class="Skillsh1">HTML/CSS<span class="Skillssp">80%</span></h3>
                        <div class="Skillsd"><div class="Skillsdd Skillsdd1"></div></div>
                        <h3 class="Skillsh2">C / C++<span class="Skillssp">80%</span></h3>
                        <div class="Skillsd"><div class="Skillsdd Skillsdd2"></div></div>
                        <h3 class="Skillsh3">php<span class="Skillssp">80%</span></h3>
                        <div class="Skillsd"><div class="Skillsdd Skillsdd3"></div></div>
                        <h3 class="Skillsh4">Web&nbsp;;Design<span class="Skillssp">80%</span></h3>
                        <div class="Skillsd"><div class="Skillsdd Skillsdd4"></div></div>
                    </div>
                </div>
                <div class="Skills-content-right">
                    <div class="Skills-content-pane">
                        <h3 class="Skillsh5">HTML/CSS<span class="Skillssp">80%</span></h3>
                        <div class="Skillsd"><div class="Skillsdd Skillsdd5"></div></div>
                        <h3 class="Skillsh6">C / C++<span class="Skillssp">80%</span></h3>
                        <div class="Skillsd"><div class="Skillsdd Skillsdd6"></div></div>
                        <h3 class="Skillsh7">php<span class="Skillssp">80%</span></h3>
                        <div class="Skillsd"><div class="Skillsdd Skillsdd7"></div></div>
                        <h3 class="Skillsh8">Web&nbsp;;Design<span class="Skillssp">80%</span></h3>
                        <div class="Skillsd"><div class="Skillsdd Skillsdd8"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="ContactMe">
    <div class="ContactMe-pane">
        <h1>Contact&nbsp;Me</h1>
        <hr style="height:10px;border:none;border-top:10px groove skyblue;" />
        <div class="ContactMe-pane1">
            <div class="ContactMe-pane-left">

            </div>
            <div class="ContactMe-pane-right">
                <h3>Call&nbsp;me&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;+86 13845989080</h3>
                <h3>Email&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;736234860@qq.com</h3>
                <div class="ContactMe-pane-rightbottom">
                    <input type="text" class="ContactMe-pane-rightbottom1" placeholder="Name...">
                    <input type="text" class="ContactMe-pane-rightbottom11" placeholder="Email...">
                    <input type="text" class="ContactMe-pane-rightbottom3"
                           placeholder="Phone">
                    <textarea class="ContactMe-pane-rightbottom4" placeholder="Message..."></textarea>
                    <button class="ContactMe-pane-rightbottom5" id="btn-send">SubMit</button>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="footer">
    <div class="foot">© 2016 My Resume. All rights reserved | Design by W3layouts
    </div>
</div>
<script src="js/require.js" data-main="js/index"></script>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/index.js"></script>
<script>
    $(function(){
        var obox = document.getElementsByClassName('box');
        var oNalist = document.getElementsByClassName('Navigation-li');
        for (var i = 0; i < obox.length; i++) {
            obox[i].timer = null;
            obox[i].onmouseover = function(){
                clearInterval(this.timer);
                var that = this;
                this.timer = setInterval(function(){
                    if (that.offsetWidth >= 80 && that.offsetHeight >= 80) {
                        clearInterval(that.timer);
                    }
                    else
                        that.style.width = that.offsetWidth + 20 + 'px';
                    that.style.height = that.offsetHeight + 20 + 'px';

                },300);
            }
            obox[i].onmouseout = function(){
                clearInterval(this.timer);
                var that = this;
                this.timer = setInterval(function(){
                    if (that.offsetWidth <= 60 && that.offsetHeight <= 60) {
                        clearInterval(that.timer);
                    }
                    else
                        that.style.width = that.offsetWidth - 20 + 'px';
                    that.style.width = that.offsetWidth - 20 + 'px';

                },300);
            }
        }

        // for (var j = 0; j < oNalist.length; j++) {
        // 	oNalist[i].onclick = function(){
        // 		this.
        // 	}
        // }





















        $('#huojian').click(function(){
            //alert($('#header').offset().top);
            $('html,body').animate({scrollTop:$('#Header').offset().top},800);

        });

    });

</script>
</body>
</html>