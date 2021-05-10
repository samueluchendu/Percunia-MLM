 
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
 	<meta charset="utf-8">
 	<title>login form</title>
 	<link rel="stylesheet" type="text/css" href="css/style2.css">
 </head>
 <body>
     <div class="center">
     	<h1>Login<img src="img/logo2.jpg" alt="my logo">
           </h1>
     	<form method="post" action="process_login.php">
     		<div class="txt_field">
     			<input type="text" name="email" required>
     			<span></span>
     			<label>Username</label>
     		</div>
     		<div class="txt_field">
     			<input type="password" name="password" required>
     			<span></span>
     			<label>Password</label>
     		</div>
     		<div class="pass">Forget Password?</div>
     		<input type="submit" value="login">
     		<div class="signup_link"> 
               Not a member? <a href="#">Sign-up!</a>
     		</div>
     	</form>
     </div>
 </body>
 </html>