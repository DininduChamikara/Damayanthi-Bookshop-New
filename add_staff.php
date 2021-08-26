<!DOCTYPE html>

    <html>
        <head>
            <title>Insert Staff</title>           

        </head>

        <body>

         <!-- dinindu test -->
         <?php if(isset($_GET['error'])): ?>
            <p><?php echo $_GET['error']; ?></p>
        <?php endif ?>
        <!-- dinindu test end-->

            <div class="row"><!--row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <ol class="breadcrumb"><!--breadcrumb starts-->

                        <li class="active">
                            <i class="fa fa-dashboard"></i>Staff/Add Staff
                        </li>

                    </ol><!--breadcrumb Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--row Ends-->

            <div class="row"><!--2 row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <div class="panel panel-default"><!--panel panel-default starts-->

                        <div class="panel-heading"><!--panel-heading starts-->

                            <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Add Staff

                            </h3>

                        </div><!--panel-heading Ends-->

                        <div class="panel-body"><!--panel-body starts-->

                            <form id="insert_form" class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">First Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Sfirstname" id="donarname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->


                                </div><!--form-group Ends-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Last Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Slastname" id="donarname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Name with Initials</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Sname_with_init" id="donarname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Birth Date </label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="date" name="bdate" id="bdate" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">NIC</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="Snic" id="donarname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Gender</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <select name="gender" id="gender" class="form-control">  
                                            <option value="Male">Male</option>  
                                            <option value="Female">Female</option>  
                                        </select>      
                                        
                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Contact No</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                          <input type="text" name="contactNo" id="contactNo" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Address</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="address" id="address" class="form-control" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Email Address</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="email" id="email" class="form-control" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Post</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <select name="post" id="post" class="form-control">  
                                            <option value="Admin">Admin</option>  
                                            <option value="Normal User">Normal User</option>  
                                            
                                        </select>      
                                        
                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <!--Dinindu Add image-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Enter an Image</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="file" name="simage" id="simage" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                <!--Dinindu Add image end-->


                                 <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">UserName</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                           <input type="text" name="username" id="username" class="form-control" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->
                                
                                 <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Password</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="password" name="password" id="password" class="form-control" required >

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                    
                                
                                
                                    
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" ></label>

                                             <div class="col-md-6" >

                                                 <input type="submit" class="btn btn-primary form-control" name="addStaff" value="Insert">
                                        
                                             </div>

                                     </div><!-- form-group Ends -->                       

                            </form><!-- form-horizantal Ends-->

                        </div><!--panel-body Ends-->

                    </div><!--panel panel-default Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--2 row Ends-->
            
            
            
             <?php
    if (isset($_POST['addStaff']) && isset($_FILES['simage'])) {

     $firstname = $_POST['Sfirstname'];
     $lastname = $_POST['Slastname'];
     $name_with_init = $_POST['Sname_with_init'];
     $bdate = $_POST['bdate'];
     $snic = $_POST['Snic'];
     $gender = $_POST['gender'];
     $contact = $_POST['contactNo'];
     $address  =$_POST['address'];
     $email = $_POST['email'];
     $post = $_POST['post'];
     $username =$_POST['username'];
     $password = $_POST['password'];

     $img_name = $_FILES['simage']['name'];
     $img_size = $_FILES['simage']['size'];
     $tmp_name = $_FILES['simage']['tmp_name'];
     $error = $_FILES['simage']['error'];

    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
        echo "<script>alert('Only letters and white space allowed for First Name.')</script>";
        echo "<script> window.open('index.php?insertStaff ','_self')</script>"; 

    }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
        echo "<script>alert('Only letters and white space allowed for Last Name')</script>";
        echo "<script> window.open('index.php?insertStaff ','_self')</script>";       
    }
    elseif(!preg_match("/^[a-zA-Z-' . ]*$/",$name_with_init)) {
        echo "<script>alert('Only letters, dots and white space allowed for Name with Initials')</script>";
        echo "<script> window.open('index.php?insertStaff ','_self')</script>";       
    }
    elseif(!preg_match("/^([0-9]{9}[x|X|v|V]|[0-9]{12})$/",$snic)) {
        echo "<script>alert('Invalid NIC number.')</script>";
        echo "<script> window.open('index.php?insertStaff ','_self')</script>";       
    }
    elseif(!preg_match("/^(?:7|0|(?:\+94))[0-9]{9,10}$/",$contact)) {
        echo "<script>alert('Invalid mobile number.')</script>";
        echo "<script> window.open('index.php?insertStaff ','_self')</script>";       
    }
    elseif(!preg_match("/^[^\s@]+@[^\s@]+\.[^\s@]+$/",$email)) {
        echo "<script>alert('Invalid email')</script>";
        echo "<script> window.open('index.php?insertStaff ','_self')</script>";       
    }

    else{
        if($error === 0){
            if($img_size > 1024*1024*3){
                $em = "Sorry, image is too large";
                
            }else{
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
    
                $allowed_exs = array("jpg", "jpeg", "png");
    
                if(in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
    
                   
                    // Insert into database
                    $insert_staff = "insert into staff (firstname,lastname,name_with_init,bdate,snic,gender,ContactNo,Address,email,post,image_url,username,password)"
                    . " values ('$firstname','$lastname','$name_with_init','$bdate','$snic','$gender','$contact','$address','$email','$post','$new_img_name','$username','$password')";
    
                   $run_staff = mysqli_query($Con, $insert_staff);
               
                   if ($run_staff) {
                       echo "<script> alert('child Added successfully ')</script>";
                       echo "<script> window.open('index.php?viewStaff ','_self')</script>";
                   }
    
    
                }else{
                   $em = "You can't upload files of this type";
                }
            }

            echo "<script>alert('$em')</script>";

        }else{
           $em = "unknown error occurred!";
        }

    }

    }
    ?>
