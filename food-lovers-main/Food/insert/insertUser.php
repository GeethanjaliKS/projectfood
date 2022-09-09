<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$username =  $_REQUEST['fullname'];
$email =  $_REQUEST['email'];
$phnumber =  $_REQUEST['phnum'];
$password =  $_REQUEST['password'];
$sql = "INSERT INTO register (username, passwrd, Email_ID,contact)
VALUES ('$username','$password','$email','$phnumber')";


//if isset($_POST['submit']){
  $password = $_POST['password'];
  
  // Validate password strength
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $number    = preg_match('@[0-9]@', $password);
  $specialchars = preg_match('@[^\w]@', $password);
  
  if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) < 8) {
    echo 'Password is not Strong';
  }
  else{
    echo 'Password is Strong';
  } 
//}


if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('User registraion successful');
    window.location.href='../register.php';
    </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>