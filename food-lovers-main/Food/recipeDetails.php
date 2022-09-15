<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="../styles/main.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<style>
.f1{
  font-family: 'Bree Serif';
  color:red;
  font-size:40px;
}
  </style>

</head>

<body class="bg-blue-50">
<?php require 'header.php'; ?>
<?php require 'insert/connection.php';?>
    <?php
    $id=$_GET['id'];
    $sql = "SELECT recipe_id,recipename,recipedescription,ingredients,uploadedtime,img,register.username,category_id FROM recipe JOIN register ON recipe.userid=register.userid where recipe.recipe_id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
<div class="container">
    <!--Row with two equal columns-->
    <div class="row">
        <div class="col-md-6">
          <h1 class="f1">Recipe Name <br>
          <h5>
        <?php echo $row['recipename'] ?></h5><br>
        <h1 class="f1">Description</h1><br/>
        <h5>
    <?php echo $row['recipedescription'] ?></h5><br>
    <h1 class="f1">Ingredients</h1><br/>
        <h5>
    <?php echo $row['ingredients'] ?></h5><br>
    <i><h6>Created by 
    <?php echo $row['username'] ?></h6></i>
        </div>
        <div class="col-md-6" style="padding-top:100px;">
        <img  style="height:auto;width:auto;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>"  style="border-radius:5%"/> </center>

        </div>
    </div>
</div>

    <!-- <div style="padding:30px">
    <center><h1 style="font: 80px sans-serif;color:red"><b>Recipe Details</b></h1>
    <img  style="height:800px;width:auto;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" /> </center>
    <?php echo $row['recipename'] ?><br>
    <?php echo $row['recipedescription'] ?><br>
    <?php echo $row['ingredients'] ?><br>
    <?php echo $row['username'] ?>

    <div> -->
</body>
</html>