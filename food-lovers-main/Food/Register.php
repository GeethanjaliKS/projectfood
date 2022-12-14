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
            .r{
                padding-top: 100px;
                padding-bottom: 200px;
                 border: 100px;

            }
            
           .bg-white{
            opacity: 2.5;
            box-shadow: 500px;
            border: 5px;
            
           } 
            .c{
                background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
            }
            
            
            
         </style>
</head>
          
<body class="c">
<?php require 'header.php' ?>

    <!--Hero Section-->
    <form method="POST" action="insert/insertUser.php">
        <div class="r">
     
           
	<div class="bg-grey-lighter min-h-screen flex flex-col">
        
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center font-medium text-blue-600">Sign-up</h1>
                <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='signup-name'
                    name="fullname"
                    placeholder="User Name" />

                <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='signup-email'
                    name="email"
                    placeholder="Email" />

                  <input type="tel" 
                    placeholder="Phone number" 
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    name="phnum"/>
                          

                <input 
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='signup-password'
                    name="password"
                    placeholder="Password" />
                <input 
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='signup-confirm-password'
                    name="confirm_password"
                    placeholder="Confirm Password" />

                <button
                    type="submit"
                    onClick='signupInputHandler()'
                    class="w-full text-center py-3 rounded bg-blue-600 text-white hover:bg-blue-700 focus:outline-none my-1 font-regular"
                >Create Account</button>

                <div class="text-center text-sm text-grey-dark mt-4 font-regular">
                    By signing up, you agree to the 
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Terms of Service
                    </a> and 
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Privacy Policy
                    </a>
                </div>
            </div>

            <div class="text-grey-dark mt-6 font-regular">
                Already have an account? 
                <a class="no-underline border-b border-blue text-blue-600" href="login.php">
                    Log in
                </a>.
            </div>
        </div>
    </div></div></div> </div>
    <!-- <script type="text/javascript" src="../scripts/loginHandler.js" ></script>
    <script type="text/javascript" src="../scripts/signupHandler.js"></script> -->
</form>

</body>
</html>