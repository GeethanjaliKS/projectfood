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
<style>
  .c{
    background-image: linear-gradient(to right top, #6bd1bf, #80d2ae, #98d29e, #b0d191, #c8ce88, #dac57a, #edba73, #ffad74, #ff937a, #ff7892, #ff62b8, #fb5fe7);
  }
</style>
</head>
<body class="c">

<?php require 'header.php' ?>
    <!--Hero Section-->
    <form action="insert/insertcat.php" method="POST">
	<div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center font-medium text-blue-600">Category</h1>
              
                   <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='category'
                    name="category_name" 
                    placeholder="Categary-name"/><br>

               <textarea class="block border  border-grey-light w-full p-3 rounded mb-4 font-light"
                  name="desc" id="desc"
                  rows="3"  
                  placeholder="Description"></textarea>
  
                <button
                    type="submit"
                    onClick='signupInputHandler()'
                    class="w-full text-center py-3 rounded bg-blue-600 text-white hover:bg-blue-700 focus:outline-none my-1 font-regular"
                >ADD</button>
            
</form>
  <!--  <script type="text/javascript" src="../scripts/loginHandler.js" ></script>
    <script type="text/javascript" src="../scripts/signupHandler.js"></script> -->

</body>
</html>