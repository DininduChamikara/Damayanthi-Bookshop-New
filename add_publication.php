<!DOCTYPE html>

    <html>
        <head>
            <title>Add Publication</title>           

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
                            <i class="fa fa-dashboard"></i>Publication/Add Publication
                        </li>

                    </ol><!--breadcrumb Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--row Ends-->

            <div class="row"><!--2 row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <div class="panel panel-default"><!--panel panel-default starts-->

                        <div class="panel-heading"><!--panel-heading starts-->

                            <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Add New Publication

                            </h3>

                        </div><!--panel-heading Ends-->

                        <div class="panel-body"><!--panel-body starts-->

                        <!-- Dinindu Test -->




                            <form id="insert_form" class="form-horizontal" method="POST" enctype="multipart/form-data" ><!-- form-horizantal starts-->
                            

                                <!--Dinindu Add name with initials-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Publisher Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="pname" id="pname" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                
                                 
                                <!--Dinindu Add image-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Enter an Image</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="file" name="pimage" id="pimage" class="form-control" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                <!--Dinindu Add image end-->
                                    
                                
                                
                                    
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" ></label>

                                             <div class="col-md-6" >

                                                 <input type="submit" class="btn btn-primary form-control" name="addpublication" value="Insert">
                                        
                                             </div>

                                     </div><!-- form-group Ends -->                       

                            </form><!-- form-horizantal Ends-->

                        </div><!--panel-body Ends-->

                    </div><!--panel panel-default Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--2 row Ends-->
            
            
            
             <?php


    if (isset($_POST['addpublication']) && isset($_FILES['pimage'])) {

        $publicationname = $_POST['pname'];

    ////////
        $img_name = $_FILES['pimage']['name'];
        $img_size = $_FILES['pimage']['size'];
        $tmp_name = $_FILES['pimage']['tmp_name'];
        $error = $_FILES['pimage']['error'];
    ////////
        $fileName = basename($_FILES["pimage"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $image = $_FILES['pimage']['tmp_name'];
        $imgContent = addslashes((file_get_contents($image)));

    
    
        if($error === 0){
            // maximum image size checker maximum = 3MB
            if($img_size > 1024*1024*3){
                $em = "Sorry, image is too large";
                
            }else{
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png");

                if(in_array($img_ex_lc, $allowed_exs)){
                
                    // Insert into database
                    $insert_publication = "insert into publication (name, image)"
                    . " values ('$publicationname','$imgContent')";

                    $run_staff = mysqli_query($Con, $insert_publication);
                
                    if ($run_staff) {
                        echo "<script> alert('Publisher Added successfully ')</script>";
                        echo "<script> window.open('index.php?viewPublication ','_self')</script>";
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

    ?>
