<?php
// Start the session
session_start();
?>
 <!-- Header Navigation Section -->
 <header>
        <nav class="bg-white shadow-lg fadeInTop">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
						<!--<a href="#" class="flex items-center py-4 px-2">
								<<img src="../assets/images/logo-display.svg" alt="Logo"> -->
								<h1>PAAKVIDHI</h1>
							
							<link rel="stylesheet" href="style.css">
							
							<style>
h1{
  font-family: 'Trade Winds';
  color:#1E90FF;
  font-size: 50px;
}
  </style>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
                        <a href="home.php" class="py-4 px-2 text-base font-regular primary-color" style="text-decoration: none;">Home</a>
						
						<?php if(isset($_SESSION['user'])) {
							if($_SESSION['role']=="admin"){
								echo '<a href="category.php " class="py-4 px-2 text-base font-regular primary-color" style="text-decoration: none;">Add category</a>';	
								echo '<a id="nav-login-btn" href="table.php" class="py-2 px-2 text-base font-regular primary-color" style="text-decoration: none;">View Users</a>';
							}
						echo '<a href="viewRecipe.php " class="py-4 px-2 text-base font-regular primary-color" style="text-decoration: none;">View Recipe</a>';
						echo '<a href="recipe.php " class="py-4 px-2 text-base font-regular primary-color" style="text-decoration: none;">Add Recipe</a>';
					  echo '<a id="nav-login-btn" href="logout.php" class="py-2 px-2 text-base font-regular primary-color" style="text-decoration: none;">Log Out</a>';
					  }
					  else{
						echo '<a id="nav-login-btn" href="login.php" class="py-2 px-2 text-base font-regular primary-color" style="text-decoration: none;">Log In</a>';
					?>
					
						<a id="nav-signup-btn" href="Register.php">
						<button class="bg-blue-600 hover:bg-blue-700 text-white text-base font-regular py-2 px-4 rounded">
                            Sign Up
                        </button>
						
						</a>
						<?php } ?>
					
					<!--	<button class="bg-blue-600 hover:bg-blue-700 text-white text-base font-regular py-2 px-4 rounded">
                            Admin
                        </button> -->
						
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-blue-600"
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li id="nav-profile-img-mobile"><a href="profile.html" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300 text-base font-regular">Profile</a></li>
					<li><a href="home.html" class="block text-sm px-2 py-4 text-white bg-blue-600 text-base font-regular">Home</a></li>
					<li><a href="contact.html" class="block text-sm px-2 py-4 hover:bg-blue-600 transition duration-300 text-base font-regular">Contact Us</a></li>
					<li id="nav-login-btn-mobile"><a href="login.html" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300 text-base font-regular">Log In</a></li>
					<li class="active" id="nav-signup-btn-mobile"><a href="signup.html" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300 text-base font-regular">Sign Up</a></li>
                   <!-- <li class="active" id="nav-signup-btn-mobile"><a href="signup.html" class="block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300 text-base font-regular">admin</a></li>		-->		
				</ul>
			</div>
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>
    </header>