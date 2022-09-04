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
$recipe_name =  $_REQUEST['recipe_name'];
$recipe_description =  $_REQUEST['recipe_description'];
$ingredients =  $_REQUEST['Ingredients'];
$time =  $_REQUEST['time'];
//$image=  $_REQUEST['myfile'];
//$video =  $_REQUEST['upload'];

$sql = "INSERT INTO recipe (recipename,recipedescription,ingredient,preparationtime)
VALUES ('$recipe_name','$recipe_description','$ingredients','$time')";

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