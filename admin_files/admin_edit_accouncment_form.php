

        <div id="adm_edit_ann" style="display: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2 pt-5">Add New Announcements</h3>
                        </div>
                            <?php
                                      
                                $id =  $_SESSION["edit_btn_id"];
                                include './connection.php';
                                if($con)
                                {
                                    $result = mysqli_query($con , "select *from announcements where announcement_id='$id'");
                                   
                                    $row = mysqli_fetch_array($result);
                                    echo 
                                    '
                                    <div class="h-75 w-80 pt-5 d-flex-row-align-start">
                                    
                                        <form action="./phpActionFiles/adm_edit_ann_action.php" method="post" class="register-form add-mod-l-form p-0 w-100 h-100 bg-full-b  d-flex-center-row " style="color: black;">
                                            <div class=" w-50 h-100 pl-5 pr-5 pt-5"> 
                                                <label class="gender_lb"> Announcements Title</label>
                                                <input name="title"  type="text" value="' , $row['title'],'" />
                                                <label class="gender_lb"> Announcements Message</label>
                                                <textarea id="w3review"  name="message"  rows="4" cols="50">' , $row['description'],'</textarea>
                                                <input type="hidden" name="mod_id" value="' , $row['announcement_id'],'" >
                                                <input class="pt-0 submit_button" name="submit-btn" type="submit" value="Submit" />
                                                
                                            </div>
                                        </form>
                                    </div>

                                    ';

                                }
                                 ?> 
                            
                            
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                           
                        </div>
                    </div>