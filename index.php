<?php

session_start();

include("includes/db.php");


if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>





<!DOCTYPE html>
<html>

<head>

<title>Samadhi Children Home</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>



</head>

<body>

	   
<div id="wrapper"><!-- wrapper Starts -->

<?php include("includes/sidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

if(isset($_GET['overview'])){

include("overview.php");

}

if(isset($_GET['insertUsers'])){

include("insert_users.php");

}

if(isset($_GET['viewUsers'])){

include("view_users.php");

}

if(isset($_GET['insertStaff'])){

include("add_staff.php");

}

if(isset($_GET['viewStaff'])){

include("view_staff.php");

}

if(isset($_GET['editStaff'])){

include("edit_staff.php");

}

if(isset($_GET['deleteStaff'])){

include("delete_staff.php");

}

if(isset($_GET['insertLabors'])){

include("add_labor.php");

}

if(isset($_GET['viewLabors'])){

include("view_labor.php");

}

if(isset($_GET['editLabors'])){

include("edit_labor.php");

}

if(isset($_GET['deleteLabors'])){

include("delete_labor.php");

}

if(isset($_GET['insertBook'])){

include("bookAdd.php");

}

if(isset($_GET['viewBook'])){

include("bookView.php");

}

if(isset($_GET['editBook'])){

include("bookEdit.php");

}

if(isset($_GET['deleteBook'])){

include("bookDelete.php");

}

if(isset($_GET['viewLaborSalary'])){

include("view_labor_salary.php");

}

if(isset($_GET['viewDonations'])){

include("view_donations.php");

}

?>

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script  src="js/jquery.easypiechart.js"></script> 
    
<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>



</body>


</html>

<?php } ?>