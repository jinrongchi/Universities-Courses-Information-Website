<?php
    include 'connecttodb.php';
?>

<ol>
<?php
        $query='SELECT * FROM university';
        $result=mysqli_query($connection, $query);
	if (!$result) {
		die("database query failed.");
	}
	while ($row=mysqli_fetch_assoc($result)) {
		echo '<li>';
		echo $row["uniname"]." (".$row["nickname"].")";
	}
	mysqli_free_result($result);
?>
</ol>

<?php
	mysqli_close($connection);
?>
