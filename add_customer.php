<!DOCTYPE html>

    <html>
        <head>
            <title>Insert Customer</title>           

        </head>

        <body>

            <div class="row"><!--row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <ol class="breadcrumb"><!--breadcrumb starts-->

                        <li class="active">
                            <i class="fa fa-dashboard"></i>Customer/Add Customer
                        </li>

                    </ol><!--breadcrumb Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--row Ends-->

            <div class="row"><!--2 row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <div class="panel panel-default"><!--panel panel-default starts-->

                        <div class="panel-heading"><!--panel-heading starts-->

                            <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Add Customer

                            </h3>

                        </div><!--panel-heading Ends-->

                        <div class="panel-body"><!--panel-body starts-->

                            <form id="insert_form" class="form-horizontal" method="POST" ><!-- form-horizantal starts-->


                                <!--Dinindu Add-->

                                <div class="form-group"><!--form-group starts-->

                                <label class="col-md-3 control-label">First Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="fname" id="donarname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                <label class="col-md-3 control-label">Last Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="lname" id="donarname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                <!--Dinindu Add-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Email</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="email" id="donarname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Contact No</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                          <input type="text" name="contactNo" id="contactNo" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Password</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="password" id="address" class="form-control" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                                                   
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" ></label>

                                             <div class="col-md-6" >

                                                 <input type="submit" class="btn btn-primary form-control" name="addCustomer" value="Insert">
                                        
                                             </div>

                                     </div><!-- form-group Ends -->                       

                            </form><!-- form-horizantal Ends-->

                        </div><!--panel-body Ends-->

                    </div><!--panel panel-default Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--2 row Ends-->
            
            
            
             <?php
    if (isset($_POST['addCustomer'])) {

     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $contact = $_POST['contactNo'];
     $password  =$_POST['password'];

        
    if(!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
        echo "<script>alert('Only letters and white space allowed for Full Name')</script>";
        echo "<script> window.open('index.php?insertCustomer ','_self')</script>";       
    }
    elseif(!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
        echo "<script>alert('Only letters and white space allowed for First Name')</script>";
        echo "<script> window.open('index.php?insertCustomer ','_self')</script>";       
    }
    elseif(!preg_match("/^(?:7|0|(?:\+94))[0-9]{9,10}$/",$contact)) {
        echo "<script>alert('Invalid mobile number.')</script>";
        echo "<script> window.open('index.php?insertCustomer ','_self')</script>";       
    }
    elseif(!preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]+$/",$email)) {
        echo "<script>alert('Invalid email')</script>";
        echo "<script> window.open('index.php?insertCustomer ','_self')</script>";       
    }
    else{

        $insert_customer = "insert into customer (firstName,lastName,email,mobileNum,password)"
                . " values ('$fname','$lname','$email','$contact','$password')";

        $run_customer = mysqli_query($Con, $insert_customer);

        if ($run_customer) {
            echo "<script> alert('Customer Added successfully ')</script>";
            echo "<script> window.open('index.php?viewCustomer ','_self')</script>";
        }

    }
    

        
    }
    ?>
