<?php

session_start();
$mod_id = $_SESSION['module_id'];
$display = "none";
include '../connection.php';
if($con)
{

    $t=time();
    $date_now = date("Y-m-d",$t);
    $query = "INSERT INTO attendance ( taken , date) VALUES ('yes' , '$date_now')";
    mysqli_query( $con , $query );
    $result = mysqli_query($con , "select *from attendance  order by attendance_id desc limit 1 ");
    $row = mysqli_fetch_array($result);
    $_SESSION['take_attendc_new_id'] = $row['attendance_id'];

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

                    <!-- Announcements start here -->







                    <!-- take Attendance start here -->

                    <div id="mod_l_t_attend" style="dissplay: none !important;"
                        class="d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2"> Attendance</h3>

                        </div>
                        <div class="h-75 w-90 border flow_auto d-flex-row-align-start">

                            <!-- Grade column 1 here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Student id</p>
                                </div>

                                <?php
                                       
                                       include '../connection.php';
                                       if($con)
                                        {
                                            $result6 = mysqli_query($con , "select *from students where status='live'");
                                        
                                            while($row6 = mysqli_fetch_array($result6))
                                            {
                                                $cource_id = $row6['std_course'];
                
                                                $result7 = mysqli_query($con , "select *from modules where mod_id='$mod_id' and course_id='$cource_id'");
                                                if($row7 = mysqli_fetch_array($result7))
                                                {
                                                    echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                    <p class="attend-nav-text m-0 p-2">' , $row6['student_id'],'</p>
                                                        </div>';
                                                }
                                            
                                                    
                                            }
                                                
                                        }

                                        

                                ?>

                                


                                

                            </div>
                            <!-- Grade column 1 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Student Name</p>
                                </div>

                               
                                <?php
                                       
                                       include '../connection.php';
                                       if($con)
                                        {
                                            $result6 = mysqli_query($con , "select *from students where status='live'");
                                        
                                            while($row6 = mysqli_fetch_array($result6))
                                            {
                                                $cource_id = $row6['std_course'];
                
                                                $result7 = mysqli_query($con , "select *from modules where mod_id='$mod_id' and course_id='$cource_id'");
                                                if($row7 = mysqli_fetch_array($result7))
                                                {
                                                    echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                    <p class="attend-nav-text m-0 p-2">', $row6['student_firstname'],'  ' , $row6['student_surname'],'</p>
                                                        </div>';
                                                }
                                            
                                                    
                                            }
                                                
                                        }

                                        

                                ?>


                            </div>
                            <!-- Grade column 2 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Attendance</p>
                                </div>

                                
                                <?php
                                       
                                       include '../connection.php';
                                       if($con)
                                        {
                                            $count =0;
                                            $count1 =0;
                                            $result6 = mysqli_query($con , "select *from students where status='live'");
                                        
                                            while($row6 = mysqli_fetch_array($result6))
                                            {
                                                $cource_id = $row6['std_course'];
                
                                                $result7 = mysqli_query($con , "select *from modules where mod_id='$mod_id' and course_id='$cource_id'");
                                                if($row7 = mysqli_fetch_array($result7))
                                                {
                                                    echo '

                                                            <div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                    
                                                            <span class="mod-l-attend-c-box">
                                                            <i id="atten',$count++,'" for="first" for2="attend',$count1,'" std_id="',$row6['student_id'],'" attend_value="X" class="attendance attend',$count1,'  fa fa-check-circle-o mod-l-attend-c" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="mod-l-attend-c-box">
                                                            <i  id="atten',$count++,'" for="second" for2="attend',$count1,'" std_id="',$row6['student_id'],'" attend_value="O" class="attendance attend',$count1,' fa fa-circle-o mod-l-attend-c" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="mod-l-attend-c-box">
                                                            <i  id="atten',$count++,'" for="third" for2="attend',$count1,'" std_id="',$row6['student_id'],'" attend_value="A" class="attendance attend',$count1,' fa fa-times-circle mod-l-attend-c" aria-hidden="true"></i>
                                                        </span>
                                                        </div>
                                                        ';

                                                        $count1++;   
                                                }
                                            
                                                    
                                            }
                                                
                                        }

                                        

                                ?>
                                    
                                
                               

                            </div>
                            <!-- Grade column 2 end here -->




                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                        <a href="./view_attendance.php"><button id="mod_l_v_attend_btn2" class="input_btn w-max-c " style="margin-top: 11px;">View
                                Attendance</button></a>
                        </div>
                    </div>

                    <!-- take Attendance end here -->






                    <!-- assignment end here -->





                </div>

            </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./mod_leader.js"></script>

</body>

</html>