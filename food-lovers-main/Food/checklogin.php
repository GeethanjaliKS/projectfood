<?php
// Start the session
session_start();
?>
<?php require 'insert/connection.php';
$user =  $_REQUEST['email'];
$password =  $_REQUEST['password'];

$sql = "select userid from register where EMAIL_ID='$user' and passwrd='$password'";
$sql = "select userid,role from register where EMAIL_ID='$user' and passwrd='$password'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row) {
    $_SESSION["user"] =$row['userid'];
    $_SESSION["role"] =$row['role'];
    echo "<script>
    alert('Login successful');
    window.location.href='home.php';
    </script>";
} else {
  echo "<script>
  alert('Login not successful');
  window.location.href='login.php';
  </script>";
}
?>


