
                <!-- Home menu back arrow here -->
                <div id="bk-arrow" style="dissplay: none !important;"
                    class=" bk-arow d-flex align-items-center flex-column justify-content-center">
                    <a href="./modules.php">
                    <i class="fa fa-arrow-circle-left " aria-hidden="true"></i>
                    </a>
                </div>

                <!-- Home menu 2 here -->
                <div id="menu2" style="dissplay: none !important;"
                    class="text-center d-flex align-items-center flex-column justify-content-center ">

                    <div class="h-100 w-50 border module-in-nav bg-light-w"></div>
                    <?php
                                       
                    include '../connection.php';
                    if($con)
                    {
                        $result = mysqli_query($con , "select *from modules where mod_id='$mod_id'");

                            if($row = mysqli_fetch_array($result))
                            {
                                echo'<p class="std-nav mb-5 mt-3">' , $row['module_title'],'</p>';
                            }
                            else
                            {
                                echo'<p class="std-nav mb-5 mt-3">Name Not Set</p>';
                            }

                    }

                    ?>
                    <a href="./module_content.php">
                    <p id="contant-btn" class="std-nav">Contant</p>
                    </a>
                    <a href="./assignment.php">
                    <p id="assign-btn" class="std-nav">Assignments</p>
                    </a>
                </div>