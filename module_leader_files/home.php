


<?php
session_start();
$id = $_SESSION['mod_leader_id'];

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



                 

                    <!--Module leader Home start here -->
                    <div id="mod_l_home" style="dissplay: none !important;"class="d-flex align-items-center flex-column justify-content-around  w-100 h-100">
                            <div class="d-flex  flex-row justify-content-around align-items-center msg-box shadow-light bg-dark-b m-9">
                                <div>
                                <?php
                            
                                    include '../connection.php';
                                    if($con)
                                    {
                                        $result = mysqli_query($con , "select *from staff where staff_id= '$id'  ");
                                        $row = mysqli_fetch_array($result);
                                        echo '<p class="welcome-h">Welcome back, ' , $row['staff_first_name'],'!</p>';
                                        
                                    }
                                ?>
                                
                            </div>
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
                        </div>

                    </div>
                    <!--Module leader Home end here -->



                </div>

            </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./mod_leader.js"></script>

</body>

</html>