<?php
include_once 'php/connect.php';
$ctype=$_POST['Ctype'];
$sql="SELECT C_Id,C_Name FROM COURSE WHERE C_Type='".$ctype."'";
$result=$conn->query($sql);
?>
<div class="container" style="padding-top: 50px;">
			<form role="form" action="" method="get" accept-charset="utf-8">
				<div class="form-group row">
		        <label for="coursetype" class="col-lg-4 form-control-label"><h4 class="pull-right">Course type</h4></label>
		       	<div class="col-lg-6 form-group">
		       		<select class="form-control" id="coursetype">
		       			<option>UG</option>
		       			<option>PG</option>
		       		</select>
		       	</div>
		       </div>
		       <div class="form-group row">
		       	<label for="coursename" class="col-lg-4 form-control-label"><h4 class="pull-right">Select Course</h4></label>
		       	<div class="col-lg-6 form-group">
		       		<select class="form-control" id="coursename">
		       			<?php
			   			if($result->num_rows>0)
			            {
			   		 		while($row=$result->fetch_assoc())
			   		 		{
			   					echo "<option>".$row["C_Name"]."</option>";
							}
						}
						?>
		       		</select>
		       	</div>
		       </div>
		       <div class="form-group row">
		        <label for="semesterno" class="col-lg-4 form-control-label"><h4 class="pull-right">Select Semester</h4></label>
		       	<div class="col-lg-6 form-group">
		       		<select class="form-control" id="semesterno">
		       			<option>1&2</option>
		       			<option>3</option>
		       			<option>4</option>
		       			<option>5</option>
		       			<option>6</option>
		       			<option>7</option>
		       			<option>8</option>
		       		</select>
		       	</div>
		       </div>
		       <div class="form-group row">
		       	<label for="scheme" class="col-lg-4 form-control-label"><h4 class="pull-right">Select Scheme</h4></label>
		       	<div class="col-lg-6 form-group">
		       		<input class="form-control" type="number" min="2000" max="2020" step="1" value="<?php echo date("Y")  ?>"  id="scheme"/>
		       	</div>
		       </div>
		       <div class="form-group row">
		       	<div class="col-lg-10">
		       		<button class="btn btn-success btn-lg pull-right" type="submit" value="submit"><a href="10_Create_Page2.html">submit</a></button> 
		       	</div>
		       </div>
		    </form>
	</div>
	<script src="js/7createpage.js"></script>
<?php
$conn->close();
?>