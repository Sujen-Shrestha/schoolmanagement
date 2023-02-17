<div id="admin_announc" style="display: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-2 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-2 ml-2"> Announcements</h3>

                        </div>
                        <div class="m-h-75 w-100  overflow-auto d-flex align-items-center flex-column justify-content-start ">


                            
                            <?php
                            
                                include './connection.php';
                                if($con)
                                {
                                    $result = mysqli_query($con , "select *from announcements ");
                                
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        echo '<div class="w-75 m-h-30 mb-3 mt-2 bg-dark-b d-flex align-items-center flex-column justify-content-around">

                                            <div class="w-100 d-flex align-items-center flex-row justify-content-around announc-title pt-2 pl-3">
                                                <p class="m-0 mr-auto">' , $row['title'],'</p>
                                                <p class="m-0 pr-5">
                                                <i id="' , $row['announcement_id'],'"  class="fa fa-pencil-square adm-anounc-edit-btn" aria-hidden="true"></i>
                                                <i id="' , $row['announcement_id'],'"  class="fa fa-trash adm-anounc-del-btn  pl-2" aria-hidden="true"></i>
                                                </p>
                                            </div>
                                            <div class="w-100 d-flex-start-row pt-2 pl-3 pr-3 announc-data">
                                                <p class="m-0">' , $row['description'],'</p>
                                            </div>
                                            <div class="w-100 d-flex-end-row pt-2 pr-3 pb-3 announc-time">
                                                <p class="m-0" id="date_ago' , $row['announcement_id'],'">' , $row['date'],'</p>
                                            </div>
                                        </div>';

                                        
                                        echo'
                                        <script>
                                        function dateToHowManyAgo(stringDate){
                                            var currDate = new Date();
                                            var diffMs=currDate.getTime() - new Date(stringDate).getTime();
                                            var sec=diffMs/1000;
                                            if(sec<60)
                                                return parseInt(sec)+" second"+(parseInt(sec)>1?"s":"")+" ago";
                                            var min=sec/60;
                                            if(min<60)
                                                return parseInt(min)+" minute"+(parseInt(min)>1?"s":"")+" ago";
                                            var h=min/60;
                                            if(h<24)
                                                return parseInt(h)+" hour"+(parseInt(h)>1?"s":"")+" ago";
                                            var d=h/24;
                                            if(d<30)
                                                return parseInt(d)+" day"+(parseInt(d)>1?"s":"")+" ago";
                                            var m=d/30;
                                            if(m<12)
                                                return parseInt(m)+" month"+(parseInt(m)>1?"s":"")+" ago";
                                            var y=m/12;
                                            return parseInt(y)+" year"+(parseInt(y)>1?"s":"")+" ago";
                                        }
                                        document.getElementById("date_ago' , $row['announcement_id'],'").innerHTML = dateToHowManyAgo("' , $row['date'],'");
                                        </script>
                                        ';

                                            
                                    }
                                        
                                }

                            ?>
                                

                        </div>

                        <div class="  pl-5 pb-3 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                         <button class="menu_on_off_button input_btn w-max-c " button_for="adm_add_annouc"  style="margin-top: 11px;">Add New Announcements</button>
                        </div>

                    </div>