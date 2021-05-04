<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<body>

<?php
        include 'connecttodb.php';
?>

<?php
	$whichAttribute = $_POST["attribute"];
        $whichCourse = $_POST["course"];
        
	if ($whichAttribute == 'updatename'){
		$whichValue = $_POST["newname"];
		$query = 'UPDATE westerncourse SET westernname = "'.$whichValue.'" WHERE westernnum="'.$whichCourse.'"';
	}
        else if ($whichAttribute == 'updateweight'){
                $whichValue = $_POST["newweight"];
                $query = 'UPDATE westerncourse SET weight = "'.$whichValue.'" WHERE westernnum="'.$whichCourse.'"';
        }
        else if ($whichAttribute == 'updatesuffix'){
                $whichValue = $_POST["newsuffix"];
                $query = 'UPDATE westerncourse SET suffix = "'.$whichValue.'" WHERE westernnum="'.$whichCourse.'"';
        }


	if(!mysqli_query($connection, $query)){
		die("Error:insert failed" .mysqli_error($connection));
	}else{
		header("Location:getcourse.php");
		exit;
	}
?>

</body>
</html>
