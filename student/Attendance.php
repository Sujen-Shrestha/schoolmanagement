



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


<!-- Attendance start here -->

<div id="attend" style="dissplay: none !important;"
                        class="d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2"> Attendance</h3>

                        </div>
                        <div class="h-75 w-80 border ">

                            <!-- Attendance Nav here -->
                            <div class="border w-100 h-15 bg-dark-b d-flex-around-row">

                                <div class=" grade-nav">
                                    Student id
                                </div>

                                <div class=" grade-nav">
                                    Module Name
                                </div>

                                <div class=" grade-nav">
                                    Attendance Percentage
                                </div>

                            </div>
                            <!-- Attendance Nav end here -->

                            <?php
                                       
                                       include '../connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where student_id = '$id'");
                                            $row = mysqli_fetch_array($result);
                                            $course_id = $row['std_course'];
                                            $result1 = mysqli_query($con , "select *from modules where course_id = '$course_id'");
                                            while($row1 = mysqli_fetch_array($result1))
                                            {
                                                $mod_id = $row1['mod_id'];
                                                    $result3 = mysqli_query($con , "select *from attendance_percentage where mod_id='$mod_id' and std_id='$id'");
                                                    if($row3 = mysqli_fetch_array($result3))
                                                    {
                                                        echo'
                                                            <div class="border w-100 h-10-r bg-light-b flow_auto  d-flex-around-row">
                                                            <div class=" grade-nav">
                                                            ' , $id,'
                                                            </div>
                                                                        
                                                            <div class=" grade-nav">
                                                            ' , $row1['module_title'],'
                                                            </div>
                                                            
                                                            <div class=" grade-nav">
                                                            ' , $row3['percentage'],'%
                                                            </div>
                                                            </div>
                                                            ';
                                                    }
                                                    else
                                                    {
                                                        echo'
                                                            <div class="border w-100 h-10-r bg-light-b flow_auto  d-flex-around-row">
                                                            <div class=" grade-nav">
                                                            ' , $id,'
                                                            </div>
                                                                        
                                                            <div class=" grade-nav">
                                                            ' , $row1['module_title'],'
                                                            </div>
                                                            
                                                            <div class=" grade-nav">
                                                            0%
                                                            </div>
                                                            </div>
                                                            ';
                                                    }

                                                
                                                    
                                            }
                                                
                                        }

                            ?>




                        </div>
                    </div>

                    <!-- Attendance end here -->

            </div>

        </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./student_script.js"></script>

</body>

</html>