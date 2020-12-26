<html>
<head>
	<title>Food Farm</title>
	<link rel="stylesheet" href="design/style.css">
</head>
<body>
	<div class="hero">
		<div class="from-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
		    <form id="login" class="input-group" action="validation.php" method="POST">
				<input type="text" name="user" class="input-field" placeholder="User Name" required>	    	
		    	<input type="password" name="password" class="input-field" placeholder="Enter Password" required>
				<br><br><a href="#">Forgot Password?</a><br><br>
                <button type="submit" class="submit-btn">Log In</button>
		    </form>
		    <form id="register" class="input-group" action="registration.php" method="POST">
		    	<input type="text" name="user" class="input-field" placeholder="User Name" required>
		    	<input type="email" name="email" class="input-field" placeholder="Email" required>	    	
		    	<input type="password" for="password" name="password" class="input-field" placeholder="Enter Password" required>
		    	<br><br><p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br><br>
                <button type="submit" class="submit-btn">Register</button>
		    </form>
		</div>
	</div>

	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register(){
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}
		function login(){
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}
	</script>
</body>
</html>