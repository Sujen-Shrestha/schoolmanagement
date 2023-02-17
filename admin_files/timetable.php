

<?php

?>

<!-- Class schedule start here -->

                    <div id="schedule" style="display: none !important;" class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-15 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50"> Class Schedule</h3>
                            <div>
                            <form action="phpActionFiles\time_table_update.php" method="post" class="login-form" style="color: black;">
                            <select class="select_type ml-3 pl-2" style="padding:5px;width:210px;" value="" name="view_time_table_id" id="view_time_table_id">
                            <?php
                                        
                                       include '../connection.php';
                                       if($con)
                                        {
                                            $result6 = mysqli_query($con , "select *from courses ");
                                        
                                            while($row6 = mysqli_fetch_array($result6))
                                            {
                                                echo'<option  value="',$row6['course_id'],'">',$row6['course_title'],'</option>'; 
                                            }
                                                
                                        }

                                        

                                ?>
                            </select>
                            <button class="attend_view_btn" type="submit" name="time_table_btn" style="background: #61717a;color: white;border: 0;padding:2px 12px 4px 16px;">View</button>
                            </form>
                            </div>

                        </div>
                        <div class="h-75 w-100  d-flex align-items-center flex-column justify-content-center ">

                            <div class="w-100 h-50 d-flex align-items-center flex-row justify-content-center">
                                
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value00' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value00" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value00" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value00" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value01' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value01" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value01" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value01" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value02' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value02" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value02" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value02" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value03' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value03" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value03" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value03" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value04' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value04" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value04" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value04" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value05' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value05" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value05" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value05" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value06' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value06" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value06" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value06" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>

                                
                            </div>

                            <div class="w-100 h-100 d-flex align-items-center flex-row justify-content-center">
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value10' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value10" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value10" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value10" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value11' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value11" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value11" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value11" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value12' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value12" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value12" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value12" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value13' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value13" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value13" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value13" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value14' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value14" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value14" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value14" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value15' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value15" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value15" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value15" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value16' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value16" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value16" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value16" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                            </div>

                            <div class="w-100 h-100 d-flex align-items-center flex-row justify-content-center">
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value20' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value20" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value20" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value20" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value21' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value21" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value21" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value21" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value22' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value22" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value22" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value22" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value23' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value23" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value23" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value23" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value24' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value24" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value24" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value24" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value25' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value25" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value25" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value25" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value26' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value26" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value26" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value26" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                            </div>

                            <div class="w-100 h-100 d-flex align-items-center flex-row justify-content-center">
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value30' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value30" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value30" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value30" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value31' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value31" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value31" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value31" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value32' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value32" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value32" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value32" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value33' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value33" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value33" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value33" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value34' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value34" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value34" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value34" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value35' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value35" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value35" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value35" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value36' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value36" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value36" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value36" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                            </div>

                            <div class="w-100 h-100 d-flex align-items-center flex-row justify-content-center">
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value40' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value40" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value40" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value40" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value41' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value41" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value41" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value41" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value42' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value42" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value42" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value42" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value43' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value43" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value43" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value43" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value44' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value44" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value44" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value44" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value45' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value45" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value45" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value45" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value46' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value46" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value46" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value46" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                            </div>

                            <div class="w-100 h-100 d-flex align-items-center flex-row justify-content-center">
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value50' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value50" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value50" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value50" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-light-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value51' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value51" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value51" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value51" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value52' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value52" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value52" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value52" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value53' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value53" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value53" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value53" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value54' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value54" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value54" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value54" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value55' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value55" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value55" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value55" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include './connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value56' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<input index="value56" cource_id="',$id,'" value="',$row6['value'],'" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                    else
                                                    {
                                                        echo'<input index="value56" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<input  index="value56" cource_id="',$id,'" value="" class="sch-p timetable w-100 h-100 bg-dark-b text-center" style="color:white;border:0;"/>'; 

                                       }
                                    ?>
                                    
                                </div>
                            </div>



                        </div>
                        <!-- <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                           

                        </div> -->
                    </div>

                    <!-- Class schedule start here -->
                    