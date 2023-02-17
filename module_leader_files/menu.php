



<!-- Home menu 1 here -->
<div id="menu1" style="disjplay: none !important;" class="text-center d-flex align-items-center flex-column justify-content-center">


<?php

                            $id = $_SESSION['mod_leader_id'];

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
<?php
        $id = $_SESSION['mod_leader_id'];            
       include '../connection.php';
        if($con)
        {
            $result = mysqli_query($con , "select *from staff where staff_id= '$id'");
            $row = mysqli_fetch_array($result);
            echo '<p class="std-nav">' , $row['staff_first_name'],' ' , $row['staff_surname'],'</p>';
            }
 ?>

<a href="./edit_profile.php"><p id="mod_l_edit_btn" class="edit-p"> <em>Edit Profile</em></p></a>

<a href="./home.php"><p id="mod_l_home_btn" class="std-nav">Home</p></a>
<a href="./module_content.php"><p id="mod_l_content_btn" class="std-nav">Module Content</p></a>
<a href="./assignment.php"><p id="mod_l_v_attend_btn" class="std-nav">Assignments</p></a>
<a href="./view_attendance.php"><p id="mod_l_assign_btn" class="std-nav">Attendance</p></a>
<a href="./announcement.php"><p id="mod_l_announc_btn" class="std-nav">Announcements</p></a>
<a href="../index.php"><p id="mod_sign_out_btn" class="std-nav">Sign Out</p></a>

</div>
