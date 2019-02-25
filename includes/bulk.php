
<center><h3 style="color:#009688;font-size:40px">Student Info</h3></center>
<form action="" method="post">
<div class="row1">
<label for="name"><b>Name:</b></label><br>
<input type="text" name="name" style="width:400px" class="form-control">
<label for="reg"><b>Reg No:</b></label><br>
<input type="text" name="reg" style="width:400px" class="form-control">
</div>

<div class="form-group">
<label for="branch"><b>Branch:</b></label><br>
<select class="form-group" name="Branch" style="width:400px; height:30px; border-radius:20px;text-color:#607D8B">
<option>----Select Branch----</option>
<option value="cse">CSE</option>
<option value="it">IT</option>
<option value="ece">ECE</option>
</select>
</div>

<label for="phno"><b>Phone No:</b></label>
<input type="number" name="phno" style="width:400px" class="form-control"><br>
<center><button type="submit" name="submit" class="btn btn-success">Submit</button></center>

</form>
<?php
if(isset($_POST['submit']))
{
   
  $name=$_POST['name'];
  $reg=$_POST['reg'];
  $branch=$_POST['Branch'];
  $phno=$_POST['phno'];
  $sel="select * from student where reg='$reg'";

  $res=mysqli_query($conn,$sel);
  $rc=mysqli_num_rows($res);

  if($rc==0)
  {
   
    $insert= "insert into student(`name`,`reg`,`branch`,`phno`)  values('$name','$reg','$branch','$phno')";
    $res_insert=mysqli_query($conn,$insert);
    if($res_insert)
    {
    	echo "<script>alert('Insert Successfully');</script>";
    }
    else
    {
    	echo "<script>alert('Data is inrelevant');</script>";
    }
    }
    else
    {
       
    	echo "<script>alert('Already Registered');</script>";
    }
    echo "<script>location.href='dashboard.php?p=bulk'</script>";
}
    ?>
