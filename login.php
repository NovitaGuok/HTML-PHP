<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>Login Page</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			require('db.php');
			session_start();
			if (isset($_POST['login'])){
				$username = stripslashes($_POST['user']);
				$username = mysqli_real_escape_string($con,$username);
				$password = stripslashes($_POST['password']);
				$password = mysqli_real_escape_string($con,$password);
				$query = "SELECT * FROM userList WHERE username='$username' and password='".md5($password)."'";
				$result = mysqli_query($con,$query) /*or die(mysql_error())*/;
				$rows = mysqli_num_rows($result);
				if($rows > 0){
					$_SESSION['username'] = $username;
					header("Location: index.php");
				} else{
					echo "<div class='form'><h3>Username/password is incorrect.</h3>
					<br/>Click here to <a href='login.php'>Login</a></div>";
				}
			} else {
				?>
				<div id="loginspace">
					<img src="icon.png" class="avatar">
					<table class="login">
						<tr>
							<td>
								<form name="login" action="" method="post">
									<table>
										<tr>
											<div class="users">
												<td><label class="user">Username</label></td>
												<td><input type="text" class="username" name="user" required></td>
											</div>
										</tr>
										<tr>
											<div class="passes">
												<td><label class="pass">Password</label></td>
												<td><input type="password" class="password" name="password" required></td>
											</div>
										</tr>
										<tr>
											<td colspan="2"><button class="submit" type="submit" name="login" align="center">Login</button></td>
										</tr>
									</table>
								</form>
							</td>
						</tr>
						<tr>
							<td>
								<p>Don't have account?</p>
								<button class="submit2" type="submit" align="center"><a href="registration.php" target="_blank">Register</a></button>
							</td>
						</tr>
					</table>
				</div>
			<?php } ?>
	</body>
</html>
