<?php 
 include_once 'php/onsubmission.php';
?>
<form class="form" style="margin-top:100px;" action="php/adminfunctions_Create_Scheme.php" method="get" id="newscheme" accept-charset="utf-8">
   <div class="form-group row">
   	<label for="departmentname" class="col-lg-4 form-control-label"><h4 class="pull-right">Select Department:</h4></label>
   	<div class="col-lg-6 form-group">
   		<select class="form-control parent" id="dept" name="departmentname">
   			<option>select department</option>
   			<?php>include_once 'php/connect.php';
    echo "in fetch";
	$sql="SELECT D_Name FROM DEPARTMENT";
	 
	$result=$conn->query($sql);
	if($result->num_rows>0)
	            {echo "string";
	   		 		while($row=$result->fetch_assoc())
	   		 		{
	   					echo "<option>".$row["D_Name"]."</option>";
					}			
				}
	
	$conn->close();
	?>
   		</select>
   	</div>
   </div>
   <div class="form-group row">
    <label for="coursetype" class="col-lg-4 form-control-label"><h4 class="pull-right">Select Program:</h4></label>
   	<div class="col-lg-6 form-group">
   		<select class="form-control parent"  id="ctype" name="coursetype">
   			<option>select department</option>
   		</select>
   	</div>
   </div>
   <div class="form-group row">
   	<label for="coursename" class="col-lg-4 form-control-label"><h4 class="pull-right">Select Course:</h4></label>
   	<div class="col-lg-6 form-group">
   		<select class="form-control" id="cname" name="coursename">
   			<option>select department</option>
   		</select>
   	</div>
   </div>
   <div class="form-group row">
   	<label for="scheme" class="col-lg-4 form-control-label"><h4 class="pull-right">Scheme:</h4></label>
   	<div class="col-lg-6 form-group">
   		<input class="form-control" name="scheme" type="number" min="2000" max="2020" value="<?php echo date("Y") ?>" step="1"/>
   	</div>
   </div>
   <div class="form-group row">
   	<div class="col-lg-10">
   		<input class="btn btn-success btn-lg pull-right" type="submit" value="Add Scheme" />
   	</div>
   </div>
</form>
<div id="MSG" style="color:red;"></div>
<script src="js/Loaddropdown.js"></script>
