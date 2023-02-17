

        <div id="adm_add_annouc" style="display: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2 pt-5">Add New Announcements</h3>

                        </div>
                        <div class="h-75 w-80 pt-5 d-flex-row-align-start">
                        

                            <form action="./phpActionFiles/add_connoc_action.php" method="post" class="register-form add-mod-l-form p-0 w-100 h-100 bg-full-b  d-flex-center-row " style="color: black;">
                                <div class=" w-50 h-100 pl-5 pr-5 pt-5"> 
                                    <label class="gender_lb"> Announcements Title</label>
                                    <input name="title"  type="text" placeholder="Enter Title" />
                                    <select class="select_type" value="" name="for">
                                        <option >Announcements For</option>
                                        <option value="0">Students</option>
                                        <option value="1">Module Leader</option>
                                    </select>
                                    <input name="time" id="get_time" type="hidden" placeholder="" />
                                    <label class="gender_lb"> Announcements Message</label>
                                    <textarea id="w3review"  name="message" rows="4" cols="50"></textarea>
                                    <input class="pt-0 submit_button" name="submit-btn" type="submit" value="Submit" />
                                    
                                </div>
                            </form>

                            <script>
                                var today = new Date();
                                var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                                var CurrentDateTime = date+' '+time;
                                document.getElementById("get_time").value = CurrentDateTime;
                            </script> 
                        </div>
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                           
                        </div>
                    </div>