<?php
include_once 'php/connect.php';
include_once 'php/onsubmission.php';
$sqlD="SELECT D_Id,D_Name FROM DEPARTMENT";
$sqlC="SELECT C_Name,C_Type FROM COURSE";
$resultD=$conn->query($sqlD);
$resultC=$conn->query($sqlC);
?>
<form class="form" style="margin-top:100px;" action="php/adminfunctions_Create_Scheme.php" method="get" id="newscheme" accept-charset="utf-8">
   <div class="form-group row">
   	<label for="departmentname" class="col-lg-4 form-control-label"><h4 class="pull-right">Select Department:</h4></label>
   	<div class="col-lg-6 form-group">
   		<select class="form-control" name="departmentname">
   			<?php
   			if($resultD->num_rows>0)
            {
   		 		while($row=$resultD->fetch_assoc())
   		 		{
   					echo "<option>".$row["D_Name"]."</option>";
				}
			}
			?>
   		</select>
   	</div>
   </div>
   <div class="form-group row">
    <label for="coursetype" class="col-lg-4 form-control-label"><h4 class="pull-right">Select Program:</h4></label>
   	<div class="col-lg-6 form-group">
   		<select class="form-control" name="coursetype">
   			<?php
   			if($resultC->num_rows>0)
            {
   		 		while($row=$resultC->fetch_assoc())
   		 		{
   					echo "<option>".$row["C_Type"]."</option>";
				}
			}
			?>
   		</select>
   	</div>
   </div>
   <div class="form-group row">
   	<label for="coursename" class="col-lg-4 form-control-label"><h4 class="pull-right">Select Course:</h4></label>
   	<div class="col-lg-6 form-group">
   		<select class="form-control" name="coursename">
   			<?php
   			if($resultC->num_rows>0)
            {
   		 		while($row=$resultC->fetch_assoc())
   		 		{
   					echo "<option>".$row["C_Name"]."</option>";
				}
			}
			?>
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
<?php
$conn->close();
?>
