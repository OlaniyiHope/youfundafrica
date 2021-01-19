<!DOCTYPE html>
<html lang="en">
<head>
	<title>YouFundAfrica Campaigners and Sponsors</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>
<body>
		<header>
			<nav>
				<div class="adm-nav">
					<ul>
						<li><a href="#">Logout</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<main>
			<section class="dashboard">
				<div class="side-menu">
					<div class="link">
						<div>
							<h3>Campaign</h3>
							<ul>
								<li><a href="addCategory.php"> Start a new campaign</a></li>
								<li><a href="createPost.php">Your CAmpaign</a></li>
								<li><a href="createUsers.php"> Draft and comment</a></li>
							</ul>
						</div>
						<div>
							<h3>Issues</h3>
							<ul>
								<li><a href="#"> Education</a></li>
								<li><a href="viewPost.php">Technology</a></li>
								<li><a href="#">Agriculture</a></li>
								<li><a href="#">Health</a></li>
								<li><a href="../logout.php">Logout</a></li>
							</ul>
						</div>		
							<div>
							<h3>Profile</h3>
							<ul>
								<li><a href="#"> Edit Profile</a></li>
								<li><a href="viewPost.php">Add Profile</a></li>
								<li><a href="#">Add stickers</a></li>
							
								<li><a href="../logout.php">Logout</a></li>
							</ul>
						</div>				
					</div>
				</div>
				<div class="content">
					<div class="form">
						<form action="addPostScript.php" method="POST">
							<div class="form-row">
								<h2>Start a Campaign</h2>
								<div class="col">
									<p>What is your Campaign goal?</p>
									<input type="text" class="txt1" placeholder="Add New Cat" name="txtTitle">
								</div>
								<div class="col">
									<p>Why is your campaign important?</p>
									<input type="text" class="txt1" placeholder="Add New Cat" name="txtTitle">
								</div>
								<div class="col">
									<p>What category best describe your campaign?</p>
									<input type="text" class="txt1" placeholder="Add New Cat" name="txtTitle">
								</div>
								<div class="col">
									<button type="submit">NEXT: HOW CAN PEOPLE HELP</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>
</body>
</html>