<div class="sidebar"><br>
<h3 class="text">Navigation Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">About</a></li>
			<li class="li"><a href="add_class.php"> Class</a></li>
			<li class="li"><a href="add_sub.php"> Subject</a></li>
			<li class="li"><a href="add_staff.php"> Staff</a></li>
			<li class="li"><a href="view_staff.php">View Staff</a></li>
			<li class="li"><a href="set_exam.php">Set Exam</a></li>
			<li class="li"><a href="view_exam.php">View Exam</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		';
	}
	else{
		echo'
			<li class="li"><a href="teacher_home.php"> Add Your Profile Profile</a></li>
			<li class="li"><a href="handle_class.php"> Add Your Classes</a></li>
			<li class="li"><a href="tech_view_exam.php">View Exam</a></li>

			<li class="li"><a href="logout.php">Logout</a></li>


		';
	}


?>


</ul>

</div>
