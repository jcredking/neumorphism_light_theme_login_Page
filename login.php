<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Admin | login</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/a1673422ae.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="login-form">
		<div class="user-icon">
			<div class="icon">
				<div class="user"><i class="fas fa-user-alt"></i></div>
			</div>
		</div>
		<form action="../controller/loginAdmin.php" method="POST">
		<input type="text" name="username" id="" class="input-field" placeholder="Username" required>
		<input type="password" name="password" id="" class="input-field" placeholder="Password" required>
		<button type="submit" class="input-field btn">Login</button>
	</form>
	</div>
</body>
</html>