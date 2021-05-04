<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="fontawesome/css/all.css" />
</head>
<body>
<?php
	include "connecttodb.php"
?>
<a href="eqtable.php" class="btn"><i class="fas fa-arrow-left">Last Page</i></a>
<?php

   $whichDate = $_POST["inputdate"];

   $query = 'SELECT * FROM equivalentto WHERE evaluateddate <= "'.$whichDate.'" ORDER BY evaluateddate';
   $result=mysqli_query($connection, $query);
   if (!$result) {
        die("databases query failed.");
    }
  
   echo '<ul>';   
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>';
	echo "Decide Date: ".$row[evaluateddate]."<br>";
	echo "Western Course Number: ".$row[westernnum]."<br>";
	echo "Outside Course Number: ".$row[outsidenum]."<br>";
	echo "University ID: ".$row[uniid]."<p>";
        
   }
   echo '</ul>';
   
   mysqli_free_result($result);
   mysqli_close($connection);
?>
</body>
</html>
