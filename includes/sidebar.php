

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<link href="../css/bootstrap.min.css" rel="stylesheet">

<link href="../css/style.css" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">




<script src="../js/bootstrap.min.js"></script>
<?php


//
//if(!isset($_SESSION['username'])){
//
//echo "<script>window.open('login.php','_self')</script>";
//
//}
//
//else {
//
//


?>


<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?overview" >SAMADHI CHILDREN HOME</a>


</div><!-- navbar-header Ends -->






<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

    
    <br><br> 

<li><!-- li Starts -->

<a href="index.php?overview">

<i class="fa fa-fw fa-dashboard"></i> OverView

</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#donations">

<i class="fa fa-fw fa-money"></i> Donations

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="donations" class="collapse">

<li>
<a href="index.php?insertUsers"> Add Donations </a>
</li>

<li>
<a href="index.php?viewUsers"> View Donations </a>
</li>




</ul>

</li><!-- li Ends -->


<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#staff">

<i class="fa fa-fw fa-users"></i> Staff

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="staff" class="collapse">

<li>
<a href="index.php?insertStaff"> Add Staff </a>
</li>

<li>
<a href="index.php?viewStaff"> View Staff </a>
</li>

</ul>

</li><!-- li Ends -->



<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#child">

<i class="fa fa-fw fa-book"></i> Book

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="child" class="collapse">

<li>
<a href="index.php?insertBook"> Add Book </a>
</li>

<li>
<a href="index.php?viewBook"> View Book </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#labors">

<i class="fa fa-fw fa-male"></i> Labors 

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="labors" class="collapse">

<li>
<a href="index.php?insertLabors"> Add Labors  </a>
</li>

<li>
<a href="index.php?viewLabors"> View Labors  </a>
</li>

<li>
<a href="index.php?viewLaborSalary"> View Labor salary</a>
</li>

</ul>

</li><!-- li Ends -->


<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php //} ?>