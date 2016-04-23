<?php
include_once 'connect.php';
//if(isset($_GET['departmentname']))
$Deptname=$conn->real_escape_string($_GET['departmentname']);
$Coursename=$conn->real_escape_string($_GET['coursename']);
$Coursetype=$conn->real_escape_string($_GET['coursetype']);
if(!empty($Coursename)){
	if(!file_exists("../Files/$Deptname/$Coursetype")){
		mkdir("../Files/$Deptname/$Coursetype");
	}
	if(!file_exists("../Files/$Deptname/$Coursetype/$Coursename")){
	mkdir("../Files/$Deptname/$Coursetype/$Coursename");
		$sql="INSERT INTO COURSE (C_Name,C_Type) VALUES('$Coursename','$Coursetype')";
		if ($conn->query($sql) === TRUE) {
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
?>