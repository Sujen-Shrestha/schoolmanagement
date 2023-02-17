

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


                    <!-- modules start here -->

                    <div id="modules" class="d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-5 ml-2"> Modules</h3>

                        </div>
                        <div class="h-75 w-100  d-flex align-items-center flex-column justify-content-around ">
                            <!-- row 2 start here -->
                            <!-- modules start here -->




                            <?php
                                       
                                       include '../connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where student_id = '$id'");
                                            $row = mysqli_fetch_array($result);
                                            $course_id = $row['std_course'];
                                            $count =0;
                                            $result1 = mysqli_query($con , "select *from modules where course_id = '$course_id'");
                                            
                                            while($row1 = mysqli_fetch_array($result1))
                                            {
                                                $count++;
                                                
                                                if($count == 1)
                                                {
                                                    echo '<div class="w-100 h-40 d-flex align-items-center flex-row justify-content-around">';
                                                }
                                                if($count < 4)
                                                {
                                                    
                                                    echo'
                                                    <a class="cursor-p module w-23 h-10" href="./module_content.php?id=' , $row1['mod_id'],'">
                                                    <div class="cursor-p module w-100 h-100">
                                                   
                                                        <div class="h-75 w-100  bg-light-w">

                                                        </div>
                                                        <div
                                                            class="h-25 w-100  d-flex align-items-center flex-row justify-content-around bg-light-b">
                                                            <p class="m-0">' , $row1['module_title'],'</p>
                                                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                    </a>
                                                ';

                                                }
                                                
                                                if( $count == 4)
                                                {
                                                    echo '</div>';
                                                    echo '<div class="w-100 h-40 d-flex align-items-center flex-row justify-content-around">';
                                                    echo'
                                                    <a class="cursor-p module w-23 h-10" href="./module_content.php?id=' , $row1['mod_id'],'">
                                                    <div class="cursor-p module w-100 h-100">
                                                   
                                                        <div class="h-75 w-100  bg-light-w">

                                                        </div>
                                                        <div
                                                            class="h-25 w-100  d-flex align-items-center flex-row justify-content-around bg-light-b">
                                                            <p class="m-0">' , $row1['module_title'],'</p>
                                                            <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                        </div>
                                                    </div>
                                                    </a>
                                                    ';

                                                    $count= 1;
                                                }
                                                    
                                            }
                                                
                                        }
                                    

                            ?>


                     



                        </div>
                    </div>

                    <!-- modules end here -->


            </div>

        </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./student_script.js"></script>

</body>

</html>