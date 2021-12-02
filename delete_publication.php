<?php


if(isset($_GET['deletePublication'])){

$delete_id = $_GET['deletePublication'];

$delete_pro = "delete from publication where id='$delete_id'";

$run_delete = mysqli_query($Con,$delete_pro);

if($run_delete){

echo "<script>alert('One pubication has been deleted')</script>";

echo "<script>window.open('index.php?viewPublication','_self')</script>";

}

}

?>