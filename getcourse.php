<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Basic Information of Western Course</title>
        <link rel="stylesheet" href="fontawesome/css/all.css" />
        <link rel="stylesheet" href="style.css" />

</head>

<body>
        <script>
        function suredelete(){
                var sureToDelete = confirm("The course will be deleted forever by clicking on OK");
                return (sureToDelete)
        }
        </script>

        
<h2>Course List Based On the Order</h2>

<a href="editwestern.php" class="btn"><i class="fas fa-arrow-left">Last Page</i></a>
<p>

<?php
    include 'connecttodb.php';
?>

<?php
    $whichOrder= $_POST["order"];
    if ($whichOrder == "nameasc"){
        $query = 'SELECT * FROM westerncourse ORDER BY westernname';
        $result = mysqli_query($connection, $query);
    }else if ($whichOrder == "namedes"){
        $query = 'SELECT * FROM westerncourse ORDER BY westernname DESC';
        $result=mysqli_query($connection,$query);
    }else if ($whichOrder == "numbasc"){
        $query = 'SELECT * FROM westerncourse ORDER BY westernnum';
        $result=mysqli_query($connection,$query);
    }else{
        $query = 'SELECT * FROM westerncourse ORDER BY westernnum DESC';
        $result=mysqli_query($connection,$query);
    }

    if (!$result) {
        die("database query failed.");
    }
?>



<form action="editcourse.php" method="post">
<?php
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name ="course" value ="';
	echo $row["westernnum"];
        echo '">'.$row["westernname"]."(".$row["westernnum"]."".$row["suffix"].") Weight: ".$row['weight']."<br><br>";
    }
    mysqli_free_result($result);
?>

<button type="submit" formaction="deletecourse.php">Check Equivalent Table For This Course</button>
<button type="submit" name="btnDelete" formaction="deletecourse.php">Delete Course Forever (No further confirm)</button><br><br>

<h3>Enter a new value to update the attribute of the course you selected above</h3>

<input type="radio" name="attribute" value="updatename">Update Course Name:
<input type="text" name="newname"><br><br>
<input type="radio" name="attribute" value="updateweight">Update Course Weight:
<input type="text" name="newweight"><br><br>
<input type="radio" name="attribute" value="updatesuffix">Update Course Suffix:
<input type="text" name="newsuffix"><br><br>

<button type="submit">Update Course</button>

</form>

<?php
	mysqli_close($connection);
?>
</body>
</html>
