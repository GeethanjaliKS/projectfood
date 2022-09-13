<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="../styles/main.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <title>Recipe</title>
    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Bootstrap here -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<?php require 'header.php'; ?>
<?php require 'insert/connection.php';?>
<?php
    $sql = 'SELECT recipe_id,recipename,recipedescription,uploadedtime,img,register.username,category_id FROM recipe JOIN register ON recipe.userid=register.userid';
    $result = $conn->query($sql);
?>  
    <div class="conatiner">
    <div class="row" style="padding:50px" >
  
        <?php
    while($row = $result->fetch_assoc()) { 
        // $usr=$row['userid'];
        // $sql = "SELECT username FROM register where userid='$usr'";
        ?>
    <div class="col-md-4 col-lg-3" style="padding:10px">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" >
    <img class="card-img-top" style="height:300px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" /> 
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['recipename'] ?></h5><hr />
                <p class="card-text">Creator : <?php echo $row['username'] ?>
            <br> <?php echo $row['uploadedtime'] ?>
            </p><?php
            $id=$row['recipe_id'];
            echo $id;
            echo '<a href="recipeDetails.php?id=31" class="btn btn-primary" >View More</a>'; ?> 
            
            
            </div>
            </div>
    </div>
    <?php } ?>

</div>
    </div>
</body>
</html>