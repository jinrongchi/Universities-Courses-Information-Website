<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Western Course List</title>
	<link rel="stylesheet" href="fontawesome/css/all.css" />
        <link rel="stylesheet" href="style.css" />

</head>

<body>

	<?php
	include 'connecttodb.php';
	?>

	<h1>Western Computer Science Courses</h1>

	<a href="homepage.html" class="btn"><i class="fas fa-home">HomePage</i></a>

	<h2>Basic Information</h2>
	<form action="getcourse.php" method="post">	
		<input type="radio" name="order" value="nameasc">Course Name Ascending<br>
		<input type="radio" name="order" value="namedes">Course Name Descending<br>
		<input type="radio" name="order" value="numbasc">Course Number Ascending<br>
		<input type="radio" name="order" value="numbdes">Course Number Desending<br>
                <input type="submit" value="Get Course Info">
		
		<p>
		
		<?php
		//	if(isset($_POST['order'])){
		//       	include 'getcourse.php';
		//	}
		?>
	</form>

        <p>
        <hr>
        <p>
        <h2>Add A New Course</h2>
	<form action="" method="post">
		Course Name: <input type="text" name="coursename"><br><br>
		Course Number: <input type="text" name="coursenum"><br><br>
		Course Weight: <input type="text" name="courseweight"><br><br>
		Course Suffix: <input type="text" name="coursesuffix"><br><br>
		<input type="submit" name="btnAdd" value="Add Course"><br>

		<?php
			if(isset($_POST['btnAdd'])){
				include 'addcourse.php';
			}
		?>
	</form>


</body>
</html>
