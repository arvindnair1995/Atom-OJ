<?php
include_once 'php/connect.php';
include_once 'php/onsubmission.php';
$sql="SELECT D_Id,D_Name FROM DEPARTMENT";
$result=$conn->query($sql);
?>
		
<form class="form" style="margin-top:100px;" action="php/adminfunctions_Create_Course.php" method="get" id="newcourse" accept-charset="utf-8">
   <div class="form-group row">
   	<label for="departmentname" class="col-lg-4 form-control-label"><h4 class="pull-right">Select Department:</h4></label>
   	<div class="col-lg-6 form-group">
   		<select class="form-control" name="departmentname">
   			<?php
   			if($result->num_rows>0)
            {
   		 		while($row=$result->fetch_assoc())
   		 		{
   					echo "<option>".$row["D_Name"]."</option>";
				}
			}
			?>
   		</select>
   	</div>
   </div>
   <div class="form-group row">
    <label for="coursetype" class="col-lg-4 form-control-label"><h4 class="pull-right">Course Type:</h4></label>
   	<div class="col-lg-6 form-group">
   		<select class="form-control" name="coursetype">
   			<option>UG</option>
   			<option>PG</option>
   		</select>
   	</div>
   </div>
   <div class="form-group row">
   	<label for="coursename" class="col-lg-4 form-control-label"><h4 class="pull-right">Course name</h4></label>
   	<div class="col-lg-6 form-group">
   		<input class="form-control" name="coursename" type="text" placeholder="program name"/>
   	</div>
   </div>
   <div class="form-group row">
   	<div class="col-lg-10">
   		<input class="btn btn-success btn-lg pull-right" type="submit" value="Add course" />
   	</div>
   </div>
</form>
<span id="MSG" style="color:red;"></span>
<?php
$conn->close();
?>
