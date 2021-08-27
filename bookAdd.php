<!DOCTYPE html>

    <html>
        <head>
            <title>Add Books</title>           

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
                            <i class="fa fa-dashboard"></i>Book/Add Books
                        </li>

                    </ol><!--breadcrumb Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--row Ends-->

            <div class="row"><!--2 row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <div class="panel panel-default"><!--panel panel-default starts-->

                        <div class="panel-heading"><!--panel-heading starts-->

                            <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Add New Book

                            </h3>

                        </div><!--panel-heading Ends-->

                        <div class="panel-body"><!--panel-body starts-->

                        <!-- Dinindu Test -->




                            <form id="insert_form" class="form-horizontal" method="POST" enctype="multipart/form-data" ><!-- form-horizantal starts-->
                            

                                <!--Dinindu Add name with initials-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Book Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="bname" id="bname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                <!--Dinindu Add name with initials end-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Price</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="bprice" id="bprice" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Description</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="description" id="description" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->



                                 <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Availability</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <select name="availability" id="availability" class="form-control">  
                                            <option value="In Stock">In Stock</option>  
                                            <option value="Out of Stock">Out of Stock</option>  
                                        </select>      
                                        
                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->
                                
                                 
                                <!--Dinindu Add image-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Enter an Image</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="file" name="bimage" id="bimage" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                <!--Dinindu Add image end-->
                                    
                                
                                
                                    
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" ></label>

                                             <div class="col-md-6" >

                                                 <input type="submit" class="btn btn-primary form-control" name="addbook" value="Insert">
                                        
                                             </div>

                                     </div><!-- form-group Ends -->                       

                            </form><!-- form-horizantal Ends-->

                        </div><!--panel-body Ends-->

                    </div><!--panel panel-default Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--2 row Ends-->
            
            
            
             <?php


    if (isset($_POST['addbook']) && isset($_FILES['bimage'])) {

     $bookname = $_POST['bname'];
     $price = $_POST['bprice'];
     $description = $_POST['description'];
     $availability = $_POST['availability'];

////////
     $img_name = $_FILES['bimage']['name'];
     $img_size = $_FILES['bimage']['size'];
     $tmp_name = $_FILES['bimage']['tmp_name'];
     $error = $_FILES['bimage']['error'];
////////
    $fileName = basename($_FILES["bimage"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $image = $_FILES['bimage']['tmp_name'];
    $imgContent = addslashes((file_get_contents($image)));

    
    if(!preg_match("/^(?!0+(?:\.0+)?$)[0-9]+(?:\.[0-9]+)?$/",$price)) {
        echo "<script>alert('Invalid input.')</script>";
        echo "<script> window.open('index.php?insertBook','_self')</script>";       
    }
    else{
        if($error === 0){
            // maximum image size checker maximum = 3MB
            if($img_size > 1024*1024*3){
                $em = "Sorry, image is too large";
                
            }else{
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
   
                $allowed_exs = array("jpg", "jpeg", "png");
   
                if(in_array($img_ex_lc, $allowed_exs)){
                    // $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    // $img_upload_path = 'uploads/'.$new_img_name;
                    // move_uploaded_file($tmp_name, $img_upload_path);
   
                   
                    // Insert into database
                    $insert_book = "insert into book (book_name,book_price,description,availability, image_url)"
                    . " values ('$bookname','$price','$description','$availability','$imgContent')";
    
                   $run_staff = mysqli_query($Con, $insert_book);
               
                   if ($run_staff) {
                       echo "<script> alert('Book Added successfully ')</script>";
                       echo "<script> window.open('index.php?viewBook ','_self')</script>";
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

    } else{

    }
    ?>
