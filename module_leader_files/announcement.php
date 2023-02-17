<?php
session_start();
$id = $_SESSION['mod_leader_id'];

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
                    
                    <div id="admin_announc" style="dissplay: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-2 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-2 ml-2"> Announcements</h3>

                        </div>
                        <div class="m-h-75 w-100  overflow-auto d-flex align-items-center flex-column justify-content-start ">


                            
                            <?php
                            
                                include '../connection.php';
                                if($con)
                                {
                                    $result = mysqli_query($con , "select *from announcements where staff_id= '$id' or privilege = 1 ");
                                
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo '<div class="w-75 m-h-30 mb-3 mt-2 bg-dark-b d-flex align-items-center flex-column justify-content-around">

                                            <div class="w-100 d-flex align-items-center flex-row justify-content-around announc-title pt-2 pl-3">
                                                <p class="m-0 mr-auto">' , $row['title'],'</p>
                                                <p class="m-0 pr-5">
                                                <a href="./mod_Lea_edit_ann.php?id=' , $row['announcement_id'],'">    <i id="' , $row['announcement_id'],'"  class="fa fa-pencil-square adm-anounc-edit-btn" aria-hidden="true"></i> </a>
                                                <a href="./mod_Lea_del_ann.php?id=' , $row['announcement_id'],'">   <i id="' , $row['announcement_id'],'"  class="fa fa-trash adm-anounc-del-btn  pl-2" aria-hidden="true"></i> </a>
                                                </p>
                                            </div>
                                            <div class="w-100 d-flex-start-row pt-2 pl-3 pr-3 announc-data">
                                                <p class="m-0">' , $row['description'],'</p>
                                            </div>
                                            <div class="w-100 d-flex-end-row pt-2 pr-3 pb-3 announc-time">
                                                <p class="m-0" id="date_ago' , $row['announcement_id'],'">' , $row['date'],'</p>
                                            </div>
                                        </div>';

                                        
                                        echo'
                                        <script>
                                        function dateToHowManyAgo(stringDate){
                                            var currDate = new Date();
                                            var diffMs=currDate.getTime() - new Date(stringDate).getTime();
                                            var sec=diffMs/1000;
                                            if(sec<60)
                                                return parseInt(sec)+" second"+(parseInt(sec)>1?"s":"")+" ago";
                                            var min=sec/60;
                                            if(min<60)
                                                return parseInt(min)+" minute"+(parseInt(min)>1?"s":"")+" ago";
                                            var h=min/60;
                                            if(h<24)
                                                return parseInt(h)+" hour"+(parseInt(h)>1?"s":"")+" ago";
                                            var d=h/24;
                                            if(d<30)
                                                return parseInt(d)+" day"+(parseInt(d)>1?"s":"")+" ago";
                                            var m=d/30;
                                            if(m<12)
                                                return parseInt(m)+" month"+(parseInt(m)>1?"s":"")+" ago";
                                            var y=m/12;
                                            return parseInt(y)+" year"+(parseInt(y)>1?"s":"")+" ago";
                                        }
                                        document.getElementById("date_ago' , $row['announcement_id'],'").innerHTML = dateToHowManyAgo("' , $row['date'],'");
                                        </script>
                                        ';

                                            
                                    }
                                        
                                }

                            ?>
                                

                        </div>

                        <div class="  pl-5 pb-3 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                      <a href="./mod_Lea_add_ann.php">   <button class="menu_on_off_button input_btn w-max-c " button_for="adm_add_annouc"  style="margin-top: 11px;">Add New Announcements</button> </a>
                        </div>

                    </div>
               
                            
         

                    <!-- assignment end here -->





                </div>

            </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./mod_leader.js"></script>

</body>

</html>