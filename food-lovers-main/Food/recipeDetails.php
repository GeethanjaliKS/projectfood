<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="../styles/main.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
</head>
<body class="bg-blue-50">
<?php require 'header.php'; ?>
<?php require 'insert/connection.php';?>
    <?php
    $id=$_GET['id'];
    $sql = "SELECT recipe_id,recipename,recipedescription,uploadedtime,img,register.username,category_id FROM recipe JOIN register ON recipe.userid=register.userid where recipe.recipe_id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
echo $id;
    ?>
    <div style="padding:30px">
    <center><h1 style="font: 80px sans-serif;color:red"><b>Recipe Details</b></h1>
    <img  style="height:800px;width:auto;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" /> </center>
    <?php echo $row['recipename'] ?><br>
    <?php echo $row['recipedescription'] ?><br>
    <?php echo $row['username'] ?>

    <div>
</body>
</html>