
<html>
<?php
$connect = mysqli_connect("localhost","root","","secondhand");
$sql = 'INSERT INTO user
VALUES ("'.$_POST["username"].'","'.$_POST["password"].'","'.$_FILES['picfile']['name'].'", "'.$_POST["Fname"].'", "'.$_POST["Lname"].'", "'.$_POST["gender"].'", "'.$_POST["date"].'", "'.$_POST["address"].'", "'.$_POST["telephone"].'", "'.$_POST["email"].'")';
$result = mysqli_query($connect,$sql);
if (!$result) {
    echo mysqli_error().'<br>';
    die('Can not access database!');
} else {

$date = $_POST['date'];



$newfile = 'images/' . $_FILES['picfile']['name'];
if (copy($_FILES['picfile']['tmp_name'], $newfile)) {
    echo '<br><br><br>';
    echo '<center><table align="center">';
    echo '<tr>';
    echo '<td>';
    echo '<img  wigth="220" height="300" src="' . $newfile . '">';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
    echo '<br><br>';
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




echo '<center><table border = 1><wight=100 hight=20>';
echo '<tr>';
echo '<td>';
$FnameErr = $LnameErr = $genderErr = $addressErr = $telephoneErr = $emailErr = '';
$Fname = $Lname = $gender = $address = $telephone = $email = '';



$Fname = test_input($_POST["Fname"]);
if (!preg_match("/^[a-zA-Z ]*$/", $Fname)) {
    $FnameErr = "Only letters and Complete the information";
    echo"Firstname : ";
    echo "<font color=\"#FF0000\">*$FnameErr</font>";
    echo'<br>';
} else {
    echo"Firstname : " . $_POST["Fname"];
    echo'<br>';
}


$Lname = test_input($_POST["Lname"]);
if (!preg_match("/^[a-zA-Z ]*$/", $Lname)) {
    $LnameErr = "Only letters and Complete the information";
    echo"Lastname : ";
    echo "<font color=\"#FF0000\">*$LnameErr</font>";
    echo'<br>';
} else {
    echo"Lastname : " . $_POST["Lname"];
    echo'<br>';
}

if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    echo"Gender : ";
    echo "<font color=\"#FF0000\">*$genderErr</font>";
    echo'<br><br>';
} else {
    echo"Gender : " . $_POST["gender"];
    echo'<br>';
}


    echo"Birthdate : " . $_POST["date"];
    echo'<br>';




$address = test_input($_POST["address"]);
if (!preg_match("/^[a-zA-Z ]*$/", $Lname)) {
    $addressErr = "Complete the information";
    echo"Address:";
    echo "<font color=\"#FF0000\">*$addressErr</font>";
    echo'<br><br>';
} else {
    echo"Address : " . $_POST["address"];
    echo'<br>';
}


$telephone = test_input($_POST["telephone"]);
if (!preg_match("/^[0-9]+(\s[0-9]+)*$/", $telephone)) {
    $telephoneErr = "Only number";
    echo"Telephone : ";
    echo "<font color=\"#FF0000\">*$telephoneErr</font>";
    echo'<br><br>';
} else {
    echo"Telephone : " . $_POST["telephone"];
    echo'<br>';
}




$email = test_input($_POST["email"]);
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    echo"Email : ";
    echo "<font color=\"#FF0000\">*  $emailErr</font>";
    echo'<br><br>';
} else {
    echo"Email : " . $_POST["email"];
    echo'<br>';
}



echo '</tr>';
echo '</td>';
echo '<table>';
}
?>
<button onClick = "window.location ='index.php'">INDEX</button>
</html>