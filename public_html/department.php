<?php
include_once 'php/connect.php';
include_once 'php/onsubmission.php';
$sql="SELECT D_Id,D_Name FROM DEPARTMENT";
$result=$conn->query($sql);
?>
<div style="padding-top: 50px;">
	<div id="MSG" style="color:red;"></div>
	<form class="form-horizontal" role="form" method="get" action="php/adminfunctions_Create_Dept.php" id="department">
    	<div class="form-group">
    		<div class="col-sm-10">
      			<input type="text" class="form-control" name="newdeptname" placeholder="dept name">
    		</div>
    		<div class="col-sm-2">
      			<button type="submit" class="btn btn-primary">ADD</button>
    		</div>
        </div>
	</form>
	<div class="table-responsive col-lg-10">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Slno</th>
					<th>Departments</th>
				</tr>
			</thead>
			<tbody>
				<?php
   			if($result->num_rows==0)
            {
   		 		echo '<tr><td colspan="4" style="color:red;">**no rows returned</td></tr>';
			}
			else{
				$counter=1;
				while($row=$result->fetch_assoc())
   		 		{
   					echo "<tr><td>{$counter}</td><td>{$row['D_Name']}</td></tr>";
					$counter++;
				}
			}
			?>
			</tbody>
		</table>
	</div>
</div>
<?php
$conn->close();
?>