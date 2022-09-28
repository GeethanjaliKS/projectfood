<?php
require 'connection.php';
$category_name =  $_REQUEST['category_name'];
$sql = "INSERT INTO categories (category_name)
VALUES ('$category_name')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Category added successfully');
    window.location.href='../category.php';
    </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>