

<?php



if(isset($_GET['deleteBook'])){

$delete_id = $_GET['deleteBook'];

$delete_pro = "delete from book where id='$delete_id'";

$run_delete = mysqli_query($Con,$delete_pro);

if($run_delete){

echo "<script>alert('One child Has been deleted')</script>";

echo "<script>window.open('index.php?viewBook','_self')</script>";

}

}

?>


