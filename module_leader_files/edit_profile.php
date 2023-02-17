<?php
session_start();
$id = $_SESSION['mod_leader_id'];
include '../connection.php';
if($con)
{

    if (isset($_POST['submit']))
    {

          if (isset($_FILES))
          {
  
  
    
          
                  $tmp_name = $_FILES['file']['name'];
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
                  
                  print_r($_FILES);
                  if($_FILES['file']['size'] > 0)
                  {
                      $type = $_FILES['file']['type'];
                      $target_dir = "../uploads/";
                      $target_file = $target_dir . basename($_FILES['file']["name"]);
      
                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
                      if( $imageFileType == "jpeg" ||  $imageFileType == "jpg" || $imageFileType == "png" )
                      {

                        $query = "UPDATE staff SET profile_photo ='$name'  where staff_id='$id'";
                       mysqli_query( $con , $query );
                    
                        
                          
                          // Upload file
                       move_uploaded_file($_FILES['file']['tmp_name'],'../uploads/'.$name);
                       header('Location:./edit_profile.php'); 

                      }
                       
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
    <title>edit profile</title>

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



                    <!-- content start here -->

                    <div id="admin_edit" style="dissplay: none !important;"
                        class="menu_on_off d-flex align-items-center flex-row justify-content-start  w-100 h-100">
                        <div class="w-50 h-100  d-flex align-items-center flex-column justify-content-center">
                            <h3 class="w-50"> Edit Profile</h3>

                            <?php
                            $id = $_SESSION['mod_leader_id'];
                            include '../connection.php';
                            if($con)
                            {
                            $result = mysqli_query($con , "select *from staff where staff_id='$id'");
                            $row = mysqli_fetch_array($result);
                            echo 
                            '                                   
                            <form  class="d-flex align-items-center flex-column justify-content-center w-100" action="./edit_profile_action.php"  method="post">
                            <input class="input_field w-50 mt-4" name="fname" type="text" placeholder="First name" value="' , $row['staff_first_name'],'" />
                            <input class="input_field w-50" type="text" name="lname" placeholder="Last name" value="' , $row['staff_surname'],'" />
                            <input class="input_field w-50" type="text" name="email" placeholder="Email address"  value="' , $row['email'],'" />
                            <input class="input_field w-50" type="text"  placeholder="Password" name="pass"   value="' , $row['login_password'],'" />
                            <input class="input_field w-50" type="number" name="phone" placeholder="Phone no." value="' , $row['contact_no'],'" />

                            <input class="input_btn  w-50"  style="margin-top: 11px;" name="submit-btn" type="submit" value="Save Changes" />
                            <input type="hidden" name="edit_staff_id" value="' , $row['staff_id'],'" >

                            </form>
                            ';
                            }
                            ?>


                        </div>
                        <div class="w-50 h-100  d-flex align-items-center flex-column justify-content-center">
                        <?php
                            include '../connection.php';
                            if($con)
                            {
                            $result = mysqli_query($con , "select *from staff where staff_id='$id'");
                            $row = mysqli_fetch_array($result);
                            if($row['profile_photo'] != "not")
                            {
                              echo'<img class="rounded-circle  user-img-w-h-home" src="../uploads/' , $row['profile_photo'],'">';
                            }
                            else
                            {
                                echo' <img class="rounded-circle  user-img-w-h-home" src="../img/user.png">';
                            }
                            }
                            ?>
                            <p class="mt-4 cursor-p" data-toggle="modal" data-target="#exampleModal">Choose different picture</p>

                        </div>
                    </div>


                    <!-- content end here -->



                </div>

            </div>

        </div>

    </section>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="#" enctype="multipart/form-data" method="post">
      <div class="modal-body">
        <input type="file"  id="myFile" class="after_file" name="file" placeholder="Select file" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="save_btn"  data-dismiss=""  class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./mod_leader.js"></script>

</body>

</html>