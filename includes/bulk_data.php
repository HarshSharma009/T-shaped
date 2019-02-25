<from action="" method="post"
enctype="multipart/from-data">


<div class="col-md-4">
		<input type="file" name="data"
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
	$move="data/";
 $filename=$_FILES["data"]["name"];
 $ext=substr($filename,strrpos($filename,"."));
 if($ext=='.csv')
 {

 }
 else
 {
 	echo"<script>alert('Incorrect File');</script>";
 }
}
?>