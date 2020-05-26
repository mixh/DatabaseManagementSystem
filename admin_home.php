<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Management System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		<!-- <img src="img/1.jpg" style="margin-left:90px;" class="sha"> -->
			<div id="section">
				<?php include"sidebar.php";?><br>
				<div class="content">
					<h3 class="text" style="font-size: 40px">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 >About Management System</h3><br>
					<!-- <img src="img/home.jpg" class="imgs"> -->
					<p class="para">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					 labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi
					</p>
					<p class="para">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		<?php include"footer.php";?>
	</body>
</html>
