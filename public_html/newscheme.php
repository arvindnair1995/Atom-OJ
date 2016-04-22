<?php
include_once 'php/connect.php';
$sql="SELECT D_Id,D_Name FROM DEPARTMENT";
$result=$conn->query($sql);
?>

<form class="form" style="margin-top:100px;" action="php/adminfunctions_Create_Scheme.php" method="get" accept-charset="utf-8">
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
    <label for="programname" class="col-lg-4 form-control-label"><h4 class="pull-right">Select Program:</h4></label>
   	<div class="col-lg-6 form-group">
   		<select class="form-control" name="coursetype">
   			<option>UG</option>
   			<option>PG</option>
   		</select>
   	</div>
   </div>
   <div class="form-group row">
   	<label for="scheme" class="col-lg-4 form-control-label"><h4 class="pull-right">Scheme:</h4></label>
   	<div class="col-lg-6 form-group">
   		<input class="form-control" name="scheme" type="year"/>
   	</div>
   </div>
   <div class="form-group row">
   	<div class="col-lg-10">
   		<input class="btn btn-success btn-lg pull-right" type="submit" value="Add Scheme" />
   	</div>
   </div>
</form>
<?php
$conn->close();
?>
