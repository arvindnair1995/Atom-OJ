<?php
var_dump($_POST['LEVEL']);
echo "string";
if(isset($_POST['LEVEL'])===TRUE && empty($_POST['LEVEL'])===FALSE)
{

   include_once 'connect.php';
   $Deptname=$conn->real_escape_string(trim($_POST['LEVEL']));
   $sql="SELECT DISTINCT C_Type FROM COURSE,DEPARTMENT WHERE D_Name= '$Deptname' AND DEPARTMENT.D_Id=COURSE.D_Id ;";
   $result=$conn->query($sql);
   if($result->num_rows>0)
	            {
	            	echo "<option>select course type</option>";
	   		 		while($row=$result->fetch_assoc())
	   		 		{
	   		 			
	   					echo "<option>".$row["C_Type"]."</option>";
					}			
				}
}
else
{
	echo "failed";
	
}
?>