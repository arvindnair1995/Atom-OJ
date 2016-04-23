<?php
include_once 'connect.php';
$Deptname=$conn->real_escape_string($_GET['departmentname']);
$Coursetype=$conn->real_escape_string($_GET['coursetype']);
$Coursename=$conn->real_escape_string($_GET['coursename']);
$Scheme=$conn->real_escape_string($_GET['scheme']);
	if(!file_exists("../Files/$Deptname/$Coursetype/$Coursename/$Scheme")){
		mkdir("../Files/$Deptname/$Coursetype/$Coursename/$Scheme");
		$sql="INSERT INTO SCHEME (Scheme_Name,Start,End) VALUES('$Scheme','$Scheme',$Scheme+5)";
		if ($conn->query($sql) === TRUE) {
        	echo "**New Scheme ".$Scheme." added successfully";
        	}
		 else {
        	echo "Error: " . $sql . "<br>" . $conn->error;
         	}

    $conn->close();
	}
	else{
echo "**Scheme ".$Scheme." already exists";
	}

?>