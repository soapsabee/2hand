<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
<form  name="form" action="register_valid.php" method="post" enctype="multipart/form-data">
<br>
    <table align= "center" bgcolor="white" border = "2">
        <tr><td>
        <center>--REGISTER--</center><br>
        &nbsp;Username
        &nbsp;<input type="text" name="username" id="username" placeholder="Your Username" pattern=".{6,}" 
        title="Must contain at least 6 or more characters" required> <div id="spanrepeat"></div><br>
        &nbsp;Password
        &nbsp;<input type="password" name="password" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" 
        title="Must contain at least one number and one uppercase and lowercase letter, and 8 to 16 characters" required><br><br>
        &nbsp;Firstname 
        &nbsp;<input type="text" name="Fname" placeholder="Your Name" required>
        &nbsp;Lastname 
        &nbsp;<input type="text" name="Lname" placeholder="Your Surname" required><br><br>
        &nbsp;Gender  
        &nbsp;<input type="radio" name="gender" value="Male" size="25" required> 
		Male
        <input type="radio" name="gender" value="Female" size="25" required> 
		Female<br><br>
        &nbsp;Birth date
        &nbsp;<input type="date" name="date" id="" min="1952-01-01" max="2013-01-01" 
        title="User age must not be less than 15 years. And not over 70 years old" required>
        <span class="validity"></span><br><br>
        &nbsp;Address<br>
        &nbsp;<textarea name="address" rows="3" cols="55" placeholder="123, My Street, Bigtown England" required></textarea><br><br>
        &nbsp;Telephone Number 
        &nbsp;<input type="text" name="telephone" size="15" value="" placeholder="0876543210" pattern="[+ 0-9]{10}"
        title="Must contain at 10 numbers" required><br>
        <br>
        &nbsp;Email Address 
        &nbsp;<input type="email" name="email" size="50" value="" placeholder="exam00@example.com" 
        pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required><br><br>
     
        &nbsp;Picture 
        &nbsp;<input type="file" name="picfile" size="50" required>
        <input type="hidden" name="MAX_FILE_SIZE" value="100000" required>
        <br><br>
   

        <center>   <input type="submit" id="submit"  name="submit" value="Submit">
      <input type="reset" value="Click to Reset"></center> <br>
        </td></td>	
    </table>
</form>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="checkrepeat.js"></script>
    </body>
</html>