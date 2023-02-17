<div id="admin_student_add" style="display: none !important;" class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2"> Students</h3>

                        </div>
                        <div class="max-h-75 h-75 overflow-auto w-90 border d-flex-row-align-start">

                            <!--  column 1 here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">First Name</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where status='provisional'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                         <p class="attend-nav-text m-0 p-2">' , $row['student_firstname'],'</p>
                                                    </div>';
                                            }
                                            
                                                
                                        }

                                ?>

                            </div>
                            <!--  column 1 end here -->

                            <!--  column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0"> Surame</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where status='provisional'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                         <p class="attend-nav-text m-0 p-2">' , $row['student_surname'],'</p>
                                                    </div>';
                                            }
                                            
                                                
                                        }

                                ?>
                                

                            </div>
                            <!--  column 2 end here -->

                            <!--  column 3 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Email</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where status='provisional'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                         <p class="attend-nav-text m-0 p-2">' , $row['email'],'</p>
                                                    </div>';
                                            }
                                            
                                                
                                        }

                                ?>

                            </div>
                            <!--  column 2 end here -->

                            <!--  column 4 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Contact</p>
                                </div>
                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where status='provisional'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                         <p class="attend-nav-text m-0 p-2">' , $row['contact_no'],'</p>
                                                    </div>';
                                            }
                                            
                                                
                                        }

                                ?>
                               

                            </div>
                            <!--  column 2 end here -->

                            <!--  column 5 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Course</p>
                                </div>
                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where status='provisional'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                         <p class="attend-nav-text m-0 p-2">' , $row['std_course'],'</p>
                                                    </div>';
                                            }
                                            
                                                
                                        }

                                ?>
                               

                            </div>
                            <!--  column 2 end here -->

                            <!--  column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0 ">Approved</p>
                                </div>
                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where status='provisional'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo '<div  class="border h-100 attend-std-id-col-data w-100 d-flex-center-row">
                                                <p class="attend-nav-text m-0 p-2">
                                                      <i  id=" ' , $row['student_id'] , ' " class="fa fa-check-circle adm-add-std-aprove" aria-hidden="true"></i>
                                                 </p>
                                                </div>';
                                            }
                                            
                                                
                                        }

                                ?>
                               
                                

                            </div>
                            <!--  column 2 end here -->

                            <!--  column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Delete</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from students where status='provisional'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo '<div  class="border h-100 attend-std-id-col-data w-100 d-flex-center-row">
                                                <p class="attend-nav-text m-0 p-2">
                                                     <i  id=" ' , $row['student_id'] , ' " class="fa fa-trash adm-del-std-aprove" aria-hidden="true"></i>
                                                 </p>
                                                </div>';
                                            }
                                            
                                                
                                        }

                                ?>
                            </div>
                            <!--  column 2 end here -->


                            

                            


                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <button class="menu_on_off_button input_btn w-max-c " button_for="admin_student" id="adm_al_live_student_btn"  style="margin-top: 11px;">All Live Students</button>
                        </div>
                    </div>