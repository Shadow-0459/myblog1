require(['jquery'],function($){
    $(function(){
        $('#btn-send').on('click',function(){
            var $username = $('#username');
            var $email = $('#email');
            var $phone = $('#phone');
            var $message = $('#message');
            var $blogId = $('#blogId');
            var $num = $('#comment-number');
            $.post("welcome/comment",{//welcome下的方法
                username : $username.val(),
                email:$email.val(),
                phone:$phone.val(),
                message:$message.val(),
                blogId : $blogId.val()
            },function(data){
                alert(data);
                if(data == 'success'){
                    console.log($message.val());
                    var html="";
                    var now = new Date();
                    html+="<li>";
                    html+="<img class='comment-head'>";
                    html+="<div class='comment'>";
                    html+="<div class='comment-info'>";
                    html+="<span class='username'>"+ $username.val() +"</span>";
                    html+="<span class='post-date'>"+ now.toLocaleDateString() +"</span>";
                    html+="</div>";
                    html+="<p class='content'>"+ $message.val() +"</p>";
                    html+="</div>";
                    html+="</li>";

                    $('.comment-list').prepend(html);
                    $num.text(parseInt($num.text()) + 1);

                }else{
                    alert("Fail!!!!!!");
                }
            },'text');
        });
    });

});