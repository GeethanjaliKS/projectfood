<?php
// Start the session
session_start();
?>
<?php require 'insert/connection.php';
$user =  $_REQUEST['email'];
$password =  $_REQUEST['password'];

$sql = "select userid from register where EMAIL_ID='$user' and passwrd='$password'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row) {
    $_SESSION["user"] =$row['userid'];
    echo "<script>
    alert('Login successful');
    window.location.href='home.php';
    </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>