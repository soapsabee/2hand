<?php
    session_start();
    include('connectdb.php');
    $sql = 'SELECT * FROM user WHERE username = "'.$_POST['username'].'" AND password = "'.$_POST['password'].'"';
    $query = mysqli_query($connect,$sql);
    $result = mysqli_num_rows($query);
    if($result <= 0){
        echo "NO";
    }
    else{
       echo "you can login";
       $_SESSION['username'] = $_POST['username'];
       
    }
    
    mysqli_close($connect);   




?>