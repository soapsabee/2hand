
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
        <select name="date"  required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>
        Month
        <select name="month"  required>
            <option value="January">January</option>
            <option value="Febuary">Febuary</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
        Year 
        <input type="number" name="year" size="20" value="" placeholder="Ex.1990" required> 
        <font color= "#7FFFD4"></font><br><br>
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
