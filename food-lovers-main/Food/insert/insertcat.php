<?php
require 'connection.php';
$category_name =  $_REQUEST['category_name'];
$catdesc =  $_REQUEST['desc'];
$sql = "INSERT INTO categories (category_name,descript)
VALUES ('$category_name','$catdesc')";

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