<?php


if(isset($_GET['editPublication'])){

$edit_id = $_GET['editPublication'];

$get_pro = "select * from publication where id='$edit_id'";

$run_pro = mysqli_query($Con,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);

$publication_name = $row_pro['name'];


}

?>

<!DOCTYPE html>

    <html>
        <head>
            <title>Edit Publication</title>           

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
                            <i class="fa fa-dashboard"></i>Publication/Edit Publication
                        </li>

                    </ol><!--breadcrumb Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--row Ends-->

            <div class="row"><!--2 row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <div class="panel panel-default"><!--panel panel-default starts-->

                        <div class="panel-heading"><!--panel-heading starts-->

                            <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Edit Publication

                            </h3>

                        </div><!--panel-heading Ends-->

                        <div class="panel-body"><!--panel-body starts-->

                            <form id="insert_form" class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->


                                <!--Dinindu Add name with initials-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Publication Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="pname" id="pname" class="form-control" value="<?php echo $publication_name?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                <!--Dinindu Add name with initials end-->
                                

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

                                                 <input type="submit" class="btn btn-primary form-control" name="editPublication" value="Update">
                                        
                                             </div>

                                     </div><!-- form-group Ends -->                       

                            </form><!-- form-horizantal Ends-->

                        </div><!--panel-body Ends-->

                    </div><!--panel panel-default Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--2 row Ends-->
            
            
            
             <?php
    if (isset($_POST['editPublication']) && isset($_FILES['pimage'])) {

     $publication_name = $_POST['pname'];

     $img_name = $_FILES['pimage']['name'];
     $img_size = $_FILES['pimage']['size'];
     $tmp_name = $_FILES['pimage']['tmp_name'];
     $error = $_FILES['pimage']['error'];

    $fileName = basename($_FILES["pimage"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $image = $_FILES['pimage']['tmp_name'];
    $imgContent = addslashes((file_get_contents($image)));

        
        
    if($error === 0){
        // maximum 3MB images
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
                $update_publication = "update publication set name='$publication_name', image='$imgContent' where id= '$edit_id'";

                $run_staff = mysqli_query($Con, $update_publication);
            
                if ($run_staff) {
                    echo "<script> alert('Publication Details updated successfully ')</script>";
                    echo "<script> window.open('index.php?viewPublication','_self')</script>";
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
