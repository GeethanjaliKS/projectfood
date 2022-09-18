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
    .bg{
        background-color: rgb(196 181 253);
    }
  </style>
       
</head>
<body class="bg">
    <!--<div class="bg-no-repeat bg-center" style="background-image: url("flatlay-iron-skillet-with-meat-and-other-food.jpg");"></div>
    Header Navigation Section -->
    <?php require 'header.php' ?>
    <?php require 'insert/connection.php';?>
    <!--Login Section-->
    <div>
        <form  action="checklogin.php" method="post">
            <div class="bg-grey-lighter min-h-screen flex flex-col">
                <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                    <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                        <h1 class="mb-8 text-3xl text-center font-medium text-blue-600">Log In</h1>
                        <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                        id="login-email"
                        name="email"
                        placeholder="Email" />
                        <input 
                            type="password"
                            class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                            id='login-password'
                            name="password"
                            placeholder="Password" />

                            <!--   <div id="highlighted" class="hl-basic hidden-xs">
  
    
                            </div> -->
                            <input class="btn btn-primary" type="submit" value="submit"> 
           
                            <div class="text-grey-dark mt-6 font-regular">
                                Don't have an account? 
                                <a class="no-underline border-b border-blue text-blue-600" href="Register.php">
                                    Sign up</a>.
                            </div>
                        </div>
        </div>
</form>
</div>
	<!-- <script type="text/javascript" src="../scripts/loginHandler.js" ></script> -->
</body>
</html>