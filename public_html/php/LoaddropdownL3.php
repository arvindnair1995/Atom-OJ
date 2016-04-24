<?php
var_dump($_POST['LEVEL']);
var_dump($_POST['LEVEL1']);
echo "string";
if(isset($_POST['LEVEL'])===TRUE && empty($_POST['LEVEL'])===FALSE)
{
	
   include_once 'connect.php';
   $Deptname=$conn->real_escape_string(trim($_POST['LEVEL']));
   $CourseType=$conn->real_escape_string(trim($_POST['LEVEL1']));
   echo "string";
   $sql="SELECT C_Name FROM COURSE,DEPARTMENT WHERE D_Name= '$Deptname' AND DEPARTMENT.D_Id=COURSE.D_Id AND C_Type='$CourseType';";
   $result=$conn->query($sql);
   print_r($result);
   if($result->num_rows>0)
	            {
	            	echo "<option>select course name</option>";
	   		 		while($row=$result->fetch_assoc())
	   		 		{
	   					echo "<option>".$row["C_Name"]."</option>";
					}			
				}
   else{
   	echo "string";
   }			
}
else
{
	echo "failed";
	
}
?>