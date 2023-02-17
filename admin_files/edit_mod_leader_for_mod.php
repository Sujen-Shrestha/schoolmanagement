
                    <div id="adm_edit_mod_l_for_mod" style="display: none !important;" class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2"> List of All Available Modules Leaders</h3>

                        </div>
                        <div class="h-75 w-90 border d-flex-row-align-start">

                            <!-- Grade column 1 here -->
                            <div class="border w-100 h-10-r attend-std-id-col d-flex-center-column">

                                <div class="border h-100  attend-std-id-col-nav w-100 d-flex-center-row">
                                    <p class="attend-nav-text m-0">ID</p>
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
                                                  <p class="attend-nav-text m-0 p-2">' , $row['staff_first_name'],' ', $row['staff_surname'],'</p>
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
                                    <p class="attend-nav-text m-0"> Date of join</p>
                                </div>

                                <?php
                                       
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from staff where privilege=0");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo '<div class="border h-100  attend-std-id-col-data w-100 d-flex-center-row">
                                                  <p class="attend-nav-text m-0 p-2">' , $row['date_joined'],'</p>
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
                            <input id="temp_radio_id_save" value="" name="get_radio_id" type="hidden">

                                <p class="attend-nav-text m-0">Check</p>
                            </div>



                            <?php

                                include './connection.php';
                                if($con)
                                    {
                                        $id = $_SESSION['edit_mod_id'];
                                        $result = mysqli_query($con , "select *from staff where privilege=0");
                                    
                                        while($row = mysqli_fetch_array($result))
                                        {
                                        echo '<div class="border h-100 attend-std-id-col-data w-100 d-flex-center-row">
                                        <p class="attend-nav-text m-0 p-2">
                                            <input id="', $row['staff_id'],'"  class=" radio_bx', $row['staff_id'],' checkbox_size radio_btn_adm_edit_mod_l_in_c" type="radio" >
                                        </p>
                                        </div>';

                                                $result1 = mysqli_query($con , "select *from modules where mod_id='$id'");
                                                $row1 = mysqli_fetch_array($result1);
                                                if($row['staff_id'] == $row1['staff_id'])
                                                {
                                                    echo'<script>
                                                    $(".radio_bx', $row['staff_id'],'").attr( "checked", true );
                                                    document.getElementById("temp_radio_id_save").value = ', $row['staff_id'],';
                                                    </script>';
                                                }
                                        }
                                            
                                    }

                            ?>


                            </div>
                            <!-- Grade column 2 end here -->

                            


                        </div>

                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <form  action="./phpActionFiles/adm_edit_mod_l_for_mod_action.php" method="post" >
                                <input id="edit_mod_id_save" value="" name="get_id" type="hidden">
                                <input id="pre_mod_id_save" value="" name="pre_get_id" type="hidden">
                                <input class="submit_button m-0" name="submit-btn" type="submit" value="Submit Form" />
                                <script>
                                    let tmp3 = document.getElementById("temp_radio_id_save").value;
                                    document.getElementById("edit_mod_id_save").value = tmp3;
                                    document.getElementById("pre_mod_id_save").value = tmp3;
                            </script>
                            </form> 
                        </div>
                    </div>
