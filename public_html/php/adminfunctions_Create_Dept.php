<?php
include_once 'connect.php';
$Deptname=$_GET['newdeptname'];
if(!empty($Deptname)){
	if(!file_exists("../Files/$Deptname")){
		mkdir("../Files/$Deptname");
		$sql="INSERT INTO DEPARTMENT (D_Name) VALUES('$Deptname')";
		if ($conn->query($sql) === TRUE) {
        	echo "New record created successfully";
        	} else {
        	echo "Error: " . $sql . "<br>" . $conn->error;
         	}

    $conn->close();
	}
	else{
	echo "Department already exists";
	}
}
else{
	echo "Enter a department";
	
}

?>