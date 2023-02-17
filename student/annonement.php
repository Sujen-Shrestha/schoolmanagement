



                <?php


session_start();
$id = $_SESSION['std_id'];


if(isset($_SESSION['mod_id']))
{
    $mod_id = $_SESSION['mod_id'];
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Panel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../mystyle.css">

</head>

<body>

    <section class="container-fluid max-height c-white">

        <div class="row main-box  max-height">

            <div class="col-lg-2  tmp_h d-flex align-content-center flex-column justify-content-center bg-dark-b position-relative">


                <?php include './menu.php';?>

            </div>

            <div class="col-lg-10  tmp_h">

                <?php include './upperNav.php';?>

                <div class="row d-flex align-items-center flex-column justify-content-center bg-full-b std-lower-nav">

   
              <!-- Announcements start here -->

                   
              <div id="admin_announc" style="dissplay: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-2 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-2 ml-2"> Announcements</h3>

                        </div>
                        <div class="m-h-75 w-100  overflow-auto d-flex align-items-center flex-column justify-content-start ">


                            
                            <?php
                            
                                include '../connection.php';
                                if($con)
                                {


                                    $result = mysqli_query($con , "select *from students where student_id = '$id'");
                                    $row = mysqli_fetch_array($result);
                                    $course_id = $row['std_course'];
                                    $count =0;
                                    $result1 = mysqli_query($con , "select *from modules where course_id = '$course_id'");
                                    
                                    $row1 = mysqli_fetch_array($result1);
                                    
                                        $staff_id = $row1['staff_id'];
                                        $result2 = mysqli_query($con , "select *from announcements where staff_id = '$staff_id'  or privilege = 0 ");

                                
                                        while($row2 = mysqli_fetch_array($result2))
                                        {
                                            echo '<div class="w-75 m-h-30 mb-3 mt-2 bg-dark-b d-flex align-items-center flex-column justify-content-around">

                                                <div class="w-100 d-flex align-items-center flex-row justify-content-around announc-title pt-2 pl-3">
                                                    <p class="m-0 mr-auto">' , $row2['title'],'</p>
                                                    
                                                    </p>
                                                </div>
                                                <div class="w-100 d-flex-start-row pt-2 pl-3 pr-3 announc-data">
                                                    <p class="m-0">' , $row2['description'],'</p>
                                                </div>
                                                <div class="w-100 d-flex-end-row pt-2 pr-3 pb-3 announc-time">
                                                    <p class="m-0" id="date_ago' , $row2['announcement_id'],'">' , $row2['date'],'</p>
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
                                            document.getElementById("date_ago' , $row2['announcement_id'],'").innerHTML = dateToHowManyAgo("' , $row2['date'],'");
                                            </script>
                                            ';

                                                
                                        }
                                    
                                        
                                }

                            ?>
                                

                        </div>

                     

                    </div>

                <!-- Announcements end here -->


                </div>

            </div>

        </div>

    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label class="label_set" style="color:black;"> Attach document</label>
        <input type="file"  id="myFile" class="after_file" name="file" placeholder="Select file" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="save_btn" parent_btn_id="" assign_id="" std_id=""  data-dismiss=""  class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./student_script.js"></script>

</body>

</html>