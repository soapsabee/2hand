<?php
    session_start();
    include('connectdb.php');
    $sql = 'SELECT * FROM user WHERE username = "'.$_POST['username'].'" AND password = "'.$_POST['password'].'"';
    $query = mysqli_query($connect,$sql);
    $result = mysqli_num_rows($query);
    $check = mysqli_fetch_array($query,MYSQLI_ASSOC);
    if($result <= 0){
        echo "NO";
    }
    else if($check['Status']=='User'){
       echo "you can login";
       $_SESSION['username'] = $_POST['username'];
       
    }else{
        echo "Welcome Admin";
        $_SESSION['username'] = $_POST['username'];
    }
    
    mysqli_close($connect);   




?>