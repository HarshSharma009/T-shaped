<?php
if($_SESSION['username']=="")
{
  echo "<script>location.href='login.php'</script>";
}
include("config.php");
?>

<?php
$branch_select="SELECT DISTINCT(branch) FROM student";
$branches=mysqli_query($conn,$branch_select);
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
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
</head>


<form action=" " method="post">
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

   <div class="panel panel-body">
    <table class="table table-striped">
      <tr>
        <th>Name </th>
        <th>Reg No</th>
        <th>Working days </th>
        <th>Present</th>
        <th>Absent</th>
        <th>Per%</th>
        <th>Button</th>
      </tr>
      <?php

      while($row=mysqli_fetch_array($res))
      {

       $sel1="select * from attendance where reg='$row[reg]' and status='Present'";
       $res1=mysqli_query($conn,$sel1);
       $pre=mysqli_num_rows($res1);
       $sel3="select * from attendance where reg='$row[reg]' and status='Absent'";
       $res3=mysqli_query($conn,$sel3);
       $pre1=mysqli_num_rows($res3);
       $sel2="select * from attendance where reg='$row[reg]'";
       $res2=mysqli_query($conn,$sel2);
       $work=mysqli_num_rows($res2);


       ?>
       <tr>
        <td><?php echo $row[1]?>
        <input type="hidden" value"<?php echo $row['name'];?>" name="name[]">
      </td>
      <td><?php echo $row[2]?>
      <input type="hidden" value"<?php echo $row['reg'];?>" name="reg[]">
    </td>


    <td>
      <?php echo $work;?>

    </td>

    <td>
      <?php echo $pre;?>  

    </td>
    <td>
      <?php echo $pre1;?>  

    </td>
    <td>
      <?php  
      if(!$work)
      {
       echo "0";
     }
     else{
      $var=($pre/$work)*100;
      $percen = floatval($var);
      echo $percen."%";
    }
    ?>  


  </td>
  <td>

    <a href="dashboard.php?p=home&reg=<?php echo $row[2]?>">View</a>
  </td>
  
</tr>
<?php
}

?>
</table>


<?php
}
?>


<?php

if(isset($_GET['reg'])){
  include("config.php");
  $regname = $_GET['reg'];
  $reg_select="SELECT * FROM `attendance` WHERE `reg`='$regname'";

  $branches=mysqli_query($conn,$reg_select);
  ?>

  <h2><a class="btn btn-success" href="dashboard.php?p=home">Go Back!!</a></h2>
</div>
</div>
<div class="panel panel-body col-md-6 col-md-offset-3">
  <br/><br/><br/><br/><br/><br/><br/>
  <table class="table table-striped">
    <tr>
      <th>Reg No.</th>
      <th>Date</th>
      <th>status </th>

    </tr>
    <?php while($allData = mysqli_fetch_row($branches))
    { ?>
      <tr>
        <td>
          <?php echo $regname ?>
        </td>
        <td>
          <?php echo $allData[4] ?>
        </td>
        <td>
          <?php echo $allData[5] ?>
        </td>
      </tr>
    <?php } ?>
  </table>
</div>
</div>
</form>
<?php
}
?>