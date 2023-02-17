<?php

session_start();
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

                <div class="row d-flex align-items-center  flex-column justify-content-center bg-full-b std-lower-nav">


                    <!-- take Attendance start here -->

                    <div id="mod_l_t_attend" style="dissplay: none !important;"
                        class="d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2"> Grade Assignment</h3>

                        </div>
                        <div class="h-75 w-90  flow_auto border d-flex-row-align-start">

                            <!-- Grade column 1 here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Student id</p>
                                </div>

                                <?php
                                    $id = $_GET['id'];
                                       include '../connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where status='live'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $std_id = $row['student_id'];
                                                $result1 = mysqli_query($con , "select *from module_assignment_grade where assignment_id='$id' and std_id='$std_id'");
                                                
                                                    if($row1 = mysqli_fetch_array($result1))
                                                    {
                                                            echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                        <p class="attend-nav-text m-0 p-2">' , $row['student_id'],'</p>
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
                                            $result = mysqli_query($con , "select *from students where status='live'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $std_id = $row['student_id'];
                                                $result1 = mysqli_query($con , "select *from module_assignment_grade where assignment_id='$id' and std_id='$std_id'");
                                                
                                                    if($row1 = mysqli_fetch_array($result1))
                                                    {
                                                            echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                        <p class="attend-nav-text m-0 p-2">', $row['student_firstname'],'  ' , $row['student_surname'],'</p>
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
                                    <p class="attend-nav-text m-0">Submitted</p>
                                </div>

                                      
                                <?php
                            
                                        include '../connection.php';
                                        if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where status='live'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $std_id = $row['student_id'];
                                                $result1 = mysqli_query($con , "select *from module_assignment_grade where assignment_id='$id' and std_id='$std_id'");
                                                
                                                    if($row1 = mysqli_fetch_array($result1))
                                                    {
                                                            echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                        <p class="attend-nav-text m-0 p-2">', $row1['submitted'],'</p>
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
                                    <p class="attend-nav-text m-0">Grade</p>
                                </div>

                                <?php
                            
                                        include '../connection.php';
                                        if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where status='live'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $std_id = $row['student_id'];
                                                $result1 = mysqli_query($con , "select *from module_assignment_grade where assignment_id='$id' and std_id='$std_id'");
                                                
                                                    if($row1 = mysqli_fetch_array($result1))
                                                    {
                                                            echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                            <input id="',$id,'" value="', $row1['grade'],'" std_id="', $std_id,'" class="grade_mark" style="background: #61717a;outline: 0 ;border: 0 ; color:white;text-align:center;"
                                                            name="phone" type="number"  />
                                                        </div>';
                                                    }
                                                    
                                            }
                                                
                                        }

                                ?>
                                           
                                
                                
                               

                            </div>
                            <!-- Grade column 2 end here -->




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