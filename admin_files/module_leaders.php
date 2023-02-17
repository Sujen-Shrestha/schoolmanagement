<div id="admin_module_l" style="display: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2"> Module Leaders</h3>

                        </div>
                        <div class="h-75 w-90 border flow_auto d-flex-row-align-start">

                            <!-- Grade column 1 here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0"> id</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from staff where privilege=0");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['staff_id'],'</p>
                                                    </div>';

                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 1 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0"> Name</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from staff where privilege=0");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['staff_first_name'],'</p>
                                                    </div>';

                                                    
                                            }
                                                
                                        }

                                ?>


                            </div>
                            <!-- Grade column 2 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Email</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from staff where privilege=0");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['email'],'</p>
                                                    </div>';

                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 2 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Contact</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from staff where privilege=0");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['contact_no'],'</p>
                                                    </div>';

                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 2 end here -->

                            <!-- Grade column 2 start here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">Associated Module</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from staff where privilege=0");
                                            //$found =0;
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                $tmp_di = $row['staff_id'];
                                                $result1 = mysqli_query($con , "select *from modules where staff_id='$tmp_di'");
                                                $row1 = mysqli_fetch_array($result1);
                                                if($row1)
                                                {
                                                    echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row1['module_title'],'</p>
                                                    </div>';
                                                }
                                                else
                                                {
                                                    echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">Nill</p>
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
                                    <p class="attend-nav-text m-0">Roles</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from staff where privilege=0");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['contact_no'],'</p>
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
                                            $result = mysqli_query($con , "select *from staff where privilege=0");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100 attend-std-id-col-data w-100 d-flex-center-row">
                                             <p class="attend-nav-text m-0 p-2">
                                                 <i id="', $row['staff_id'],'"  class="fa fa-pencil-square adm-mod-l-edit-btn " aria-hidden="true"></i>
                                                 <i id="', $row['staff_id'],'"  class="fa fa-trash adm-mod-l-del-btn  pl-2" aria-hidden="true"></i>
                                             </p>
                                            </div>';


                                                    
                                            }
                                                
                                        }

                                ?>

                            </div>
                            <!-- Grade column 2 end here -->

                            


                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <button class="menu_on_off_button input_btn w-max-c " button_for="admin_module_l_add"  style="margin-top: 11px;">Add Module Leader</button>
                        </div>
                    </div>