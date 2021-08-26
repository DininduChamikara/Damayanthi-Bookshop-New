<?php
//
//if(!isset($_SESSION['username'])){
//
//echo "<script>window.open('login.php','_self')</script>";
//
//}
//
//else {

?>

<script>var getlocations,getmonthNames,getDonation,chartstart;</script>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<h1 class="page-header">Overview</h1>

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Overview

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<?php

$get_labor = "select count(laborid) from labor ";
$run_labor = mysqli_query($Con,$get_labor);
$row_labor=mysqli_fetch_array($run_labor);
$alllabor = $row_labor['count(laborid)'];

$get_staff = "select count(staffid) from staff ";
$run_staff = mysqli_query($Con,$get_staff);
$row_staff=mysqli_fetch_array($run_staff);
$allstaff = $row_staff['count(staffid)'];

$get_book = "select count(id) from book ";
$run_book = mysqli_query($Con,$get_book);
$row_book=mysqli_fetch_array($run_book);
$allbook = $row_book['count(id)'];


?>




<div class="row"><!-- 2 row Starts -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-money fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
    <br>




</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?viewUsers">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-green"><!-- panel panel-green Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-child fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $allbook ?>  </div>

<div> Details</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?viewBook">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-green Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-user fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $allstaff ?>  </div>

<div>Staff Details</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?viewStaff">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-yellow Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-red"><!-- panel panel-red Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-male fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $alllabor ?>  </div>

<div>Labors Details</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?viewLabors">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->



<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Cash Donation Details

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>
<th>Donar Name:</th>
<th>Fund Amount:</th>
<th>Contact Number:</th>
<th>Date:</th>

</tr>

</thead><!-- thead Ends -->
<?php
  
  
$get_order = "select * from donars d inner join donationcashdetails dcd on d.donarId = dcd.donarid limit 5 ";
$run_order = mysqli_query($Con,$get_order);

while($row_order=mysqli_fetch_array($run_order)){
$id = $row_order['donarId'];
$name = $row_order['donarName'];

$contact = $row_order['contactNo'];

$address = $row_order['Address'];
$date = $row_order['date'];
$amount = $row_order['cashAmount'];
?>
<tbody><!-- tbody Starts -->


 <tr>
    <td><?php echo $name?></td>
      <td><?php echo $amount?></td>
    <td><?php echo $contact?></td>
   <td><?php echo substr($date, 0,10) ?></td>
   
   
 </tr>

<?php }?>
</tbody><!-- tbody Ends -->


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->
<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?viewUsers" >

View All Donations <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->



</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-12 Ends -->



</div><!-- 3 row Ends -->
<center>
    <div class="col-md-5 ">
     <input  type="text"  class="form-control pull-right" value="Select year to get month wise donations" disabled="disabled" required>
    </div>
<div class="col-md-7"><!--col-md-6 starts-->

    <select name="type" id="year" class="form-control" onchange="getlocations();" >

                                            <option>2020</option>
                                            <option>2019</option>
                                            <option>2018</option>
                                            <option>2017</option>                                         

                                        </select>

                                    </div><!--col-md-6 Ends-->

</center>
<br><br><br>

<div id="no_chart" class="text-center huge"  style="color:lightslategray"></div>
<div id="chart_visual"><!-- 4 row starts-->     
  
    <canvas id="bar-chart" width="400" height="100"></canvas>    
    
</div><!-- 4 row ends--> 


<script>


var count = 0;
  
      
            getlocations();
             function getlocations () {
                
                var year = document.getElementById("year").value;
                console.log(year);
                  $.ajax({          
                     url:"findMonth.php",  
                     method:"POST",  
                     data:{year:year},  
                   dataType:"json", 
                   
                     success:function(data){  
                        window.globalVariable = data;
                    count =  data.length;
                   if(count!==0){
                       chartvisible();
                     chartstart();
                    }else{
                        noChart();
                    }
                      }
                  });
              }
            
            function getmonthNames(){
                var i; var data = [];
                for (var i = 0; i < count; i++) {
                    data.push(globalVariable[i].month);
                    
                }
                 console.log(data);
                 
                return data;
                
            }

        function  getDonation () {

               var i; var data = [];


                for (var i = 0; i < count; i++) {
                    data.push(globalVariable[i].amount);
                }

                data.push(0);
                console.log(data);
                return data;

            }
            function chartstart(){
            
         
            new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels:getmonthNames(),
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data:getDonation()
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Donation Monthly wise'
      }
    }
          });
        
            }
            
            function noChart(){
                document.getElementById('chart_visual').style.display= 'none';
                document.getElementById('no_chart').innerHTML= "No data to visual";
            }
            
            function chartvisible(){
                document.getElementById('chart_visual').style.display= 'block';
                document.getElementById('no_chart').innerHTML= "";
            }
    





             
       
         

</script>










