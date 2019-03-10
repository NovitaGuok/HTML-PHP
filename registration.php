<html>
	<head>
		<meta charset="utf-8">
		<title>Registration</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			require('db.php');
			if (isset($_REQUEST['username'])){
				$username = stripslashes($_POST['username']);
				$username = mysqli_real_escape_string($con,$username);
				$email = stripslashes($_POST['email']);
				$email = mysqli_real_escape_string($con,$email);
				$password = stripslashes($_POST['password']);
				$password = mysqli_real_escape_string($con,$password);
				$spassword = stripslashes($_POST['password']);
				$spassword = mysqli_real_escape_string($con,$password);
				if ($password == $password){
					$query = "SELECT * FROM userList WHERE username = '$username'";
					$result = mysqli_query($con, $query);
					if (mysqli_num_rows($result)>0){
						echo '<script type="text/javascript"> alert ("User already exist, try another username") </script>';
						echo "<div class='form'> Click here to <a href='login.php'>Login</a> or <a href='registration.php'>Register</a> </div>";
					} else {
						$query = "INSERT into userList (username, email, password) VALUES ('$username', '$email', '".md5($password)."')";
						$result = mysqli_query($con, $query);
						if ($result){
							echo "<div class='form'><h3>You are registered successfully.</h3><br/>
								Click here to <a href='login.php'>Login</a></div>";
						} 
					}
				}
			} else{
			?>
			<h1 align="center">Registration</h1>
			<div class="form">
				<div id="loginspace">
					<form name="registration" action="" method="post">
						<table>
							<tr>
								<div class="users">
									<td><label class="user">Username</label></td>
									<td><input type="text" class="username" name="username" required></td>
								</div>
							</tr>
							<tr>
								<div class="mails">
									<td><label class="mail">Email</label></td>
									<td><input type="text" class="email" name="email" required></td>
								</div>
							</tr>
							<tr>
								<div class="passes">
									<td><label class="pass">Password</label></td>
									<td><input type="password" class="password" name="password" required></td>
								</div>
							</tr>
							<tr>
								<td colspan="2"><button class="submit" type="submit" name="register" align="center">Register</button></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<?php } /*
				require('db.php');
				include("connection.php");
				if(isset($_POST['register'])){
					$username = $_POST['username'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$sql = "INSERT INTO userList VALUES('','$username','$email','$password')";
					$query = mysql_query($sql);
					if($query){
						echo "<script>alert('Data barang berhasil dimasukkan ke database')</script>";
					}
					else {
						echo "<script>alert('Data barang gagal dimasukkan ke database')</script>";
					echo mysql_error();
					}
				}*/
			?>
	</body>
</html>