<?php
$branch_select="SELECT DISTINCT(branch) FROM student";
$branches=mysqli_query($conn,$branch_select);
$flag=0;

?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script></head>
<form action=" " method="post">
<div class ="panel panel-default">
<div class ="panel panel-heading">
<h2><a class="btn btn-success" href="dashboard.php?p=bulk">Add Student</a></h2>
</div>

<div class="row">
	<div class="col-md-4">
<select name="branch" class="form-control ">
<?php
while($branch=mysqli_fetch_array($branches))
{
?>
<option value="<?php echo $branch[0] ?>" <?php if(@$_POST['branch']==$branch[0]){ echo "selected"; } ?>>
	<?php echo $branch[0] ?>
		
	</option>
	
	<?php
}
?>	
?>
</select>
</div>
<div class="col-md-4">
<input type="submit" name="search"class="form-control btn-primary">
	</div>
</div>
<?php
if(isset($_POST) && count($_POST)>0)
{
	 $branch=$_POST['branch'];
	 $select="select * from student where branch='$branch'"; 
	 $res=mysqli_query($conn,$select);
?>
<div class="well text-center">Date: <?php echo date("Y-m-d"); ?> </div>
<div class="panel panel-body">
<table class="table table-striped">
	<tr>
		<th>Name </th>
		<th>Reg No</th>
		<th>branch </th>
		<th>Attendance</th>
</tr>
<?php
$counter=0;
while($row=mysqli_fetch_array($res))
{
	$counter++;
?>
<tr>
	<td><?php echo $row[1]?>
<input type="hidden" value"<?php echo $row['name'];?>" name="name[]">
	</td>
	<td><?php echo $row[2]?>
<input type="hidden" value"<?php echo $row['reg'];?>" name="reg[]">
	</td>
	<td><?php echo $row[3]?>
<input type="hidden" value"<?php echo $row['branch'];?>" name="branch1[]">
	</td>
	<td>
	<input type="checkbox" name="attendance[]" value="<?php echo $row['reg'];?>">
	</td>
	<td>
		<a href="attendance.php?id=<?php echo id;?> ">
	</td>
	
</tr>
<?php
}
$counter++;
?>
</table>
<input type="submit" name="submit" value="submit" class="btn btn-primary">
</div>
<?php
}
?>
</form>



<?php

if(isset($_POST['submit'])){
	$rolls = $_POST['attendance'];
	 $reg=$_POST['reg'];
	 $branch=$_POST['branch'];
	 
	 $date = date('Y-m-d');
	 $select="select * from student where branch='$branch'"; 
	 $sel="select * from attendance where date='$date' and branch='$branch'";
	$res1=mysqli_query($conn,$sel);
	$rc=mysqli_num_rows($res1);
 
	 $res=mysqli_query($conn,$select);
	 if($rc==0)
	 {
	 	$flag++;
	 while($fetch = mysqli_fetch_array($res)){
	 	if(in_array($fetch['reg'],$rolls)){
	 		
       $insert="INSERT INTO attendance  SET name='".$fetch['name']."',reg='".$fetch['reg']."',branch='".$fetch['branch']."',status='Present',date='".$date."'";
	 $res_insert=mysqli_query($conn,$insert);
	 		if($res_insert)
	 		{
	 			echo "<script>alert('Already Entered');</script>";
	 		}
	 	}
	 	else{
	 	$insert="INSERT INTO attendance  SET name='".$fetch['name']."',reg='".$fetch['reg']."',branch='".$fetch['branch']."',status='Absent',date='".$date."'";
	 	$res_insert=mysqli_query($conn,$insert);
	 		if($res_insert)
	 		{
	 			echo "<script>alert('Already Entered');</script>";
	 		}
	 	}
	 }
}
else{
	echo "<script>alert('Already Entered');</script>";
}
}
?>