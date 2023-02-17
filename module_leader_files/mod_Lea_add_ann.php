<?php
session_start();
$id = $_SESSION['mod_leader_id'];

include '../connection.php';
if($con)
{

  if (isset($_POST['submit-btn']) )
  {
      $title = $_POST['title'];
      $message = $_POST['message'];
      $time = $_POST['time'];
      
      $query = "INSERT INTO announcements ( title, description , date , staff_id , privilege) VALUES ('$title' , '$message' , '$time' , '$id'  , '2')";
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

                    

        <div id="adm_add_annouc" style="dissplay: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2 pt-5">Add New Announcements</h3>

                        </div>
                        <div class="h-75 w-80 pt-5 d-flex-row-align-start">
                        

                            <form action="#" method="post" class="register-form add-mod-l-form p-0 w-100 h-100 bg-full-b  d-flex-center-row " style="color: black;">
                                <div class=" w-50 h-100 pl-5 pr-5 pt-5"> 
                                    <label class="gender_lb"> Announcements Title</label>
                                    <input name="title"  type="text" placeholder="Enter Title" />
                                    <input name="time" id="get_time" type="hidden" placeholder="" />
                                    <label class="gender_lb"> Announcements Message</label>
                                    <textarea id="w3review"  name="message" rows="4" cols="50"></textarea>
                                    <input class="pt-0 submit_button" name="submit-btn" type="submit" value="Submit" />
                                    
                                </div>
                            </form>

                            <script>
                                var today = new Date();
                                var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                                var CurrentDateTime = date+' '+time;
                                document.getElementById("get_time").value = CurrentDateTime;
                            </script> 
                        </div>
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