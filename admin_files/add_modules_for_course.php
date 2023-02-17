
                    <div id="admin_add_course_module" style="display: none !important;" class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2"> List of All Available Modules</h3>

                        </div>
                        <div class="h-75 w-90 border d-flex-row-align-start">

                            <!-- Grade column 1 here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0"> Module Code</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from modules");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['module_code'],'</p>
                                                    </div>';

                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 1 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0"> Module Title</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from modules");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['module_title'],'</p>
                                                    </div>';

                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 2 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Level</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from modules");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['level'],'</p>
                                                    </div>';

                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 2 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Associated Tutor</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from modules");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $tmp_di = $row['staff_id'];
                                                $result1 = mysqli_query($con , "select *from staff where staff_id='$tmp_di'");
                                                $row1 = mysqli_fetch_array($result1);
                                                if($row1)
                                                {
                                                    echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row1['staff_first_name'],' ', $row1['staff_surname'],'</p>
                                                    </div>';
                                                }
                                                else
                                                {
                                                    echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2"></p>
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
                                    <p class="attend-nav-text m-0">Credit Points</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from modules");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['credit_points'],'</p>
                                                    </div>';

                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 2 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Check</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con ,  "select *from modules");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100 attend-std-id-col-data w-100 d-flex-center-row">
                                             <p class="attend-nav-text m-0 p-2">
                                                <input id="', $row['mod_id'],'"  class="checkbox_size adm_add_mod_to_c_check_btn" type="checkbox" >
                                             </p>
                                            </div>';


                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 2 end here -->

                            


                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <form  action="./phpActionFiles/add_mod_into_course_action.php" method="post" >
                                <input id="saving_id_of_all" value="+" name="get_id" type="hidden">
                                <input id="course_id" value=
                                "<?php
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from courses  order by course_id desc limit 1 ");
                                            $row = mysqli_fetch_array($result);
                                            echo $row['course_id'];  
                                        }

                                ?>" name="course_id" type="hidden">
                                <input class="submit_button m-0" name="submit-btn" type="submit" value="Submit Form" />

                            </form>
                        </div>
                    </div>
