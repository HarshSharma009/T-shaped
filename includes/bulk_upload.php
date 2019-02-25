<from action="" method="post"
enctype="multipart/from-data">

<div class="row">
	<div class="col-md-4">
		<input type="text" name="rollno"
		class= "form-control">
<form action=" " method="post"
encty	<div class="col-md-4">
		<input type="file" name="image"
		class= "form-control">
	</div>
	<div class="col-md-4">
		<input type="submit" name="submit"
		class= "form-control btn-primary">
	</div>
</div>
</form>
<?php
if(isset($_POST['submit']))
{
	$move="img/";
	 $rollno=$_POST['rollno'];
	 $filename=$_FILES["image"] ["name"];
	 $ext=substr($filename,strrpos($filename,"."));
	 if($ext=='.jpg' or $ext=='jpeg' or $ext=='png')
	 $select="select *from images where rollno='$rollno'";
	 $res1=mysqli_query($conn,$select);
	 $rc=mysqli_num_rows($res1);
	
	 $newfilename=$rollno.$ext;
	 $new=$move.$newfilename;
	 $message=move_uploaded_file($_FILES['image']['tmp_name'],$move.$newfilename);

	 if($message)
	 {
	 	echo"<script>alert('uploaded successfully');</script>";
	 }
	  if($rc==0)
	 {
	 	 $insert="insert into images(`rollno`,`img_path`) values('$rollno','$new')";
	 	 $res=mysqli_query($conn,$insert);
	 }
else 
{
	echo"<script>alart('please select image..');</script>";
}
}
?>