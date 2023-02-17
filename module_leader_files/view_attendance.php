<?php

session_start();
$mod_id = $_SESSION['module_id'];
$display = "none";
include '../connection.php';
if($con)
{

    $query = "delete from attendance  where student_added='' ";
    mysqli_query( $con , $query );

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


                    <!-- take Attendance start here -->

                    <div id="mod_l_t_attend" style="dissplay: none !important;"
                        class="d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2" > Attendance</h3>
                            <div>
                            <form action="./view_specific_attendance.php" method="post" class="login-form" style="color: black;">
                            <select class="select_type ml-3 pl-2" style="padding:5px;width:210px;" value="" name="view_attend_id" id="view_attend_id">
                            <?php
                                           $mod_id = $_SESSION['module_id'];
                                       include '../connection.php';
                                       if($con)
                                        {
                                            $result6 = mysqli_query($con , "select *from attendance where module_code = ' $mod_id' ");
                                        
                                            while($row6 = mysqli_fetch_array($result6))
                                            {
                                                echo'<option  value="',$row6['attendance_id'],'">',$row6['date'],'</option>'; 
                                            }
                                                
                                        }

                                        

                                ?>
                            </select>
                            <button class="attend_view_btn" type="submit" style="background: #61717a;color: white;border: 0;padding:2px 12px 4px 16px;">View</button>
                            </form>
                            </div>
                            

                        </div>
                        <div class="h-75 w-90 border d-flex-row-align-start">

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
                                            $result6 = mysqli_query($con , "select *from students where status='live'");
                                            $have_record = 0;
                                            while($row6 = mysqli_fetch_array($result6))
                                            {
                                                $cource_id = $row6['std_course'];
                
                                                $result7 = mysqli_query($con , "select *from modules where mod_id='$mod_id' and course_id='$cource_id'");
                                                if($row7 = mysqli_fetch_array($result7))
                                                {
                                                    
                                                        $std_id = $row6['student_id'];
        
                                                       $result4 = mysqli_query($con , "select   *from attendance ");
                                                       $Total_attendannce_taken = 0;
                                                       $percentage =0;
                                                        while($row4 = mysqli_fetch_array($result4))
                                                        {   
                                                            $Total_attendannce_taken++;  
                                                        }
        
        
                                                        $result1 = mysqli_query($con , "select *from attendance ");
                                                        
                                                        $found = 0;
                                                        while($row1 = mysqli_fetch_array($result1))
                                                        {
                                                            $have_record++;
                                                            $atten_id = $row1['attendance_id'];
        
                                                            $result2 = mysqli_query($con , "select *from attendance_data where attendance_id = '$atten_id' and student_id = '$std_id'");
                                                            
                                                            while($row2 = mysqli_fetch_array($result2))
                                                            {
                                                                
                                                                if($row2['status'] == "X" )
                                                                {
                                                                    $found++;
                                                                }
                                                                
                                                                
                                                            }
        
                                                            
                                                            
                                                        }
                                                        if($Total_attendannce_taken > 0)
                                                        {
                                                            $percentage = $found / $Total_attendannce_taken;
                                                            $percentage = $percentage * 100;
                                                            $percentage = round($percentage, 2);
                                                            $result5 = mysqli_query($con , "select *from attendance_percentage where mod_id='$mod_id' and std_id='$std_id'");
                                                            if($row5 = mysqli_fetch_array($result5))
                                                            {
                                                                $query = "UPDATE attendance_percentage SET  percentage='$percentage' where mod_id ='$mod_id' and std_id='$std_id'";
                                                                mysqli_query( $con , $query );
                                                                
                                                            }
                                                            else
                                                            {
                                                                $query = "INSERT INTO attendance_percentage  ( std_id , percentage , mod_id) VALUES ( '$std_id' , '$percentage' , '$mod_id')";
                                                                mysqli_query( $con , $query );
                                                            }
                                                            echo '
        
                                                                <div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                        
                                                                <p class="m-0">',$percentage,'%</p>
                                                            </div>
                                                            ';
                                                        }
                                                        if($have_record == 0 )
                                                        {
                                                            echo '
        
                                                            <div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                    
                                                            <p></p>
                                                        </div>
                                                        ';
                                                        }
                                                    
                                                }
                                            
                                                    
                                            }
                                                
                                        }

                                        

                                ?>
                                    
                                   
                                    
                                
                               

                            </div>
                            <!-- Grade column 2 end here -->




                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                        <a href="./take_attendance.php"><button id="mod_l_v_attend_btn2" class="input_btn w-max-c " style="margin-top: 11px;">Take
                                Attendance</button></a>
                                
                        </div>
                    </div>

                    <!-- take Attendance end here -->


                </div>

            </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./mod_leader.js"></script>

</body>

</html>