
<form  name="form" action="register2.php" method="post" enctype="multipart/form-data">
    <table align= "center" border = "2">
        <tr><td>
        <center>--REGISTER--</center><br>
        &nbsp;Username
        &nbsp;<input type="text" name="username" placeholder="Your Username" pattern="{6,}" 
        title="Must contain at least 6 or more characters" required><br><br>
        &nbsp;Password
        &nbsp;<input type="password" name="password" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
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
        &nbsp;<input type="number" name="telephone" size="50" value="" placeholder="0876543210" pattern="[+ 0-9]{10}"
        title="Must contain at 10 numbers" required><br>
        <br>
        &nbsp;Email Address 
        &nbsp;<input type="email" name="email" size="50" value="" placeholder="exam00@example.com" 
        pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required><br><br>
     
        &nbsp;Picture 
        &nbsp;<input type="file" name="picfile" size="50" required>
        <input type="hidden" name="MAX_FILE_SIZE" value="100000" required>
        <br><br>
   

        <center>   <input type="submit"  name="submit" value="Submit">
      <input type="reset" value="Click to Reset"></center> 
      <br>
        </td></td>	
    </table>
</form>
