<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Western Course Information</title>
        <link rel="stylesheet" href="fontawesome/css/all.css" />
        <link rel="stylesheet" href="style.css" />
</head>

<body>
<script src="univerinfo.js"></script>
<?php
	include "connecttodb.php";
?>

	<h1>University Informaion</h1>
        <a href="homepage.html" class="btn"><i class="fas fa-home">HomePage</i></a>
	<h2>Select A University For More Detail (In order by province):</h2>

	<form action="getunidetail.php" method="post">
	<?php
		include 'getuniinfo.php';
	?>
	<p>
	<input type="submit" value="Get University Information";>
	</form>

<?php
mysqli_close($connection);
?>

<p>
<hr>
<p>
<p>
<h2>Select Province For University:</h2>

<form action="" method="post">
<select name="pickprov" id="pickprov">
	<option value='1'>Select Here</option>
	<option value='AB'>AB</option><option value='BC'>BC</option>
	<option value='MB'>MB</option><option value='NB'>NB</option>
	<option value='NL'>NL</option><option value='NS'>NS</option>
	<option value='ON'>ON</option><option value='PE'>PE</option>
	<option value='QC'>QC</option><option value='SK'>SK</option>

</select>
</form>
<p>

<?php
	if(isset($_POST['pickprov'])){
		include 'connecttodb.php';
		include 'getuniorder.php';
	}
?>
</body>
</html>
