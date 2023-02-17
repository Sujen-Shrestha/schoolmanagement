<?php

session_start();
include '../connection.php';
if($con)
{

    if (isset($_POST['submit-btn']))
    {
        $title = $_POST['title'];

        $content_id  =  $_SESSION['edit_mod_content_id'];
        $query = "UPDATE module_content SET  title = '$title' where content_id = '$content_id'";
        mysqli_query( $con , $query );

        if (isset($_FILES))
        {

            foreach ($_FILES as $key => $value) 
            {

  
                $tmp_name = $_FILES[$key]['name'];
                $tmp_name = explode(" ",$tmp_name);
                $name = '';
                if( sizeof($tmp_name) == 0 )
                {
                    $name = $tmp_name;
                }
                else
                {
                    for ($i  =0 ; $i < sizeof($tmp_name); $i++)
                    {
                        $name = $name.$tmp_name[$i];
                    }
                }
 
                if($_FILES[$key]['size'] > 0)
                {
                    $type = $_FILES[$key]['type'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES[$key]["name"]);
    
                    // Select file type
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
                        // Insert record
                        $query = "INSERT INTO module_content_files (name , type , module_content_id ) VALUES ( '$name' , '$imageFileType' , '$content_id')";
                        mysqli_query( $con , $query );
                        
                        // Upload file
                        move_uploaded_file($_FILES[$key]['tmp_name'],'../uploads/'.$name);
                }
 
                    header('Location:./module_content.php'); 


            }

        }
    }
}
else
{
  
  echo " Database not connected ";
}
  
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Module Leader Panel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../mystyle.css">

</head>

<body>

    <section class="container-fluid max-height c-white">

        <div class="row main-box  max-height">
              <!-- Home menu  here -->
            <div class="col-lg-2  tmp_h d-flex align-content-center flex-column justify-content-center bg-dark-b position-relative">

 <!-- section 1 here -->
            <!-- Admin menu here -->
            <?php include './menu.php';?>
            <!-- Admin menu end here -->

            </div>


 <!-- section 2 here -->
            <div class="col-lg-10  tmp_h">

                <!-- date and time here -->

                    <!-- date and time here -->
                    <?php include './upper_nav.php';?>
                    <!-- lower menu start here -->

                <div class="row d-flex align-items-center flex-column justify-content-center bg-full-b std-lower-nav">



                 <!-- content start here -->

               

        <div id="adm_add_annouc" style="dissplay: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2 pt-5">Edit Module Content</h3>

                        </div>
                        <div class="h-75 flow_auto w-80 pt-5 d-flex-row-align-start">
                        
                        <?php
                                       
                            include '../connection.php';
                               if($con)
                                {
                                    if(isset($_GET['id']))
                                    {
                                        $_SESSION['edit_mod_content_id'] = $_GET['id'];
                                    }
                                    $id = $_SESSION['edit_mod_content_id'];
                                    $result = mysqli_query($con , "select *from module_content where content_id = '$id'");
                                    $row = mysqli_fetch_array($result);

                                            echo'<form action="#" method="post" enctype="multipart/form-data" class="register-form add-mod-l-form p-0 w-100 h-100 bg-full-b  d-flex-center-row " style="color: black;" >
                                            <div class=" add_module_content w-50 h-100 pl-5 pr-5 pt-5"> 
                                                <label class="gender_lb"> Content Title</label>
                                                <input name="title" value="',$row['title'],'" type="text" placeholder="Enter Title" />
                                                <input name="time"  id="get_time" type="hidden" placeholder="" />';

                                            $content_id =  $row['content_id'];

                                            $result1 = mysqli_query($con , "select *from module_content_files where module_content_id='$content_id'");
                                            
                                            while($row1 = mysqli_fetch_array($result1))
                                            {
                                                    echo'
                                            
                                                    <p class="p_setting_for_file"><input class="file_box"  type="button"  value="',$row1['name'],'" /> 
                                                    <i class="fa fa-times cross_in_files" value="',$row1['name'],'" id="',$row1['id'],'" aria-hidden="true"></i>
                                                    </p>
                                                    
                                                    ';
                                            }

                                            echo'
                                            <label class="gender_lb"> Attached documents</label>
                                            <input type="file" class="after_file" name="file" value="" placeholder="Select file" />
                                            <input class="pt-0 submit_button" name="submit-btn" type="submit" value="Submit" />
                                            
                                            </div>
                                            </form>';

                                }

                            ?>

 
                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                           
                        </div>
                    </div>
                 <!-- content end here -->




                </div>

            </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./mod_leader.js"></script>

</body>

</html>





