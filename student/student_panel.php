<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Panel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./mystyle.css">

</head>

<body>

    <section class="container-fluid max-height c-white">

        <div class="row main-box  max-height">

         
                
                <?php include './menu.php';?>
                <!-- Home menu back arrow here -->
                <div id="bk-arrow" style="display: none !important;"
                    class=" bk-arow d-flex align-items-center flex-column justify-content-center">
                    <i class="fa fa-arrow-circle-left " aria-hidden="true"></i>
                </div>
                <!-- Home menu 2 here -->
                <div id="menu2" style="display: none !important;"
                    class="text-center d-flex align-items-center flex-column justify-content-center ">

                    <div class="h-100 w-50 border module-in-nav bg-light-w"></div>
                    <p class="std-nav mb-5 mt-3">Module 1</p>

                    <p id="contant-btn" class="std-nav">Contant</p>
                    <p id="assign-btn" class="std-nav">Assignments</p>
                    <p id="grade-btn" class="std-nav">Grades</p>
                    <p id="attend-btn" class="std-nav">Attendance</p>

                </div>
            </div>

            <div class="col-lg-9  tmp_h">

                <div class="row  std-upper-nav bg-light-b ">

                    <div
                        class=" pl-3 pr-3 uper-nav-box  d-flex align-items-center flex-row justify-content-between  w-100 ">
                        <img src="../img/logo_lg.jpg" width="107px" height="50px">
                        <div>
                            <p class="m-0" id="date"></p>
                            <p class="m-0" id="time"></p>
                        </div>
                    </div>

                </div>

                <div class="row d-flex align-items-center flex-column justify-content-center bg-full-b std-lower-nav">



                    <!-- Edit Profile start here -->


                                       <!-- content start here -->

                                       <div id="admin_edit" style="dissplay: none !important;"
                        class="menu_on_off d-flex align-items-center flex-row justify-content-start  w-100 h-100">
                        <div class="w-50 h-100  d-flex align-items-center flex-column justify-content-center">
                            <h3 class="w-50"> Edit Profile</h3>

                            <?php
                            include '../connection.php';
                            if($con)
                            {
                            $result = mysqli_query($con , "select *from staff where staff_id=17");
                            $row = mysqli_fetch_array($result);
                            echo 
                            '                                   
                            <form  class="d-flex align-items-center flex-column justify-content-center w-100" action="./edit_profile_action.php"  method="post">
                            <input class="input_field w-50 mt-4" name="fname" type="text" placeholder="First name" value="' , $row['staff_first_name'],'" />
                            <input class="input_field w-50" type="text" name="lname" placeholder="Last name" value="' , $row['staff_middlename'],'" />
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
                            <img class="rounded-circle  user-img-w-h-home" src="../img/user.png">
                            <p class="mt-4">Choose different picture</p>
                        </div>
                    </div>


                    <!-- content end here -->
                     

                    <!-- Edit Profile start here -->
              

                </div>

            </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/myscript.js"></script>

</body>

</html>