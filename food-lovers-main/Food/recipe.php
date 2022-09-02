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
                <h1 class="mb-8 text-3xl text-center font-medium text-blue-600">Add recipe</h1>
               <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='add recipe'
                    name="recipe name"
                    placeholder="Recipe name" /> 

                <div class="mb-3">
                 <label for="" class="form-label"></label>
                 <textarea class="block border  border-grey-light w-full p-3 rounded mb-4 font-light"
                  name="recipe description" id="add recipe"
                  placeholder="Description"
                   rows="3" > 
                    </textarea> 
                    </div>
                    

                    


               <input 
                    type="time"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='preparation time'
                    name="time"
                    placeholder="Preparation time" /> 
                    
                    
                <input 
                    type="ingredients"
                    class="block border border-grey-light w-full p-3 rounded mb-4 font-light"
                    id='ing'
                    name="ingredients"
                    placeholder="Fill your creativity" />

                <button
                    type="submit"
                    onClick='signupInputHandler()'
                    class="w-full text-center py-3 rounded bg-blue-600 text-white hover:bg-blue-700 focus:outline-none my-1 font-regular"
                >Add recipe</button>

                <!-- <div class="text-center text-sm text-grey-dark mt-4 font-regular">
                    By signing up, you agree to the 
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Terms of Service
                    </a> and 
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Privacy Policy
                    </a>
                </div> -->
            </div>

            <!--<div class="text-grey-dark mt-6 font-regular">
                Already have an account? 
                <a class="no-underline border-b border-blue text-blue-600" href="login.html">
                    Log in
                </a>.
            </div> -->
        </div>
    </div>

    <script type="text/javascript" src="../scripts/loginHandler.js" ></script>
    <script type="text/javascript" src="../scripts/signupHandler.js"></script>

</body>
</html>