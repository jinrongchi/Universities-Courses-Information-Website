<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Western Course Information</title>
        <link rel="stylesheet" href="fontawesome/css/all.css" />
        <link rel="stylesheet" href="style.css" />

</head>

<body>
<?php
	include "connecttodb.php";
?>

	<h1>Western Course Informaion</h1>
        <a href="homepage.html" class="btn"><i class="fas fa-home">HomePage</i></a>
	<h2>Select Course Number:</h2>

	<form action="getcourseinfo.php" method="post">
	<?php
		include 'getcoursenum.php';
	?>
	<input type="submit" value="Get Course Information";>
	</form>

<?php
mysqli_close($connection);
?>


</body>
</html>
