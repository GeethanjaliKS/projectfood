<?php require 'insert/connection.php';
$id=$_GET['id'];
$sql ="DELETE from recipe WHERE recipe_id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Removed successfully');
    window.location.href='viewRecipe.php';
    </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
?>
