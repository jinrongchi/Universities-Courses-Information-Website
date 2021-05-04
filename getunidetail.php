<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Basic Information of Western Course</title>
        <link rel="stylesheet" href="fontawesome/css/all.css" />
        <link rel="stylesheet" href="style.css" />
</head>

<body>
<a href="univerinfo.php" class="btn"><i class="fas fa-arrow-left">Last Page</i></a>
<?php
include 'connecttodb.php';
?>

<h2>University Information Based On Your Choice:</h2>

<?php
	$whichU= $_POST["uninum"];
	$query1 = 'SELECT * FROM university WHERE uniid = "'.$whichU.'"';

	$result=mysqli_query($connection,$query1);
        if (!$result) {
                die("database query1 failed.");
        }
        while($row=mysqli_fetch_assoc($result)){
                echo 'University Name: '.$row["uniname"].'<br>';
                echo 'University Nickname: '.$row["nickname"].'<br>';
		echo 'University Id: '.$row['uniid'].'<br>';
		echo 'City: '.$row['city'].'<br>';
                echo 'Province: '.$row["prov"].'<br>';
        }
        mysqli_free_result($result);
?>

<p>
<p>
<hr>
<p>
<h2>List of University's Course(s)</h2> 

<?php
	$query = "SELECT outsidecourse.outsidename AS 'outsidename', outsidecourse.outsidenum AS 'outsidenum' FROM university INNER JOIN outsidecourse ON university.uniid = outsidecourse.uniid AND university.uniid = '".$whichU."'";
;

	$result=mysqli_query($connection,$query);
	if (!$result) {
		die("database query failed.");
	}
	
        while($row=mysqli_fetch_assoc($result)){
		echo '<li>';
                echo $row["outsidename"].' ('.$row["outsidenum"].')<br>';
        }
	

	mysqli_free_result($result);
?>


<?php
	mysqli_close($connection);
?>

</body>
</html>
