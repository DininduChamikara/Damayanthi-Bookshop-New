<?php


if(isset($_GET['editCustomer'])){

$edit_id = $_GET['editCustomer'];

$get_pro = "select * from customer where id='$edit_id'";

$run_pro = mysqli_query($Con,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);

$fname = $row_pro['firstName'];
$lname = $row_pro['lastName'];
$email = $row_pro['email'];
$contact = $row_pro['mobileNum'];
$id = $row_pro['id'];

}

?>

<!DOCTYPE html>

    <html>
        <head>
            <title>Edit Customer</title>           

        </head>

        <body>

            <div class="row"><!--row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <ol class="breadcrumb"><!--breadcrumb starts-->

                        <li class="active">
                            <i class="fa fa-dashboard"></i>Customer/Edit Customer
                        </li>

                    </ol><!--breadcrumb Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--row Ends-->

            <div class="row"><!--2 row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <div class="panel panel-default"><!--panel panel-default starts-->

                        <div class="panel-heading"><!--panel-heading starts-->

                            <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Edit Customer

                            </h3>

                        </div><!--panel-heading Ends-->

                        <div class="panel-body"><!--panel-body starts-->

                            <form id="insert_form" class="form-horizontal" method="POST" ><!-- form-horizantal starts-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">First Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="fname" id="donarname" class="form-control"  value="<?php echo $fname ?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Last Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="lname" id="donarname" class="form-control"  value="<?php echo $lname ?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Email Address</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="email" id="donarname" class="form-control"  value="<?php echo $email ?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Contact No</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                          <input type="text" name="contactNo" id="contactNo" class="form-control" value="<?php echo $contact ?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Password</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="password" id="password" class="form-control" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                    
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" ></label>

                                             <div class="col-md-6" >

                                                 <input type="submit" class="btn btn-primary form-control" name="editCustomer" value="update">
                                        
                                             </div>

                                     </div><!-- form-group Ends -->                       

                            </form><!-- form-horizantal Ends-->

                        </div><!--panel-body Ends-->

                    </div><!--panel panel-default Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--2 row Ends-->
            
            
            
             <?php
    if (isset($_POST['editCustomer'])) {

     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $contact = $_POST['contactNo'];
     $password  =$_POST['password'];

    if(!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
        echo "<script>alert('Only letters and white space allowed for Full Name')</script>";
        echo "<script> window.open('index.php?editCustomer=$edit_id ','_self')</script>";       
    }
    elseif(!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
        echo "<script>alert('Only letters and white space allowed for First Name')</script>";
        echo "<script> window.open('index.php?editCustomer=$edit_id ','_self')</script>";       
    }
    elseif(!preg_match("/^(?:7|0|(?:\+94))[0-9]{9,10}$/",$contact)) {
        echo "<script>alert('Invalid mobile number.')</script>";
        echo "<script> window.open('index.php?editCustomer=$edit_id ','_self')</script>";       
    }

    else{
        $update_customer = "update customer set firstName='$fname', lastName='$lname', email='$email', mobileNum='$contact', password='$password' where id='$id'";

        $run_customer = mysqli_query($Con, $update_customer);

        if ($run_customer) {
            echo "<script> alert('labor updated successfully ')</script>";
            echo "<script> window.open('index.php?viewCustomer ','_self')</script>";
        }
    }
    

        
    }
    ?>
