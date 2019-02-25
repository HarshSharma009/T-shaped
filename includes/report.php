<?php
$branch_select="SELECT DISTINCT(branch) FROM student";
$branches=mysqli_query($conn,$branch_select);


?>
<form action=" " method="post">
<div class="row">
	<div class="col-md-4">
<select name="branch" class="form-control ">
<?php
while($branch=mysqli_fetch_array($branches))
{
?>
<option value="<?php echo $branch[0] ?>">
	<?php echo $branch[0] ?>
		
	</option>
	
	<?php
}
?>	



?>
</select>
</div>
<div class="col-md-4">
<input type="submit" name="search"
class="form-control btn-primary">
	</div>
</div>
</form>
<?php
if(isset($_POST['search']))
{
	 $branch=$_POST['branch'];
	 $select="select *from student where branch='$branch'"; 
	 $res=mysqli_query($conn,$select);
?>
<table border=1>
	<tr>
		<th>Rollno </th>
		<th>name </th>
		<th>branch </th>
		<th>college </th>
</tr>
<?php
while($row=mysqli_fetch_array($res))
{
?>
<tr>
	<td><?php echo $row[1]?></td>
	<td><?php echo $row[2]?></td>
	<td><?php echo $row[5]?></td>
	<td><?php echo $row[4]?></td>
</tr>
<?php
}
?>
</table>
<?php
}
?>