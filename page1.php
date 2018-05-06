
<form  name="form" action="page2.php" method="post" enctype="multipart/form-data">
    <table align= "center" border = "2">
        <tr><td>
        <center>--REGISTER--</center><br>
        Firstname 
        <input type="text" name="Fname" placeholder="Ex.Papaya" required>
        
        Lastname 
        <input type="text" name="Lname" placeholder="Ex.Poken" required><br><br>
        Gender  
        <input type="radio" name="gender" value="male" size="25" required> 
		Male
        <input type="radio" name="gender" value="female" size="25" required> 
		Female<br><br>
        Birth date
        <input type="date" name="date" id="" min="1950-01-01">
        <span class="validity"></span><br><br>
        Address 
        <input type="text" name="address" size="50" value="" placeholder="Ex.Apartment" required><br><br>
        Telephone Number 
        <input type="number" name="telephone" size="50" value="" placeholder="Ex.0657459215" required><br>
        <br><br>
        Email Address 
        <input type="email" name="email" size="50" value="" required><br><br>
     
        Picture 
        <input type="file" name="picfile" size="50"required>
        <input type="hidden" name="MAX_FILE_SIZE" value="100000" required>
        <br><br>
   

        <center>   <input type="submit"  name="submit" value="Submit">
      <input type="reset" value="Click to Reset"></center> 
        </td></td>	
    </table>
</form>
