<?php
        include 'connecttodb.php';
?>

<?php
        $western_num=$_POST['western'];
        $outcourse_num=$_POST['outcourse'];
        $university_id=$_POST['universityid'];

	$whetherWestern = False;
	$whetherOutside = False;

        $query = 'SELECT * FROM westerncourse';
        $result=mysqli_query($connection,$query);

        if(!mysqli_query($connection,$query)){
                die("Insertion failed".mysqli_error($connection));
        }


        while($row=mysqli_fetch_assoc($result)){
                if($row["westernnum"]==$western_num){
                        $whetherWestern = True;
                }
        }
	mysqli_free_result($result);
	

	$query1 = 'SELECT * FROM outsidecourse';
	$result=mysqli_query($connection,$query1);

	if(!mysqli_query($connection,$query1)){
                die("Insertion failed".mysqli_error($connection));
        }

        while($row=mysqli_fetch_assoc($result)){
                if($row["outsidenum"]==$outcourse_num && $row["uniid"]==$university_id){
                        $whetherOutside = True;
                }
        }
        mysqli_free_result($result);

	if($whetherWestern==TRUE && $whetherOutside==TRUE){
		$query2='SELECT * FROM equivalentto';
		$result=mysqli_query($connection,$query2);
		while($row=mysqli_fetch_assoc($result)){
			if($row["outsidenum"]==$outcourse_num && $row["uniid"]==$university_id && $row["westernnum"] == $western_num){
				$query3='UPDATE equivalentto SET evaluateddate = CURDATE() WHERE outsidenum = "'.$outcourse_num.'" AND uniid = "'.$university_id.'" AND westernnum = "'.$western_num.'"';
				if(!mysqli_query($connection, $query3)){
					die("Error:update failed" .mysqli_error($connection));
				}else{
					echo "Date Modified Successfully.";
					exit;
				}
			}
		}
		$query4='INSERT INTO equivalentto VALUES("'.$western_num.'", "'.$outcourse_num.'", "'.$university_id.'", CURDATE())';
		if(!mysqli_query($connection, $query4)){
                	die("Error:update failed" .mysqli_error($connection));
                }else{
			echo "Equivalency Created Successfully.";
			exit;
		}

	}
	else{
		echo "Information does not match in the system. Please enter the existing courses
.";
	}
	mysqli_close($connection);

?>
