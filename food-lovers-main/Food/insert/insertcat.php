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
$catlist =  $_REQUEST['category_list'];
$cattype =  $_REQUEST['category_type'];
$sql = "INSERT INTO category (category_type,category_list)
VALUES ('$catlist','$cattype')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('User registraion successful');
    window.location.href='../category.php';
    </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>