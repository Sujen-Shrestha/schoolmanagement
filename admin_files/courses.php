<div id="adm_course" style="display: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2"> Courses</h3>
                        </div>

                        <div class="h-75 w-90 flow_auto border d-flex-row-align-start">

                            <!-- Grade column 1 here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0"> Course Code</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from courses ");

                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['course_code'],'</p>
                                                    </div>';

                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 1 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0"> Course Title</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from courses ");

                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['course_title'],'</p>
                                                    </div>';

                                                    
                                            }
                                                
                                        }

                                ?>


                            </div>
                            <!-- Grade column 2 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Course Leader</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from courses");
                                        
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
                                    <p class="attend-nav-text m-0">Course Duration</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from courses ");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['course_duration'],'</p>
                                                    </div>';

                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 2 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Associated Modules</p>
                                </div>


                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from courses ");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                
                                                echo '<div class="border h-100 attend-std-id-col-data w-100 d-flex-center-row">
                                                <p class="attend-nav-text m-0 p-2">
                                                    <i id="', $row['course_id'],'"  class="fa fa-eye course_eye_btn " aria-hidden="true"></i>
                                                </p>
                                               </div>';

                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 2 end here -->


                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Edit / Delete</p>
                                </div>


                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from courses ");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100 attend-std-id-col-data w-100 d-flex-center-row">
                                             <p class="attend-nav-text m-0 p-2">
                                                 <i id="', $row['course_id'],'"  class="fa fa-pencil-square adm-course-edit-btn " aria-hidden="true"></i>
                                                 <i id="', $row['course_id'],'"  class="fa fa-trash adm-course-del-btn  pl-2" aria-hidden="true"></i>
                                             </p>
                                            </div>';


                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 2 end here -->


                        </div>

                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <button  class="menu_on_off_button input_btn w-max-c  "  id ="adm_add_course_btn" button_for="adm_add_course"  style="margin-top: 11px;">Add New Course</button>
                        </div>
            </div>