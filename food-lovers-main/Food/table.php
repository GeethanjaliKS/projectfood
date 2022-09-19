<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="../styles/main.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}

t{
    padding-top: 100px;
}
</style>
</head>
<body class="bg-blue-50">
<?php require 'header.php'; ?>
<?php require 'insert/connection.php';?>
<?php 
    $sql = "SELECT * from register where not role='admin'";
    $result = $conn->query($sql);
    ?>
<div class="bg-grey-lighter min-h-screen flex flex-col" style="padding:50px">
  <center><h1>Users</h1></center>
<table align='center' cellspacing=2 cellpadding=5  style="width:50%">
<tr>
<th>UserName</th>
<th>Email</th>
<th>Contact</th>
<th>Action</th>
</tr>
<?php
while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['Email_ID'] ?></td>
    <td><?php echo $row['contact'] ?></td>
    <td><a href="removeUser.php?id=<?php echo $row['userid']?>" class="btn btn-outline-danger" >DELETE</a></td>
</tr>
<?php }?>
</table>
</div>
</body>
</html>
