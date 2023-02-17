<?php

session_start();

include '../connection.php';
if($con)
{

  if ( isset($_POST['submit-btn']))
  {
    $title = $_POST['title'];
    $description = $_POST['message'];
   
    $id =  $_GET['id']; 

      $query = "UPDATE announcements SET title='$title' , description='$description'  WHERE announcement_id='$id'";
      mysqli_query( $con , $query );
      
        
        header('Location:./announcement.php'); 
      
      
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
            <div
                class="col-lg-2  tmp_h d-flex align-content-center flex-column justify-content-center bg-dark-b position-relative">

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

                    <!--add Announcements start here -->
                    <div id="adm_edit_ann" style="dissplay: none !important;"
                        class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2 pt-5">Edit New Announcements</h3>
                        </div>
                        <?php
                                      
                                $id =  $_GET["id"];
                                include '../connection.php';
                                if($con)
                                {
                                    $result = mysqli_query($con , "select *from announcements where announcement_id='$id'");
                                   
                                    $row = mysqli_fetch_array($result);
                                    echo 
                                    '
                                    <div class="h-75 w-80 pt-5 d-flex-row-align-start">
                                    
                                        <form action="#" method="post" class="register-form add-mod-l-form p-0 w-100 h-100 bg-full-b  d-flex-center-row " style="color: black;">
                                            <div class=" w-50 h-100 pl-5 pr-5 pt-5"> 
                                                <label class="gender_lb"> Announcements Title</label>
                                                <input name="title"  type="text" value="' , $row['title'],'" />
                                                <label class="gender_lb"> Announcements Message</label>
                                                <textarea id="w3review"  name="message"  rows="4" cols="50">' , $row['description'],'</textarea>
                                                <input type="hidden" name="mod_id" value="' , $row['announcement_id'],'" >
                                                <input class="pt-0 submit_button" name="submit-btn" type="submit" value="Submit" />
                                                
                                            </div>
                                        </form>
                                    </div>

                                    ';

                                }
                                 ?>


                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">

                        </div>
                    </div>

                    <!--add Announcements end here -->



                </div>

            </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./mod_leader.js"></script>

</body>

</html>