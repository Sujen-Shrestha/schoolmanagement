

        <div id="adm_add_mod" style="display: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2 pt-5">Add Module </h3>

                        </div>
                        <div class="h-75 w-80 pt-5 d-flex-row-align-start">
                        
                            <form action="./phpActionFiles/adm_add_module_action.php" method="post" class="register-form add-mod-l-form p-0 w-100 h-100 bg-full-b  d-flex-center-row " style="color: black;">
                                <div class=" w-50 h-100 pl-5 pr-5 pt-5"> 
                                    <label class="gender_lb"> Module Code in Numbers</label>
                                    <input name="code"  type="number" placeholder="Enter Code"  />
                                    <label class="gender_lb"> Module Title</label>
                                    <input name="title"  type="text" placeholder="Enter Title" />
                                    <label class="gender_lb"> Credit Point in Numbers</label>
                                    <input name="c_point" type="number" placeholder="Enter Point" />
                                

                                </div>
                                <div class=" w-50 h-100 pl-5 pr-5 pt-5 ">
                                    <label class="gender_lb"> Module Level</label>
                                    <input name="level" type="number" placeholder="Enter Level" />
                                    <label class="gender_lb"> Edit Module only</label>
                                    <input class="pt-0 submit_button" name="submit-btn" type="submit" value="Submit Form" />
                                    <label class="gender_lb mt-3"> Edit Module with Module Leader</label>
                                    <input class="submit_button"  name="submit-add-btn"  type="submit" value="Submit Form + Add Modules Leader" />


                                </div>
                            </form>
                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <P>If you want to add modules now click on the 'Add Course + Modules' else you can skip this process for now by clicking on the 'Add Course' button.</P>
                        </div>
            </div>