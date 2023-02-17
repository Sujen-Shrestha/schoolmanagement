            
            
            
            <div class="col-lg-2  tmp_h d-flex align-content-center flex-column justify-content-center bg-dark-b position-relative">

                <!-- Home menu 1 here -->
                <div id="menu1" style="disjplay: none !important;" class="text-center d-flex align-items-center flex-column justify-content-center">

                <?php
                            include './connection.php';
                            if($con)
                            {
                            $result = mysqli_query($con , "select *from staff where staff_id='$id'");
                            $row = mysqli_fetch_array($result);
                            if($row['profile_photo'] != "not")
                            {
                              echo'<img class="rounded-circle  user-img-w-h-home" src="./uploads/' , $row['profile_photo'],'">';
                            }
                            else
                            {
                                echo' <img class="rounded-circle  user-img-w-h-home" src="./img/user.png">';
                            }
                            }
                            ?>
                    <p class="std-nav">Admin</p>
                    <p id="admin_edit_btn" button_for="admin_edit" class="menu_on_off_button edit-p"> <em>Edit Profile</em></p>

                    <p id="admin_home_btn" button_for="admin_home" class="menu_on_off_button std-nav">Home</p>
                    <p id="admin_student_btn" button_for="admin_student" class="menu_on_off_button std-nav">Students</p>
                    <p id="adm_course_btn" button_for="adm_course" class="menu_on_off_button std-nav">Course</p>
                    <p id="admin_module_btn" button_for="admin_module" class="menu_on_off_button std-nav">Modules</p>
                    <p id="admin_module_l_btn" button_for="admin_module_l" class="menu_on_off_button std-nav">Modules Leaders</p>
                    <p id="time_table_btn" button_for="schedule" class="menu_on_off_button std-nav">Time Table</p>
                    <p id="admin_announc_btn" button_for="admin_announc" class="menu_on_off_button std-nav">Announcements</p>
                    <p id="adm_sign_out_btn" button_for="adm_sign_out" class="menu_on_off_button std-nav">Sign Out</p>

                </div>

            </div>