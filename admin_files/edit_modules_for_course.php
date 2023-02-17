
                    <div id="admin_edit_course_module" style="display: none !important;" class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2"> List of All Available Modules</h3>

                        </div>
                        <div class="h-75 w-90 flow_auto border d-flex-row-align-start">

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
                            <script>
                                // saving id of all check in the string in the edit
                                var ccc = function(id , c_id)
                                {
                                    document.getElementById("temp_Course_id_save").value = c_id;
                                    let tmp = document.getElementById("temp_id_save").value
                                    if(tmp == "+")
                                    {
                                        document.getElementById("temp_id_save").value = id;
                                    }
                                    else
                                    {
                                        document.getElementById("temp_id_save").value = tmp + "-" + id;
                                    }
                                    console.log(c_id);
                                }

                            </script>
                            <input id="temp_id_save" value="+" name="get_id" type="hidden">
                            <input id="temp_Course_id_save" value="" name="get_id" type="hidden">
                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Check</p>
                                </div>
                                <?php
                                        $found = 0;
                                       $id = $_SESSION["edit_course_id"];
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con ,  "select *from modules");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100 attend-std-id-col-data w-100 d-flex-center-row">
                                             <p class="attend-nav-text m-0 p-2">
                                                <input id="', $row['mod_id'],'"  class=" check_bx', $row['mod_id'],' checkbox_size adm_edit_mod_to_c_check_btn" type="checkbox" >
                                             </p>
                                            </div>';
                                            

                                                if($row['course_id'] == $id)
                                                {
                                                    $found++;
                                                    echo'<script>
                                                    console.log("', $id,'");
                                                    $(".check_bx', $row['mod_id'],'").click();
                                                    ccc(', $row['mod_id'],'  ,  ', $id,' );
                                                    </script>';
                                                }
                                                    
                                            }
                                            if($found == 0)
                                            {
                                                echo'<script>
                                                document.getElementById("temp_Course_id_save").value = ', $id,';
                                                    </script>';
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 2 end here -->

                            


                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <form  action="./phpActionFiles/edit_mod_into_course_action.php" method="post" >
                            <input id="saving_id_of_all_edit" value="+" name="get_edit_id" type="hidden">
                                <input id="course_id_edit" value="" name="edit_course_id" type="hidden">
                                <input id="previous_id_mod" value="" name="prev_mod_id" type="hidden">
                                <input class="submit_button m-0" name="submit-btn" type="submit" value="Submit Form" />
                                <script>
                                    let tmp = document.getElementById("temp_id_save").value;
                                    let tmp2 = document.getElementById("temp_Course_id_save").value;
                                    document.getElementById("previous_id_mod").value = tmp;
                                    document.getElementById("saving_id_of_all_edit").value = tmp;
                                    document.getElementById("course_id_edit").value = tmp2;
                            </script>
                            </form>
                        </div>
                    </div>
