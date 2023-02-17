


<?php

session_start();
$mod_id = $_SESSION['module_id'];

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
            <div class="col-lg-2  tmp_h d-flex align-content-center flex-column justify-content-center bg-dark-b position-relative">

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

                    <div id="mod_l_content" style="disssplay: none !important;" class="overflow-auto d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-5 ml-2">Module Content</h3>

                        </div>
                        <div class="h-75 w-90 flow_auto  pt-4 pb-4 d-flex align-items-center flex-column justify-content-start ">

           
                                    
                                    <?php
                                       
                                       $mod_id = $_SESSION['module_id'];
                                       include '../connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from module_content where module_code = '$mod_id'");

                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo '
                                                <div class="w-90 m-h-30 mb-3 p-2 bg-dark-b d-flex align-items-center flex-row justify-content-between" style="padding:25px !important;">

                                                <div class=" w-30 h-100 d-flex align-items-center flex-column justify-content-around">
                                                <h4 class="m-0 mb-2">' , $row['title'],'</h4>
                                                <p class="m-0 p-0">Attach files</p>
                                                <div class="position-relative d-flex align-items-center flex-column justify-content-center">';
                                                $content_id =  $row['content_id'];

                                                $result1 = mysqli_query($con , "select *from module_content_files where module_content_id='$content_id'");
                                                
                                                while($row1 = mysqli_fetch_array($result1))
                                                {
                                                    echo'
                                                        <a class="m-0 under-line-hover position-relative cursor-p" style="text-decoration:none;color:#1ce61c;" target"_blank" href="../uploads/' , $row1['name'],'">' , $row1['name'],'</a>
                                                    ';

                                                }

                                                echo '
                                                </div>
                                                </div>
                                                    <div class=" w-25 h-100  d-flex align-items-center flex-column justify-content-around">
                                                        <div>
                                                            
                                                            <span class="mod-l-module-content-c-box">
                                                               <a style="color:white;" href="./edit_module_content.php?id=',$content_id,'">  <i class="fa fa-pencil-square mod-l-module-content-c" aria-hidden="true"></i></a>
                                                            </span>
                                                            <span class="mod-l-module-content-c-box">
                                                            <a style="color:white;" href="./del_module_content.php?id=',$content_id,'">   <i class="fa fa-trash mod-l-module-content-c del_module" aria-hidden="true"></i> </a>
                                                            </span>
                                                        </div>
                                                        <p class="m-0">',$row['date'],'</p>
                                                    </div>
                                                </div>';

                                                    
                                            }
                                                
                                        }

                                ?>


    

                        </div>
                        <!-- <span class="mod-l-module-content-c-box">
                                                               <i class="fa fa-eye mod-l-module-content-c module_c_view" id="', $content_id,'" aria-hidden="true"></i>
                                                            </span> -->
                        <div class="  pl-5 pb-3 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                        <a href="./add_module_content.php"><button class="input_btn w-max-c " style="margin-top: 11px;">Add Content</button></a>
                        </div>
                    </div>

                 <!-- content end here -->



                </div>

            </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./mod_leader.js"></script>

</body>

</html>


