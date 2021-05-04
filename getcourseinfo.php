<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Basic Information of Western Course</title>
        <link rel="stylesheet" href="fontawesome/css/all.css" />
        <link rel="stylesheet" href="style.css" />

</head>

<body>
<a href="western.php" class="btn"><i class="fas fa-arrow-left">Last Page</i></a>
<?php
include 'connecttodb.php';
?>

<h2>Course Information Based On Your Choice:</h2>

<?php
	$whichCourse= $_POST["coursenum"];
	$query1 = 'SELECT * FROM westerncourse WHERE westernnum = "'.$whichCourse.'"';

	$result=mysqli_query($connection,$query1);
        if (!$result) {
                die("database query1 failed.");
        }
        while($row=mysqli_fetch_assoc($result)){
                echo 'Course Name: '.$row["westernname"].'<br>';
		echo 'Course Number: '.$row['westernnum'].'<br>';
		echo 'Course weight: '.$row['weight'].'<br>';
        }
        mysqli_free_result($result);
?>

<p>
<p>
<hr>
<p>
<h2>List of Equivalent Outside Course(s)</h2> 

<?php
	$query = "SELECT university.uniname AS 'uniname', outsidecourse.outsidenum AS 'outsidenum', outsidecourse.outsidename AS 'outsidename', outsidecourse.weight AS 'weight', equivalentto.evaluateddate AS 'edate' FROM equivalentto, westerncourse, university, outsidecourse WHERE westerncourse.westernnum = equivalentto.westernnum AND equivalentto.uniid=university.uniid AND outsidecourse.uniid = university.uniid AND equivalentto.outsidenum = outsidecourse.outsidenum AND westerncourse.westernnum = '".$whichCourse."'";

;

	$result=mysqli_query($connection,$query);
	if (!$result) {
		die("database query failed.");
	}
	
        while($row=mysqli_fetch_assoc($result)){
		echo '<li>';
                echo "University Name: ".$row["uniname"]."<br>";
		echo 'Outside Course Name: '.$row["outsidename"]."<br>";
		echo 'Outside Course Number: '.$row["outsidenum"]."<br>";
		echo 'Outside Course Weight: '.$row['weight'].'<br>';
		echo 'Decide Date: '.$row['edate'].'<br><p>';
        }
	

	mysqli_free_result($result);
?>


<?php
	mysqli_close($connection);
?>

</body>
</html>
