<?php
@$p=$_GET['p'];


switch($p)
{
	case 'home':include("includes/home.php");
	   break;
	case 'student':include("includes/table.php");
	  break;
	case 'bulk':include("includes/bulk.php");
	  break;
	  case 'reports':include("includes/reports.php");
	  break;
	  case 'attendance':include("includes/attendance.php");
	  break;
	 default:include('includes/home.php');
}



?>