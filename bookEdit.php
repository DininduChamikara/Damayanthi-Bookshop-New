<?php


if(isset($_GET['editBook'])){

$edit_id = $_GET['editBook'];

$get_pro = "select * from book where id='$edit_id'";

$run_pro = mysqli_query($Con,$get_pro);


$row_pro = mysqli_fetch_array($run_pro);

$bookname = $row_pro['book_name'];
$category = $row_pro['category'];
$author = $row_pro['author'];
$price = $row_pro['book_price'];
$description = $row_pro['description'];
$availability = $row_pro['availability'];


}

?>

<!DOCTYPE html>

    <html>
        <head>
            <title>Edit Book</title>           

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
                            <i class="fa fa-dashboard"></i>Book/Edit Book
                        </li>

                    </ol><!--breadcrumb Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--row Ends-->

            <div class="row"><!--2 row starts-->

                <div class="col-lg-12"><!--col-lg-12 starts-->

                    <div class="panel panel-default"><!--panel panel-default starts-->

                        <div class="panel-heading"><!--panel-heading starts-->

                            <h3 class="panel-title">

                                <i class="fa fa-money fa-fw"></i>Edit Book

                            </h3>

                        </div><!--panel-heading Ends-->

                        <div class="panel-body"><!--panel-body starts-->

                            <form id="insert_form" class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->


                                <!--Dinindu Add name with initials-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Book Name</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="bname" id="bname" class="form-control" value="<?php echo $bookname?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                <!--Dinindu Add name with initials end-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Category</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <select name="category" id="category" class="form-control">  
                                            <option value="Classic">Classic</option>  
                                            <option value="Comic">Comic</option>
                                            <option value="Sci-Fi">Sci-Fi</option>
                                            <option value="Short Story">Short Story</option>
                                            <option value="Biographies">Biographies</option>
                                            <option value="Historical">Historical</option>
                                        </select>      
                                        
                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->

                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Author</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="author" id="author" class="form-control" value="<?php echo $author?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Price</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="bprice" id="bprice" class="form-control" value="<?php echo $price?>" required>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-3 control-label">Description</label>

                                    <div class="col-md-6"><!--col-md-6 starts-->

                                        <input type="text" name="description" id="description" class="form-control" value="<?php echo $description?>" required>

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

                                                 <input type="submit" class="btn btn-primary form-control" name="editbook" value="Update">
                                        
                                             </div>

                                     </div><!-- form-group Ends -->                       

                            </form><!-- form-horizantal Ends-->

                        </div><!--panel-body Ends-->

                    </div><!--panel panel-default Ends-->

                </div><!--col-lg-12 Ends-->

            </div><!--2 row Ends-->
            
            
            
             <?php
    if (isset($_POST['editbook']) && isset($_FILES['bimage'])) {

     $bookname = $_POST['bname'];
     $category = $_POST['category'];
     $author = $_POST['author'];
     $price = $_POST['bprice'];
     $description = $_POST['description'];
     $availability =$_POST['availability'];

     $img_name = $_FILES['bimage']['name'];
     $img_size = $_FILES['bimage']['size'];
     $tmp_name = $_FILES['bimage']['tmp_name'];
     $error = $_FILES['bimage']['error'];

    $fileName = basename($_FILES["bimage"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $image = $_FILES['bimage']['tmp_name'];
    $imgContent = addslashes((file_get_contents($image)));

        
    if(!preg_match("/^(?!0+(?:\.0+)?$)[0-9]+(?:\.[0-9]+)?$/",$price)) {
        echo "<script>alert('Invalid price input.')</script>";
        echo "<script> window.open('index.php?editBook=$edit_id','_self')</script>";       
    }

    ////////// have to add input validation for auther

    else{
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
                    $update_book = "update book set book_name='$bookname',category='$category',author='$author',book_price='$price',description='$description',availability='$availability', image_url='$imgContent' where id= '$edit_id'";
    
                    $run_staff = mysqli_query($Con, $update_book);
                
                    if ($run_staff) {
                        echo "<script> alert('Book Details updated successfully ')</script>";
                        echo "<script> window.open('index.php?viewBook','_self')</script>";
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
