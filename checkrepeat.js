$(function(){


    $('#username').blur(function(){
        var username = $(this).val();
        $.ajax({
            url:"check.php",
            method:"POST",
            data:{user_name:username},
            dataType:"text",
            success:function(html)
            {
                $('#spanrepeat').html(html);
                if(html=='<span class="text-danger">Username นี้มีผู้ใช้แล้ว กรุณาใช้ชื่ออื่น</span>'){
                    $('#submit').hide();
                }
                else{
                    $('#submit').show();
                }
            }
        });

    });


});