<!doctype html>
<html>
<head>
  <!-- ... -->
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



    <!--Hero Section-->
    <form method="POST" action="insert/insertrecipe.php" enctype="multipart/form-data">
	<div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center font-medium text-blue-600">Add recipe</h1>
               <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='add recipe'
                    name="recipe_name"
                    placeholder="Recipe name" /> 

             
                 <textarea class="block border  border-grey-light w-full p-3 rounded mb-4 font-light"
                  name="recipe_description" id="add recipe"
                  rows="3"  
                  placeholder="Description"></textarea>
             
                  <label for="category">Select the Category</label>
                    <?php
                     $sql = 'SELECT category_id,category_name,descript FROM categories';
                     $result = $conn->query($sql);
                     ?>
                     <select name='category' id='category' value="">
                        <?php
                     while($row = $result->fetch_assoc()) {
                    echo "<option value='". $row['category_id'] ."'>" .$row['category_name'] ."</option>" ;
                 }
                 
                 ?>
                 </select>
              <br>

                  <!-- <label for="myfile">upload image</label>
                   <input type="file" id="image" 
                         name="image" multiple="multiple" /> <br><br> -->

                   <label for="file">upload create video</label>
                 <input type="file"   id="file1"   name="upload">      
                
                 <label>Select Image File:</label>
                <input type="file" name="image"><br/><br/>
                <input type="submit" name="submit" value="Upload">
                <!-- <button
                    type="submit"
                    onClick='signupInputHandler()'
                    class="w-full text-center py-3 rounded bg-blue-600 text-white hover:bg-blue-700 focus:outline-none my-1 font-regular"
                >Add recipe</button> -->
            </div>
        </div>
    </div>

   <!-- <script type="text/javascript" src="../scripts/loginHandler.js" ></script>
    <script type="text/javascript" src="../scripts/signupHandler.js"></script> -->
</form>
</body>
</html>