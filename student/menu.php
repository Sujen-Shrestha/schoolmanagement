
             
                <!-- Home menu 1 here -->
                <div id="menu1" style="dissplay: none !important;"
                    class="text-center d-flex align-items-center flex-column justify-content-center">

                    <?php
                            include '../connection.php';
                            if($con)
                            {
                            $result = mysqli_query($con , "select *from students where student_id='$id'");
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
                        include '../connection.php';
                        $id = $_SESSION['std_id'];
                            if($con)
                            {
                                $result = mysqli_query($con , "select *from students where student_id='$id'");
                                $row = mysqli_fetch_array($result);
                                echo '<p class="std-nav">' , $row['student_firstname'],' ' , $row['student_surname'],'</p>';
                                }
                    ?>

                    <a href="./edit_profile.php">
                    <p id="edit-btn" class="edit-p"> <em>Edit Profile</em></p>
                    </a>
                    <a href="./home.php">
                    <p id="home-btn" class="std-nav">Home</p>
                    </a>
                    <a href="./modules.php">
                    <p id="modules-btn" class="std-nav">Modules</p>
                    </a>
                    <a href="./annonement.php">
                    <p id="announc-btn" class="std-nav">Announcements</p>
                    </a>
                    <a href="./time_table.php">
                    <p id="attend-btn" class="std-nav">Time Table</p>
                    </a>
                    <a href="./Attendance.php">
                    <p id="attend-btn" class="std-nav">Attendance</p>
                    </a>
                    <a href="../index.php">
                    <p id="std_sign_out_btn" class="std-nav">Sign Out</p>
                    </a>
                </div>

               
               
              