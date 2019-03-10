<?php
    require('db.php');
	include("auth.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome Home</title>
		<link rel="stylesheet" href="style.css"/>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php 
			include('db.php');
			$id = $_GET['id'];
			$query = "SELECT * FROM adminPost WHERE id='$id'";
			$result = $con -> query($query);
			$no = 1;
		?>
		
		<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="dashboard.php">Dashboard</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">My account</a>
						<a class="dropdown-item" href="#">Account setting</a>
						<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="logout.php">Log out</a>
						</div>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</nav>

		<br>
		
		<div class="form">
			<div class="container">
				<div class="jumbotron">
					<table width="100%" class="table table-light">
						<?php
							if ($result -> num_rows > 0){
								while ($row = $result -> fetch_assoc()){

						?>
						<tr>
							<td>
								<table width="30%">
									<tr colspan="3">
										<td align="center" width="10%"><a href="add.php">+New post</a></td>
										<td align="center" width="10%"><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
										<td align="center" width="10%"><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
									</tr>
								<table>
							</td>
						</tr>
						<tr class="table table-light">
							<td hidden><?php echo $row['id'];?></td>
							<th colspan="3"><h1><?php echo $row['Title'];?><h1></th>
						</tr>
						<tr>
							<td>
								<h6>BY <?=$_SESSION['username'];?></h6>
							</td>
						</tr>
						<tr>
							<td colspan="3"><?php echo $row['Publish'];?></td>
							<td colspan="3"><img src="<?php echo "uploads/".$row['file'];?>" width="500px"></td>
						</tr>
						<?php
							$no++;
								}
							} else {
								echo "<br><br>0 results";
							}
							$con -> close();
						?>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>