$(function(){


    $('#login').click(function(){

        var username = $('#username').val();
        var password = $('#password').val();

        if(username !='' && password !=''){
            
            $.ajax({

                url:'checklogin.php',
                method:'POST',
                data:{username:username, password:password},
                success:function(data){
                    if(data == 'NO'){
                        alert("Wrong Data");
                    }
                    else{
                        alert("Right Data");
                        window.location.href = "index2.php";
                    }
                }


            })

        }


    })



 });