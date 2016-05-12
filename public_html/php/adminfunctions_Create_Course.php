<?php
include_once 'connect.php';
//if(isset($_GET['departmentname']))
$Deptname=$conn->real_escape_string($_GET['departmentname']);
$Coursename=$conn->real_escape_string($_GET['coursename']);
$Coursetype=$conn->real_escape_string($_GET['coursetype']);
if(!empty($Deptname))
{
	if(!empty($Coursename)){
		if(!file_exists("../Files/$Deptname/$Coursetype")){
			mkdir("../Files/$Deptname/$Coursetype");
		}
		if(!file_exists("../Files/$Deptname/$Coursetype/$Coursename")){
		mkdir("../Files/$Deptname/$Coursetype/$Coursename");
			$sqlD="SELECT D_Id FROM DEPARTMENT WHERE D_Name='$Deptname';";
			$result=$conn->query($sqlD);
			
			$dep = $result->fetch_array();
			$depid = $dep['D_Id'];
			$sql="INSERT INTO COURSE (C_Name,C_Type,D_Id) VALUES('$Coursename','$Coursetype','$depid');";

			
			if ($result->num_rows >0 && $conn->query($sql)===TRUE) {
	        	echo "New course ".$Coursename." added successfully";
	        	} 
	        else {
	        	echo "Error: " . $sql . "<br>" . $conn->error;
	         	}

	    $conn->close();
		}
		else{
			echo " ".$Coursename." already exists";
		}
	}
	else{
		echo "Enter a course";
	}
}
else{
	echo "Select a department";
}
?>