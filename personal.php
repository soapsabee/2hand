<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/cpersonal.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <form method ='post' action = 'personal_updated.php' enctype="multipart/form-data">      
<?php
session_start();
$strAction = isset($_SESSION['username']) ? $_SESSION['username'] : '';
if($strAction==""){
    $message = "Please Login!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo '<script>window.location.href = "index.php";</script>';
    exit(); 
}

$connect = mysqli_connect("localhost","root","","secondhand");
echo '<br>';
echo '<center><table bgcolor="white" align="center">';
echo '<tr>';
echo '<td>';
$sql = 'SELECT picfile FROM user WHERE username ="'.$_SESSION['username'].'"';
$result = mysqli_query($connect,$sql);
if (!$result) {
    echo mysqli_error().'<br>';
    die('Can not access database!');
} else {
    while ($row = $result->fetch_assoc()) {
        echo '<img class="pic1" src="images/'.$row['picfile'].'" alt="">&nbsp;';
    }
    
}
echo '</td>';
echo '</tr>';
echo '</table>';
echo '<br><br>';

$sql = 'SELECT * FROM user where username ="'.$_SESSION['username'].'"';
$result = mysqli_query($connect, $sql);
if (!$result) {
    echo mysqli_error();
    die('Can not access database!');
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<center><table border = 1 bgcolor="white"><wight=100 hight=20>';
					echo '<tr>';
echo '<td>';

         echo "Username";
		 echo '</td>';echo '<td>';
		echo "<input type='text' name='username' value='$row[username]' disabled=disabled>".'<br>'; 
		 echo '<input type="hidden" name="user2" value="'.$row['username'].'">'."\n";
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
		   echo "Password";
		   echo '</td>';
		   echo '<td>';
			echo   "<input type='password' name='pass' value='$row[password]' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' required>".'<br>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo "Profile";
		   echo '</td>';
           echo '<td>';
           echo "<input type='file' name='picfile' size='50'>";
        echo "<input type='hidden' name='MAX_FILE_SIZE' value='100000'>";
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
		     echo "Firstname";
			  echo '</td>';
		   echo '<td>';
			echo "<input type='text' name='Fname' value='$row[Fname]' required >".'<br>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
			   echo "Lastname";
			   echo '</td>';
		   echo '<td>';
			  echo "<input type='text' name='Lname' value='$row[Lname]' required >".'<br>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
			 
echo "Gender";
echo '</td>';
echo '<td>';  

if("$row[gender]"=="Male"){
    echo "<input type='radio' name='gender' value='Male' checked=checked>"; 
    echo "Male";
    echo "<input type='radio' name='gender' value='Female' >";
    echo "Female";
    echo "<br><br>";
}elseif("$row[gender]"=="Female"){
    echo "<input type='radio' name='gender' value='Male'  >"; 
    echo "Male";
    echo "<input type='radio' name='gender' value='Female'  checked=checked>";
    echo "Female";
    echo "<br><br>";
}
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo "Birth date";
echo '</td>';
echo '<td>';
echo "<input type='date' name='date' value='$row[dob]' min='1952-01-01' max='2013-01-01' 
        title="."User age must not be less than 15 years. And not over 70 years old"." required>".'<br>';
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo "Address";
			   echo '</td>';
		   echo '<td>';
              echo "<textarea rows='3' cols='55' name='address' required>"."$row[address]"."</textarea>".'<br>';
              echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo "Telephone Number";
			   echo '</td>';
		   echo '<td>';
              echo "<input type='text' name='tele' value='$row[telephone]' pattern='[+ 0-9]{10}' required>".'<br>';
              echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo "Email";
			   echo '</td>';
		   echo '<td>';
			  echo "<input type='email' name='email' value='$row[email]' pattern='[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}' required>".'<br>';
 echo '</td>';
echo '</tr>';
echo '</table>';
    } 
    mysqli_close($connect);
}
?>
<br>
<input type = "submit" value="Update">&nbsp;&nbsp;
<button type="button" class="btn btn-link" onClick = "window.location ='index2.php'">INDEX</button>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>