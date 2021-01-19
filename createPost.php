<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BlogProg Admin only</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
	</head>
	<body>
		<!--<header>
			<nav>
				<div class="adm-nav">
					<ul>
						<li><a href="#">Logout</a></li>
					</ul>
				</div>
			</nav>
		</header> -->
		<main>
			<section class="dashboard">
				<div class="side-menu">
					<div class="link">
						<div>
							<h3>Add new</h3>
							<ul>
								<li><a href="addCategory.php"> Add Topic Category</a></li>
								<li><a href="createPost.php">Create post</a></li>
								<li><a href="createUsers.php"> Create users</a></li>
							</ul>
						</div>
						<div>
							<h3>Preview all</h3>
							<ul>
								<li><a href="#"> view category</a></li>
								<li><a href="viewPost.php">view post</a></li>
								<li><a href="#">view users</a></li>
								<li><a href="#">comment</a></li>
								<li><a href="../logout.php">Logout</a></li>
							</ul>
						</div>						
					</div>
				</div>
				<div class="content">
					<div class="form">
						<?php
							if (isset($_GET['error'])) {
								$err = $_GET['error'];
								
								if ($err == "Err001") {
									echo "<p style='color:red'> Big image file, Try again (max: 1mb). </p>";
								}
								elseif ($err == "Err002") {
									echo "<p style='color:red'> Invalid image file format, Try again.. </p>";
								}
							}
						?>


						<form action="addPostScript.php" method="POST" enctype="multipart/form-data">
							<div class="form-row">
								<div class="col">
									<select class="txt" name="txtCat">
										<option selected="true" disabled="true">--Select Category--</option>
										<?php
											require_once '../dbconnection.php';  

											$result = mysqli_query($con,"SELECT `cat_Id`, `cat_desc` FROM category");                                                      
											while($row = mysqli_fetch_array($result)) {

										       echo '<option  value="'.$row['cat_Id'].'">'.$row['cat_desc'].'</option>';       
											}
										?>

									</select>
								</div>

								<div class="col">
									<p>Post Title</p>
									<input type="text" name="txtTitle" class="txt1" >
								</div>

								<div class="col">
									<p>Enter Content</p>
									<textarea class="txt2" name="txtContent"></textarea>
								</div>	
								<div class="col">
									<p>Display Post at home page</p>
									<select class="txt" name="txtHome">
										<option>No</option>
										<option>Yes</option>
									</select>
								</div>
								<div class="col">
									<p>Trending Post</p>
									<select class="txt" name="txtTrending">
										<option>No</option>
										<option>Yes</option>
									</select>
								</div>
								<div class="col">
									<p>status</p>
									<select class="txt" name="txtStatus">
										<option>Draft</option>
										<option>Publish</option>
									</select>
								</div>
								<div class="col" style="margin-top: 12px; margin-bottom: 12px;">
									<input type="file" name="postIMG" placeholder="Upload Image">
								</div>	
								<div class="col">
									<button type="submit">Create Post</button>
								</div>						
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>
	</body>
</html>





