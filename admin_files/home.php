<!--Admin Home start here -->
<div id="admin_home" style="disaplay: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-around  w-100 h-100">
                        <div class="d-flex  flex-row justify-content-around align-items-center msg-box shadow-light bg-dark-b m-9">
                            <div>
                                <p class="welcome-h">Welcome back, Admin!</p>
                            </div>
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
                        </div>
                        
                        <!-- lower section start here -->
                        <div class="w-100 h-40 pb-3 d-flex align-items-center flex-row justify-content-around">
                            <div class="cursor-p  w-23 h-10">
                                <div class="h-100 w-100 bg-dark-b d-flex align-items-center flex-column justify-content-around">

                                    <p class="self-align-start w-100 mt-3 pl-3 m-0">Students</p>
                                    <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $mod = 0;
                                            $result = mysqli_query($con , "select *from students where status = 'live'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $mod++;
                                            }
                                            
                                            echo '<p class="bg-student-n w-100 text-center m-0">' , $mod,'</p>';
                                                
                                        }

                                ?>
                                    <p class="m-0 w-100 m-0 pl-3 text-upper pb-3">Total <br> students</p>
                                </div>
                            </div>
                            <!-- modules start here -->
                            <div class="cursor-p  w-23 h-10">
                                <div class="h-100 w-100 bg-dark-b d-flex align-items-center flex-column justify-content-around">

                                    <p class="self-align-start w-100 mt-3 pl-3 m-0">Module Leader</p>
                                    <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $mod = 0;
                                            $result = mysqli_query($con , "select *from staff where privilege = 0");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $mod++;
                                            }
                                            
                                            echo '<p class="bg-student-n w-100 text-center m-0">' , $mod,'</p>';
                                                
                                        }

                                ?>
                                    <p class="m-0 w-100 m-0 pl-3 text-upper pb-3">Total <br> Module Leader</p>
                                </div>
                            </div>
                            <!-- modules start here -->
                            <div class="cursor-p  w-23 h-10">
                                <div class="h-100 w-100 bg-dark-b d-flex align-items-center flex-column justify-content-around">

                                    <p class="self-align-start w-100 mt-3 pl-3 m-0">Modules</p>
                                    
                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $mod = 0;
                                            $result = mysqli_query($con , "select *from modules");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $mod++;
                                            }
                                            
                                            echo '<p class="bg-student-n w-100 text-center m-0">' , $mod,'</p>';
                                                
                                        }

                                ?>
                                    
                                    <p class="m-0 w-100 m-0 pl-3 text-upper pb-3">Total <br> Modules</p>
                                </div>
                            </div>
                            <!-- modules end here -->
                        </div>


                    </div>
                    <!--Admin Home end here -->