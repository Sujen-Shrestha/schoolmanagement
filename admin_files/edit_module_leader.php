
                    <div id="adm-mod-l-edit" style="display: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2 pt-5">Edit Module Leaders</h3>

                        </div>
                        <div class="h-75 w-80 pt-5 d-flex-row-align-start">
                        <?php
                                      
                                      $id =  $_SESSION["edit_btn_id"];
                                       include './connection.php';
                                       if($con)
                                        {
                                            $result = mysqli_query($con , "select *from staff where staff_id='$id'");
                                            
                                            $row = mysqli_fetch_array($result);
                                            $dob = $row['date_of_birth'];
                                            $doj = $row['date_joined'];
                                            $gender = $row['gender'];
                                             echo 
                                             '
                                             
                                             <form id="edit-m-l-form" action="./phpActionFiles/adm_edit_mod_lea_action.php"  method="post" class="register-form add-mod-l-form p-0 w-100 h-100 bg-full-b  d-flex-center-row " style="color: black;">
                                             <div class=" w-50 h-100 pl-5 pr-5 ">
                                                 <label class="gender_lb"> First Name</label>
                                                 <input id="18" name="fname"  type="text" placeholder=" First Name" value="' , $row['staff_first_name'],'"/>
                                                 <label class="gender_lb"> Last Name</label>
                                                 <input name="lname"  type="text" placeholder="SurName" value="' , $row['staff_surname'],'" />
                                                 <label class="gender_lb"> Email</label>
                                                 <input name="email" type="text" placeholder="Email address" value="' , $row['email'],'" />
                                                 <label class="gender_lb"> Password</label>
                                                 <input name="pass" type="text" placeholder="Password" value="' , $row['login_password'],'" />
                                                 <label class="gender_lb"> Phone Number</label>
                                                 <input name="phone" type="number" placeholder="Phone no."  value="' , $row['contact_no'],'"/>
                                                 <input type="hidden" name="edit_staff_id" value="' , $row['staff_id'],'" >
             
                                             </div>
                                             <div class=" w-50 h-100 pl-5 pr-5  ">
                                                 <label class="gender_lb"> Address</label>
                                                 <input name="address" type="text" placeholder="Address" value="' , $row['address'],'" />
                                                 <label class="gender_lb"> Dormany Reason</label>
                                                 <input name="dormany" type="text" placeholder="Dormany Reason" value="' , $row['dormancy_reason'],'" />
                                                 <label class="gender_lb"> Data of birth</label>
                                                 <input id="adm-mod-l-edit-dob-id" type="date" name="dob" value="' , $row['date_of_birth'],'" placeholder="Date of birth" />
                                                 <label class="gender_lb"> Data of Join</label>
                                                 <input id="adm-mod-l-edit-doj-id" type="date" name="doj" value="' , $row['date_joined'],'" placeholder="Date of Join" />
                                                 <span style="color: white;" class="d_flex">
                                                 <input type="radio" id="gen_m" name="gender" value="male"> Male<br>
                                                 <input type="radio" id="gen_fe" name="gender" value="female"> Female<br>
                                                 </span>
                                                 <input class="submit_button m-0" name="submit-btn" type="submit" value="Edit Module Leader" />
                                                 <script type="text/javascript">
                                                 if("' , $gender,'" ==  "male")
                                                 {
                                                    $("#gen_m").attr( "checked", true );
                                                 }
                                                 if("' , $gender,'" ==  "female")
                                                 {
                                                    $("#gen_fe").attr( "checked", true );
                                                 }
                                                 document.getElementById("adm-mod-l-edit-dob-id").value = "' , $dob,'";
                                                 document.getElementById("adm-mod-l-edit-doj-id").value = "' , $doj,'";
                                                </script>
             
             
                                             </div>
                                         </form>
                                             
                                             ';
                                                
                                        }

                                ?> 
                            
                        </div>
                    </div>
