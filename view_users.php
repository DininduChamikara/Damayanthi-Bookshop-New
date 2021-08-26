

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 16px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->
 
<li class="active" >

<i class="fa fa-dashboard"></i> Donations / View Donars

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Donars

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

    

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:20%;">Donar name</th>
    <th style="width:20%;">Donar contact</th>
    <th style="width:20%;">Donar address</th>
    <th style="width:10%;">Donation type</th>
    <th style="width:20%;">Date</th>
    <th style="width:10%;">Donation Details</th>
  </tr>
  
  
  <?php
  
  
$get_order = "select * from donars ";
$run_order = mysqli_query($Con,$get_order);

while($row_order=mysqli_fetch_array($run_order)){
$id = $row_order['donarId'];
$name = $row_order['donarName'];

$contact = $row_order['contactNo'];

$address = $row_order['Address'];
$date = $row_order['date'];
$type = $row_order['donationType'];


  ?>
  <tr>
    <td><?php echo $name?></td>
    <td><?php echo $contact?></td>
    <td><?php echo $address?></td>
    <td><?php echo $type ?></td>
    <td><?php echo substr($date, 0,10) ?></td>
   <td>

<a href="index.php?viewDonations=<?php echo $id; ?>">

<i class="fa fa-eye"> </i> view

</a>

</td>
  </tr>
  <?php  } ?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>



