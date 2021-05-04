<!DICTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />

</head>

<body>
        <script>
        function suredelete(){
                var sureToDelete = confirm("The course will be deleted forever by clicking on OK");
                if (sureToDelete){
                }
        }
        </script>

<?php
        include 'connecttodb.php';
?>
<h3>The course you want to delete is equivelent to the outside course(s):</h3>

<?php
        $whichCourse = $_POST["course"];
        $query = 'SELECT equivalentto.outsidenum AS "coursenum", university.uniname AS "schoolname" FROM equivalentto INNER JOIN westerncourse ON westerncourse.westernnum = equivalentto.westernnum INNER JOIN university ON equivalentto.uniid=university.uniid AND westerncourse.westernnum = "'.$whichCourse.'"';
        $result=mysqli_query($connection, $query);

	if (!$result) {
		die("database query failed.");
	}

	while ($row=mysqli_fetch_assoc($result)) {
		echo $row["coursenum"]."(".$row["schoolname"].")<br>";

	}
        $query1 = 'DELETE FROM westerncourse WHERE westernnum="'.$whichCourse.'"';
	if(isset($_POST['btnDelete'])){
            if(!mysqli_query($connection, $query1)){
                die("Error:delete failed".mysqli_error($connection));
            }else{
		header("Location:getcourse.php");
            }
        }   
	mysqli_free_result($result);
?>
<br>

<?php
	mysqli_close($connection);
?>
</body>
</html>
