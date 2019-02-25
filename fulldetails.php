


<?php
include("config.php");
$regname = $_GET['reg'];
$reg_select="SELECT * FROM `attendance` WHERE `reg`='$regname'";

$branches=mysqli_query($conn,$reg_select);
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>Dashboard</title>

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
<div class ="panel panel-default">
<div class ="panel panel-heading">
<h2><a class="btn btn-success" href="dashboard.php?p=home">Go Back!!</a></h2>
</div>
</div>
<div class="panel panel-body">
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