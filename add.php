<?php
	require('db.php');
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
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	<body>
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
					<!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
				</form>
			</div>
		</nav>
		<div class="jumbotron">
            <div class="form-group">
                <form action="addPost.php" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
							<td width="20%" rowspan="3">
								<nav class="nav flex-column">
									<a class="nav-link active" href="dashboard.php">Posts</a>
									<a class="nav-link" href="#">Link</a>
									<a class="nav-link" href="#">Link</a>
									<a class="nav-link disabled" href="#">Disabled</a>
								</nav>
								<script src="https://calendar.time.ly/embed.js" data-src="https://calendar.time.ly/wynf1vu1/month" data-max-height="0" id="timely_script" class="timely-script"></script>
							</td>
							<td>
								<div class="form-group">
									<textarea class="form-control" id="exampleFormControlTextarea1" name="title" placeholder="Enter title here" rows="1"></textarea>
								</div>
							</td>
							<td width="15%" rowspan="2">
								<!--<a href="#" class="btn btn-success btn-block">Publish!</a>-->
								<input type="submit" class="btn btn-success btn-block" value="Publish!" name="publish">
								<a href="#" class="btn btn-secondary btn-block">Save draft</a>
								<button class="btn btn-primary dropdown-toggle btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
									Format
								</button>
								<div class="collapse" id="collapseExample">
									<div class="card card-body">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
											<label class="form-check-label" for="exampleRadios1">
												Standard
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
											<label class="form-check-label" for="exampleRadios2">
												Audio
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
											<label class="form-check-label" for="exampleRadios2">
												Aside
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
											<label class="form-check-label" for="exampleRadios2">
												Chat
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
											<label class="form-check-label" for="exampleRadios2">
												Gallery
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
											<label class="form-check-label" for="exampleRadios2">
												Image
											</label>
										</div><div class="form-check">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
											<label class="form-check-label" for="exampleRadios2">
												Link
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
											<label class="form-check-label" for="exampleRadios2">
												Quote
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
											<label class="form-check-label" for="exampleRadios2">
												Status
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
											<label class="form-check-label" for="exampleRadios2">
												Video
											</label>
										</div>
									</div>
								</div>								
							</td>
                        </tr>
						<tr>
							<td>
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Media</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Paragraph</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
										<table width="100%">
											<tr>
												<td class="table-active">
													<div class="custom-file">
														<input type="file" name="file" class="custom-file-input" id="customFile">
														<label class="custom-file-label" for="customFile">Choose file</label>
													</div>
												</td>
											</tr>
										</table>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
										<table width="100%">
											<tr>
												<td class="table-active">
													<div class="custom-file">
														<button button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-align-right"></i></button>
														<button button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-align-center"></i></button>
														<button button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-align-right"></i></button>
														<button button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-align-justify"></i></button>
													</div>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Write your post here!" name="posting" rows="25"></textarea>
								</div>
							</td>
						</tr>
                    </table>
                </form>
            </div>
        </div>
	</body>
</html>