<?php
	include("auth.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome Home</title>
		<link rel="stylesheet" href="style.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php 
			include('db.php');
			$user = $_SESSION['username'];
			$query = "SELECT * FROM adminPost WHERE author='$user'";
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
					<a href="add.php"><button type="button" class="btn btn-success">Create new post</button></a>
					<table class="table table-striped">
						<?php
							if ($result -> num_rows > 0){
									echo "<tr>
											<br>
											<th>TITLE</th>
											<th>AUTHOR</th>
											<th>POSTING DATE</th>
										</tr>
										<br>";
								while ($row = $result -> fetch_assoc()){
						?>
						<tr>
							<td hidden><?php echo $row['id'];?></td>
							<td><?php echo $row['Title'];?></td>
							<td width="30%"><?php echo $row['Author'];?></td>
							<td width="20%"><?php echo $row['postDate'];?></td>
							<td width="5%"><a href="view.php?id=<?=$row['id'];?>">View</a></td>
							<td width="5%"><a href="edit.php?id=<?=$row['id'];?>">Edit</a></td>
							<td width="5%"><a href="delete.php?id=<?=$row['id'];?>">Delete</a></td>
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
		
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>

	</body>
</html>