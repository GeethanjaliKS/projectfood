<?php
// Start the session
session_start();
?>
<!-- 
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
-->


<?php
require 'connection.php';
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            $recipe_name =  $_POST['recipe_name'];
            $category=$_POST['category'];
            $recipe_description =  $_POST['recipe_description'];
            $ingredient =  $_POST['Ingredients'];
            // Insert image content into database 
            $user_id=$_SESSION["user"];
   
            $sql="INSERT INTO recipe (recipename,recipedescription,ingredients,img,userid,category_id)
            VALUES ('$recipe_name','$recipe_description','$ingredient','$imgContent','$user_id','$category')"; 
             
            if(mysqli_query($conn, $sql)){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
                echo "<script>
                alert('Recipe add successful');
                window.location.href='../recipe.php';
                </script>";
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
mysqli_close($conn);
?>