require(['jquery'],function($){
    $(function(){
        var $ioffset = 0;
        var $blogList = $('#blog_list ul');
        $('#btn-more').on('click',function(){
            //console.log('111');
            var that = this;
            $(this).hide();
            setTimeout(function () {
                $.get('welcome/get_more',{
                    offset:$ioffset+=6
                },function(data){
                    var html ="";
                    for(var i=0;i<data.length;i++){
                        var blog = data[i];
                        html+="<li>"
                        html+="<img src='"+blog.img+"'>"//src=”“ data-src=”“
                        html+=   "<p class='desc'>"+blog.content+"</p>"
                        html+="<p class='info'>"
                        html+=  "<a href='#' class='read'>READ</a>"
                        html+= "</p>"
                        html+="</li>"
                    }
                    $blogList.append(html);
                    $(that).show();
                },'json');

            },1000);

        });
    });
});
