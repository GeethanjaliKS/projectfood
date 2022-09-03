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

    <?php require 'header.php' ?>

    <!--Hero Section-->
	<div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                   <h1 class="mb-8 text-3xl text-center font-medium text-blue-600">Login</h1>
             <!--   <input type="text" id="comment-box" placeholder="Enter comment">
                    <button id="post">Post</button>
                           <ul id="unordered"></ul>

                           <div class="stars"> -->
 <!-- <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>  -->



               <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='signup-name'
                    name="username"
                    placeholder="username" />

             <!--   <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='signup-email'
                    name="email"
                    placeholder="Email" /> -->

                <input 
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='signup-password'
                    name="password"
                    placeholder="Password" />
             <!--   <input 
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='signup-confirm-password'
                    name="confirm_password"
                    placeholder="Confirm Password" /> -->

                <button
                    type="submit"
                    onClick='signupInputHandler()'
                    class="w-full text-center py-3 rounded bg-blue-600 text-white hover:bg-blue-700 focus:outline-none my-1 font-regular"
                >login</button>

                <div class="text-center text-sm text-grey-dark mt-4 font-regular">
                    By signing up, you agree to the 
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Terms of Service
                    </a>
                 <!--   <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Privacy Policy
                    </a> -->
                </div>
            </div>

            <div class="text-grey-dark mt-6 font-regular">
                Already have an account? 
                <a class="no-underline border-b border-blue text-blue-600" href="login.html">
                    Log in
                </a>.
            </div>
        </div>
    </div> 

    <script type="text/javascript" src="../scripts/loginHandler.js" ></script>
    <script type="text/javascript" src="../scripts/signupHandler.js"></script>

</body>
</html>