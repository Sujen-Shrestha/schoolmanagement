<?php
session_start();
$id = $_SESSION['adm_id'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./mystyle.css">
    <link rel="stylesheet" href="css/checkbox.css">
    <script type="text/javascript" src="./script.js"></script>



</head>

<body>

    <section class="container-fluid max-height c-white">

        <div class="row main-box  max-height">

    <!-- section 1 here -->
            <!-- Admin menu here -->
            <?php include './admin_files/menu.php';?>
            <!-- Admin menu end here -->

     <!-- section 2 here -->         
            <div class="col-lg-10  tmp_h">


                <!-- date and time here -->
                <?php include './admin_files/upper_navbar.php';?>
                <!-- date and time end here -->
                

                <div class="row d-flex align-items-center flex-column justify-content-center bg-full-b std-lower-nav">

                    <!--Admin Home start here -->
                    <?php include './admin_files/home.php';?>
                    <!--Admin Home end here -->


                    <!-- Student start here -->
                    <?php include './admin_files/students.php';?>
                    <!-- Students end here -->


                    <!-- add Student start here -->
                    <?php include './admin_files/add_students.php';?>
                    <!-- add Students end here -->


                    <!-- Module Leaders start here -->
                    <?php include './admin_files/module_leaders.php';?>
                    <!-- Module Leaders end here -->


                    <!-- add Module Leaders start here -->
                    <?php include './admin_files/add_module_leader.php';?>
                    <!--  add Module Leaders end here -->

                    
                    <!-- edit Module Leaders start here -->
                    <?php include './admin_files/edit_module_leader.php';?>
                    <!--  edit Module Leaders end here -->

                    
                    <!-- Modules  start here -->
                    <?php include './admin_files/modules.php';?>
                    <!-- Modules Leaders end here -->


                    <!-- Edit Profile start here -->
                    <?php include './admin_files/edit_profile.php';?>
                    <!-- Edit Profile start here -->


                    <!-- Announcements start here -->
                    <?php include './admin_files/announcements.php';?>
                    <!-- Announcements end here -->

                    <!-- Courses start here -->
                    <?php include './admin_files/courses.php';?>
                    <!-- Courses end here -->

                    <!-- Add Courses start here -->
                    <?php include './admin_files/add_courses.php';?>
                    <!-- Aad Courses end here -->

                    <!-- edit Courses start here -->
                    <?php include './admin_files/edit_course.php';?>
                    <!-- edit Courses end here -->

                    <!-- list_of_modules_available_for_course  start here -->
                    <?php include './admin_files/add_modules_for_course.php';?>
                    <!-- list_of_modules_available_for_course end here -->
                    
                    <!-- associated_modules_with_course start here -->
                    <?php include './admin_files/associated_modules_with_course.php';?>
                    <!-- associated_modules_with_course end here -->

                    <!-- add_modules modules start here -->
                    <?php include './admin_files/add_modules.php';?>
                    <!-- add_modules modules end here -->

                    <!-- add_module_leader_for_mod modules leader start here -->
                    <?php include './admin_files/add_module_leader_for_mod.php';?>
                    <!-- add_module_leader_for_mod modules leader end here -->

                    <!-- edit_modules start here -->
                    <?php include './admin_files/edit_modules.php';?>
                    <!-- edit_modules end here -->

                    <!-- edit_mod_leader_for_mod start here -->
                    <?php include './admin_files/edit_mod_leader_for_mod.php';?>
                    <!-- edit_mod_leader_for_mod end here -->

                    <!-- add_accouncment start here -->
                    <?php include './admin_files/add_accouncment.php';?>
                    <!-- add_accouncment end here -->

                     <!-- add_accouncment start here -->
                     <?php include './admin_files/edit_modules_for_course.php';?>
                    <!-- add_accouncment end here -->

                      <!-- admin edit_accouncment start here -->
                      <?php include './admin_files/admin_edit_accouncment_form.php';?>
                    <!-- admin edit _accouncment end here -->

                    <!-- admin edit student start here -->
                    <?php include './admin_files/admin_edit_std.php';?>
                    <!--  admin edit student start here -->


                    <!-- admin time tabel start here -->
                    <?php include './admin_files/timetable.php';?>
                    <!--  admin time tabel  start here -->



                </div>

            </div>

        </div>

    </section>

    
    <!--     this module leader edit btn -->
    <div id="adm-mod-l-edit-on-btn" class="menu_on_off_button" button_for="adm-mod-l-edit" style="display:none;" >  </div>
    <!--     this add module leader for modules edit btn -->
    <div id="adm_add_mod_l_for_mod_btn"  class="menu_on_off_button" button_for="adm_add_mod_l_for_mod" style="display:none;" >  </div>
    <!--     this add module leader for modules edit btn -->
    <div id="adm_edit_mod_btn"  class="menu_on_off_button" button_for="adm_edit_mod" style="display:none;" >  </div>
    <!--     this add module leader for modules edit btn -->
    <div id="adm_edit_mod_l_btn"  class="menu_on_off_button" button_for="adm_edit_mod_l_for_mod" style="display:none;" >  </div>
    <!--     this add course  btn -->
    <div id="adm_add_course_btn"  class="menu_on_off_button" button_for="adm_add_course" style="display:none;" >  </div>
    <!--     this add course modules  btn -->
    <div id="adm_add_course_mod_btn"  class="menu_on_off_button" button_for="admin_add_course_module" style="display:none;" >  </div>
    <!--     this edit course modules  btn -->
    <div id="adm_edit_course_mod_btn"  class="menu_on_off_button" button_for="admin_edit_course_module" style="display:none;" >  </div>
    <!--     this view course modules  btn -->
    <div id="adm_view_course_mod_btn"  class="menu_on_off_button" button_for="adm_associ_mod_with_course" style="display:none;" >  </div>
    <!--     this admin edit course btn -->
    <div id="adm_edit_c1"  class="menu_on_off_button" button_for="admin_adit_course" style="display:none;" >  </div>
     <!--     this admin edit course btn -->
     <div id="adm_edit_annoc"  class="menu_on_off_button" button_for="adm_edit_ann" style="display:none;" >  </div>
      <!--     this admin  edit student btn -->
      <div id="adm_edit_std_btn"  class="menu_on_off_button" button_for="admin_edit_student" style="display:none;" >  </div>



    <!-- this code is for restroing the user where it was before 
     php will get id of last button click from db and then php will load the id into the value of div in the admin_panel  -->
    <div style="display:none;" id="last-btn-id-saver" value="<?php 
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from last_button  order by id desc limit 1 ");
                                            $row = mysqli_fetch_array($result);
                                             echo  $row['last_button_id'];
                                             $query = "UPDATE last_button SET last_button_id='null' order by id desc limit 1";
                                             mysqli_query( $con , $query );
      
                                        }

                                ?>" > </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/myscript.js"></script>

</body>

</html>