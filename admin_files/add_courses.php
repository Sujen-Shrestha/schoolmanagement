

        <div id="adm_add_course" style="display: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2 pt-5">Add New Coure</h3>

                        </div>
                        <div class="h-75 w-80 pt-5 d-flex-row-align-start">
                        
                            <form action="./phpActionFiles/adm_add_course_action.php" method="post" class="register-form add-mod-l-form p-0 w-100 h-100 bg-full-b  d-flex-center-row " style="color: black;">
                                <div class=" w-50 h-100 pl-5 pr-5 pt-5"> 
                                    <label class="gender_lb"> Course Code in Numbers</label>
                                    <input name="code"  type="text" placeholder=" Enter Code"  />
                                    <label class="gender_lb"> Course Title</label>
                                    <input name="title"  type="text" placeholder="Enter Title" />
                                    <label class="gender_lb"> Select Course Leader</label>
                                    <select class="select_type" name="leader" id="">
                                        <?php
                                        
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result = mysqli_query($con , "select *from staff where privilege=1");
                                                
                                                    while($row = mysqli_fetch_array($result))
                                                    {
                                                    echo '<option value="' , $row['staff_id'],'">' , $row['staff_first_name'],' ', $row['staff_surname'],'</option>';

                                                            
                                                    }
                                                        
                                                }

                                        ?>
                                    </select>
                                

                                </div>
                                <div class=" w-50 h-100 pl-5 pr-5 pt-5 ">
                                    <label class="gender_lb"> Course Duration in years</label>
                                    <input name="duration" type="number" placeholder="Enter Duration" />
                                    <label class="gender_lb"> Add Course Without Modules, Left for now</label>
                                    <input class="pt-0 submit_button" name="submit-btn" type="submit" value="Add Course" />
                                    <label class="gender_lb mt-3"> Add Course With Modules</label>
                                    <input class="submit_button" name="submit-add-btn" type="submit" value="Add Course + Modules" />


                                </div>
                            </form>
                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <P>If you want to add modules now click on the 'Add Course + Modules' else you can skip this process for now by clicking on the 'Add Course' button.</P>

                        </div>
                    </div>