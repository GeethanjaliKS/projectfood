<?php
require 'connection.php';
$recipe_name =  $_REQUEST['recipe_name'];
$recipe_description =  $_REQUEST['recipe_description'];
$category=$_POST['category'];
$user_id="1";
//$image=  $_REQUEST['myfile'];
//$video =  $_REQUEST['upload'];

$sql = "INSERT INTO recipe (recipename,recipedescription,userid,category_id)
VALUES ('$recipe_name','$recipe_description','$user_id','2')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
    alert('Recipe add successful');
    window.location.href='../recipe.php';
    </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>