require(['jquery'],function ($) {
    $(function () {
        $('.MyProjects-ul a').on('click',function () {
           $(this).parent().siblings().children('a').removeClass('active');
            $(this).addClass('active');

            var  cateId = $(this).data('id');//或者$(this).attr('data-id')
            //;//url,data,function,type
            $MyProjects_contents = $('.MyProjects-contents');
            $.get('welcome/get_blogs',{cateId:cateId},function (data) {
                $MyProjects_contents.empty();
                var html = '';
                for(var i=0;i<data.length;i++){
                    var blog = data[i];
                //     html += `
                //     <li class="MyProjects-projects projects1">
                //     <a href="welcome/view_blog?blogId=`+blog.blog_id+`">
                //         <img src="`+blog.img+`">
                //         <div class="MyProjects-desc">
                //             <p class="MyProjects-title">`+blog.title+`</p>
                //             <span class="MyProjects-click">`+blog.clicked+`</span>
                //         </div>
                //         <div class="mask">
                //             <h3>Photo</h3>
                //             <span>Click Photo</span>
                //         </div>
                //     </a>
                // </li>`;
                    html+="<li class='MyProjects-projects projects1'>";
                    html+="<a href='welcome/view_blog?blogId="+blog.blog_id+"'>";
                    html+="<img src='"+blog.img+"'>";
                    html+="<div class='MyProjects-desc'>";
                    html+="<p class='MyProjects-title'>"+blog.title+"</p>";
                    html+="<span class='MyProjects-click'>"+blog.clicked+"</span>";
                    html+="</div>";
                    html+="<div class='mask'>";
                    html+="<h3>Photo</h3>";
                    html+="<span>Click Photo</span>";
                    html+="</div>";
                    html+="</a>";
                    html+="</li>";
                }
                $MyProjects_contents.append(html);
            },'json');
        });
    });
});