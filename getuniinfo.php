<?php
   $query = "SELECT * FROM university ORDER BY prov ASC";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="uninum" value="';
	echo $row["uniid"];
        echo '">'.$row["uniname"]."<br>";
   }
   mysqli_free_result($result);
?>
