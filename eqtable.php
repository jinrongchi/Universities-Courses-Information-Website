<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Equivalent Table</title>
        <link rel="stylesheet" href="fontawesome/css/all.css" />
	<link rel="stylesheet" href="style.css" />
</head>

<body>

	<h1>Equivalent Table Information</h1>
        <a href="homepage.html" class="btn"><i class="fas fa-home">HomePage</i></a>
	<h2>Enter Your Date:</h2>

<form action="geteqtable.php" method="post">

	Enter Date(yyyy-mm-dd):<input type="text" name="inputdate"><br><br>
	<input type="submit" name="btnCheck" value="Show The Equivalent Table"><br>
</form>
<p>
<hr>
<p>
<p>
<h2>Create New Equivalency:</h2>
<form action="" method="post">
	Western Course Number: <input type="text" name="western"><br><br>
	Outside Course Number: <input type="text" name="outcourse"><br><br>
	University ID: <input typie="text" name="universityid"><br><br>
	<input type="submit" name="btnCreate" value="Create Equivalency"><br>

	<?php
		if(isset($_POST['btnCreate'])){
			include 'addeqtable.php';
		}
	?>
</form>


</body>
</html>
