<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fundmyventure";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("server died");
} 
$a=$_POST['email'];
$b=$_POST['password'];
$sql="SELECT * FROM users WHERE users.email='$a' AND users.password='$b';";
//echo "s";
$res1=mysqli_query($conn,$sql);
 // $quer1='$_POST["query"]';
  //$res2=mysqli_query($con,$quer1);
  //SELECT * FROM login WHERE login.username='$a' AND login.password='$b';
  //"INSERT INTO login VALUES('$a1','$a2');"
  if (!$res1) {
    die('failed');
}
echo "OK";
$conn->close();
?>