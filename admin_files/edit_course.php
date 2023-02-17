

        <div id="admin_adit_course" style="display: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2"> Modules Associated With <?php
                                       

                                       $id = $_SESSION["edit_btn_id"];

                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from courses where course_id = '$id'");
                                        
                                            while($row = mysqli_fetch_array($result))
                                            {
                                             echo  $row['course_title'];

                                                    
                                            }
                                                
                                        }

                                ?></h3>

                        </div>
                        <div class="h-75 w-80 pt-5 d-flex-row-align-start">
                        
                        <?php
                                      
                                      $id =  $_SESSION["edit_btn_id"];
                                      
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from courses where 	course_id='$id'");
                                            $date = "2013-03-03";
                                            $row = mysqli_fetch_array($result);

                                            $staff_id = $row['staff_id'];
                                             echo 
                                             '
                                             
                                             <form id="admin_edit_c" action="./phpActionFiles/adm_edit_course_action.php"  method="post" class="register-form add-mod-l-form p-0 w-100 h-100 bg-full-b  d-flex-center-row " style="color: black;">
                                             <div class=" w-50 h-100 pl-5 pr-5 ">
                                                 <label class="gender_lb"> course Code</label>
                                                 <input id="18" name="course_code"  type="text"  value="' , $row['course_code'],'"/>
                                                 <label class="gender_lb">Course Title</label>
                                                 <input name="course_title" type="text"  value="' , $row['course_title'],'" />
                                                
                                                 <label class="gender_lb">course duration</label>
                                                 <input name="course_duration" type="number"   value="' , $row['course_duration'],'"/>
                                                 <input type="hidden" name="edit_course_id" value="' , $row['course_id'],'" >
                                                 <label class="gender_lb"> Select Course Leader</label>
                                                 ';
                                                 echo '<select class="select_type" value="" name="leader" id="select_leader_id">';

                                                 $result1 = mysqli_query($con , "select *from staff where privilege=1");
                                                    $count = -1;
                                                    $foundat = -1;
                                                    $value = 0;
                                                    while($row1 = mysqli_fetch_array($result1))
                                                    {
                                                        $count++;
                                                        if($row1['staff_id'] == $staff_id )
                                                        {
                                                            $foundat = $count;
                                                            $value = $row1['staff_id'];
                                                        }
                                                        echo '<option value="' , $row1['staff_id'],'">' , $row1['staff_first_name'],' ', $row1['staff_surname'],'</option>';

                                                            
                                                    };

                                                    echo ' </select></div>
                                                    <div class=" w-50 h-100 pl-5 pr-5 pt-5 ">
                                                    <label class="gender_lb"> Edit Course Without Modules, Left for now</label>
                                                    <input class="pt-0 submit_button" name="submit-btn" type="submit" value="Edit Course" />
                                                    <label class="gender_lb mt-3"> Edit Course With Modules</label>
                                                    <input class="submit_button" name="submit-add-btn" type="submit" value="Edit Course + Modules" />
                
                
                                                </div>
                                            </form>
                                            <script>
                                            document.getElementById("select_leader_id").selectedIndex = ' , $foundat,';
                                            document.getElementById("select_leader_id").value = ' , $value,';
                                            </script>
                                    ';
                                             
                                             
                                                
                                        }

                                ?> 
                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <P>If you want to edit modules also click on the 'Submit Form + Edit Modules' else you can skip this process for now by clicking on the 'Submit Form' button.</P>

                        </div>
                    </div>