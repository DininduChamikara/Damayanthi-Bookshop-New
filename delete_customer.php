

<?php



if(isset($_GET['deleteCustomer'])){

$delete_id = $_GET['deleteCustomer'];

$delete_pro = "delete from customer where id='$delete_id'";

$run_delete = mysqli_query($Con,$delete_pro);

if($run_delete){

echo "<script>alert('One Customer has been deleted')</script>";

echo "<script>window.open('index.php?viewCustomer','_self')</script>";

}

}

?>


