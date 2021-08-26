<?php



if(isset($_GET['deleteStaff'])){

$delete_id = $_GET['deleteStaff'];

$delete_pro = "delete from staff where staffId='$delete_id'";

$run_delete = mysqli_query($Con,$delete_pro);

if($run_delete){

echo "<script>alert('One user Has been deleted')</script>";

echo "<script>window.open('index.php?viewStaff','_self')</script>";

}

}

?>

