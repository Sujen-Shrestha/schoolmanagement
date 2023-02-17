<div id="admin_module_l_add" style="display: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2 pt-5">Add Module Leaders</h3>

                        </div>
                        <div class="h-75 w-80 pt-5 d-flex-row-align-start">
                        
                            <form action="./phpActionFiles/adm_add_mod_leader_action.php" method="post" class="register-form add-mod-l-form p-0 w-100 h-100 bg-full-b  d-flex-center-row " style="color: black;">
                                <div class=" w-50 h-100 pl-5 pr-5 pt-5"> 
                                    <input name="fname"  type="text" placeholder=" First Name"  />
                                    <input name="lname"  type="text" placeholder="SurName" />
                                    <input name="email" type="text" placeholder="Email address" />
                                    <input name="pass" type="text" placeholder="Password" />
                                    <input name="phone" type="number" placeholder="Phone no." />
                                    <input name="t_add" type="text" placeholder="Address" />
                                    
                                

                                </div>
                                <div class=" w-50 h-100 pl-5 pr-5 pt-5 ">
                                    <input name="dormany" type="text" placeholder="Dormany Reason" />
                                    <label class="gender_lb"> Data of birth</label>
                                    <input type="date" name="dob" value="45/34/5454"  placeholder="Date of birth" />
                                    <label class="gender_lb"> Data of Join</label>
                                    <input type="date" name="doj" placeholder="Date of Join" />
                                    <span style="color: white;" class="d_flex">
                                    <input type="radio" name="gender" value="male"> Male<br>
                                    <input type="radio" name="gender" value="female"> Female<br>
                                    </span>
                                    <input class="submit_button" name="submit-btn" type="submit" value="Add Module Leader" />


                                </div>
                            </form>
                        </div>
                    </div>