<?php
include_once 'php/connect.php';
include_once 'php/onsubmission.php';
$Deptname=$conn->real_escape_string($_GET['departmentname']);
$sql="SELECT D_Name FROM DEPARTMENT";
$sql1="SELECT C_Name FROM COURSE";
$result=$conn->query($sql);
$result1=$conn->query($sql1);
?>
<form class="form-horizontal" role="form">
	<div class="form-group">
		<div class="col-sm-offset-1">
			<label class="control-label col-sm-4">REG NO</label>
			<div class="col-sm-4">
				<input type="number" class="form-control" id="" placeholder="registration id"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1">
			<label class="control-label col-sm-4">NAME</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="" placeholder="name"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1">
			<label class="control-label col-sm-4">DEPARTMENT</label>
			<div class="col-sm-4">
				<select class="form-control" id="">
					<option selected disabled>select department</option>
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
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1">
			<label class="control-label col-sm-4">COURSE</label>
			<div class="col-sm-4">
				<select class="form-control" id="">
					<option selected disabled>select course</option>
					<?php
		   			if($result1->num_rows>0)
		            {
		   		 		while($row1=$result1->fetch_assoc())
		   		 		{
		   					echo "<option>".$row1["C_Name"]."</option>";
						}
					}
					?>
				</select>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1">
			<label class="control-label col-sm-4">YEAR OF ADM</label>
			<div class="col-sm-4">
				<input type="date" class="form-control" id="" placeholder="year of admission"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1">
			<label class="control-label col-sm-4">SEMESTER NO</label>
			<div class="col-sm-4">
				<input type="number" class="form-control" id="" placeholder="current semester"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1">
			<label class="control-label col-sm-4">USER NAME</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="" placeholder="user name"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1">
			<label class="control-label col-sm-4">PASSWORD</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" id="" placeholder="password"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1">
			<label class="control-label col-sm-4">CONFIRM PASSWORD</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" id="" placeholder="confirm password"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-6 col-sm-4">
			<div class="col-sm-4 pull-right">
				<input type="submit" class="form-control btn btn-primary" id="" value="REGISTER"/>
			</div>
		</div>
	</div>
</form>