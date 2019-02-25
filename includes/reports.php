<html>
<head>
  

</head> 
<body>
<form action="" method="post">
<div class="container">
 <div class="row">

   <div class="form-group">
    <label>Student name:</label>
    <input type="text" style="width:400px"class="form-control" name="name" id="name" placeholder="Enter your name" />
</div>
    <div class="form-group">
    <label>Reg No:</label>
    <input type="text" style="width:400px" class="form-control" Your password="name" id="name" placeholder="Enter Reg No" />
</div>
<div>
<div class="form group">
<label>Branch:</label><br>
<select class="form-group" name="Branch" style="width:400px; height:30px; border-radius:20px;text-color:#607D8B">
<option>--select Branch--</option>
<option value="CSE">Computer science & engineering</option>
<option value="IT">Information technology</option>
<option value="ECE">Electronics & communication engineering</option>
</select>
  </div>
</div>
  <form action="" method="post">
<div class="container">
 <div class="row">
  
    <div class="form-group">
    <div style="margin-right: 600px">
   
<div class ="form-group">
<input type="submit"class=" btn btn-info" style="width:100px; margin-left:30px" name="submit" value="submit">
</div>
 </div>
</div>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
   
  $name=$_POST['name'];
  $reg=$_POST['reg'];
  $branch=$_POST['Branch'];
  $test1=$_POST['test1'];
  $test2=$_POST['test2'];
  $test3=$_POST['test3'];
  $sel="select * from student where reg='$reg'";

  $res=mysqli_query($conn,$sel);
  $rc=mysqli_num_rows($res);

  if($rc!==0)
  {
   
    $insert= "insert into report(`name`,`reg`,`branch`,`test1`,`test2`,`test3`)  values('$name','$reg','$branch','$test1','$test2','$test3')";
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
       
      echo "<script>alert('Invalid Reg No');</script>";
    }
    echo "<script>location.href='dashboard.php?p=reports'</script>";
}
    ?>
