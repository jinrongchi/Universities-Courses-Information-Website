<?php
   $whichProv=$_POST["pickprov"];
   $query = "SELECT * FROM university where prov='".$whichProv."'";
   $result = mysqli_query($connection,$query);

   if (!$result) {
        die("databases query failed.");
    }

   echo"(Note: If is empty means no university from the selected province.)";

   echo"<ul>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>'.$row[uniname].' ('.$row[nickname].')</li>';
	
   }
   echo"</ul>";
   mysqli_free_result($result);
?>
