<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";


$mobile_otp = $_POST['mobile_otp'];

if($mobile_otp==$_SESSION['otp']){
    

  $Phonetwo = $_POST['Phonetwo'];

         
        // $rand =rand ( 10000 , 99999 );
         
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 







$sql ="INSERT INTO  login(   mobile_number ) value( '$Phonetwo ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}else{
    echo 'Wrong OTP';
}
unset($_SESSION['otp']);
?>



