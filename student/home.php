

<?php


session_start();
$id = $_SESSION['std_id'];




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
    <link rel="stylesheet" href="../mystyle.css">

</head>

<body>

    <section class="container-fluid max-height c-white">

        <div class="row main-box  max-height">

        <div class="col-lg-2  tmp_h d-flex align-content-center flex-column justify-content-center bg-dark-b position-relative">


            <?php include './menu.php';?>

        </div>

        <div class="col-lg-10  tmp_h">

            <?php include './upperNav.php';?>

            <div class="row d-flex align-items-center flex-column justify-content-center bg-full-b std-lower-nav">


                           <!-- Home start here -->
                     <div id="home" style="dissplay: none !important;"
                        class="d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class="w-100 h-25  home-main-logo"></div>
                        <div class="d-flex  flex-row justify-content-around msg-box shadow-light bg-dark-b m-9">
                            <div>
                                <?php
                            
                            include '../connection.php';
                            if($con)
                            {
                                $result = mysqli_query($con , "select *from students where student_id='$id'");
                                $row = mysqli_fetch_array($result);
                                echo '<p class="welcome-h">Welcome back, ' , $row['student_firstname'],'!</p>';
                                
                            }
                        ?>
                        <?php
                            
                            include '../connection.php';
                            if($con)
                            {


                                $result = mysqli_query($con , "select *from students where student_id = '$id'");
                                $row = mysqli_fetch_array($result);
                                $course_id = $row['std_course'];
                                $count =0;
                                $result1 = mysqli_query($con , "select *from modules where course_id = '$course_id'");
                                
                                $count=0;
                                $count1=0;
                                while($row1 = mysqli_fetch_array($result1))
                                {
                                    $staff_id = $row1['staff_id'];
                                    $mod_id = $row1['mod_id'];
                                    $result2 = mysqli_query($con , "select *from announcements where staff_id = '$staff_id' ");
                                    
                                    while($row2 = mysqli_fetch_array($result2))
                                    {
                                        $count++; 
                                    }
                                    
                                    $result4 = mysqli_query($con , "select *from module_assignment where module_code = '$mod_id' ");
                            
                                    while($row4 = mysqli_fetch_array($result4))
                                    {
                                        $count1++; 
                                    }
                                }

                                $result5 = mysqli_query($con , "select *from announcements where  privilege = 0 ");
                                    
                                while($row5 = mysqli_fetch_array($result5))
                                {
                                    $count++; 
                                }

                                    echo '<p class="welcome-p">You have received : ',$count,' Announcements, ',$count1,' Assignments</p>';
                                
                                    
                            }

                        ?>
                                
                            </div>
                            <?php
                            include '../connection.php';
                            if($con)
                            {
                            $result = mysqli_query($con , "select *from students where student_id='$id'");
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
                    <!-- Home end here -->




            </div>

        </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./student_script.js"></script>

</body>

</html>