<?php
        include 'connecttodb.php';
?>

<?php
        function startWith($string)
        {
                return (substr($string,0,2)=='cs');
        }

        $western_name=$_POST['coursename'];
        $western_num=$_POST['coursenum'];

        if(!startWith($western_num)){
                echo "WARNING: Course number has to start with 'cs'";
                exit;
        }


        $western_w=$_POST['courseweight'];
        $western_s=$_POST['coursesuffix'];

        $query1 = 'SELECT * FROM westerncourse';
        $result=mysqli_query($connection,$query1);
        while($row=mysqli_fetch_assoc($result)){
                if($row["westernnum"]==$western_num){
                        echo "WARNING: Your course number is already in the system.";
                        exit;
                }
        }
	mysqli_free_result($result);
	
	$query='INSERT INTO westerncourse VALUES("'.$western_num.'", "'.$western_name.'", "'.$western_w.'", "'.$western_s.'")';
	if(!mysqli_query($connection,$query)){
		die("Insertion failed".mysqli_error($connection));
	}
	echo "Course Added Successfully!";
	mysqli_close($connection);

?>

