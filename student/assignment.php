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


                <?php include './menu2.php';?>

            </div>

            <div class="col-lg-10  tmp_h">

                <?php include './upperNav.php';?>

                <div class="row d-flex align-items-center flex-column justify-content-center bg-full-b std-lower-nav">

                        <!-- assignment start here -->

                        <div id="assign" style="dissplay: none !important;"
                            class="d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                            <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                                <h3 class="w-50 mt-5 ml-2"> Assignments</h3>

                            </div>
                            <div class="h-75 w-100 flow_auto d-flex align-items-center flex-column justify-content-start ">

                            <?php
                                        
                                        include '../connection.php';
                                        if($con)
                                            {
                                                $result = mysqli_query($con , "select *from module_assignment where module_code='$mod_id'");

                                                while($row = mysqli_fetch_array($result))
                                                {
                                                    echo '
                                                    <div class="w-90 m-h-30 mb-3 p-2 bg-dark-b d-flex align-items-center flex-row justify-content-between" style="padding:25px !important;">

                                                    <div class=" w-30 h-100 d-flex align-items-center flex-column justify-content-around">
                                                    <h4 class="m-0 mb-2">' , $row['assignment_title'],'</h4>
                                                    <p class="m-0 p-0">Brief Documents</p>
                                                    <div class="position-relative d-flex align-items-center flex-column justify-content-center">';
                                                    $content_id =  $row['assignment_id'];

                                                    $result1 = mysqli_query($con , "select *from module_assignment_files where assignment_id='$content_id'");
                                                    //$count =0;
                                                    while($row1 = mysqli_fetch_array($result1))
                                                    {
                                                        echo'
                                                            <a class="m-0 under-line-hover position-relative cursor-p" style="text-decoration:none;color:#1ce61c;" target"_blank" href="../uploads/' , $row1['brief_document'],'">' , $row1['brief_document'],'</a>
                                                        ';
                                                    }
                                                    echo'
                                                            <p class="m-0 p-0">Other Documents</p>
                                                        ';
                                                    $result1 = mysqli_query($con , "select *from module_assignment_files where assignment_id='$content_id'");
                                                    while($row1 = mysqli_fetch_array($result1))
                                                    {
                                                        echo'
                                                            <a class="m-0 under-line-hover position-relative cursor-p" style="text-decoration:none;color:#1ce61c;" target"_blank" href="../uploads/' , $row1['other_documents'],'">' , $row1['other_documents'],'</a>
                                                        ';
                                                    }

                                                    echo '
                                                    </div>
                                                    </div>
                                                        <div class=" w-25 h-100  d-flex align-items-center flex-column justify-content-around">
                                                        ';
                                                        $result3 = mysqli_query($con , "select *from module_assignment_grade where assignment_id='$content_id' and std_id='$id' and submitted='Yes'");
                                                        if($row3 = mysqli_fetch_array($result3))
                                                        {
                                                            echo'<p class="m-0">Points : ',$row3['grade'],'/10</p>
                                                            <button class="input_btn w-50 upload_btn_assign" disabled="true" assign_id="',$row['assignment_id'],'" std_id="',$id,'" id="assign',$row['assignment_id'],'" data-toggle="modal" data-target="#exampleModal" type="button" style="margin-top: 11px; opacity:0.5;">SUBMITTED</button>';
                                                        }
                                                        else
                                                        {
                                                            echo'<p class="m-0">Points : 0/10</p>
                                                            <button class="input_btn w-50 upload_btn_assign" assign_id="',$row['assignment_id'],'" std_id="',$id,'" id="assign',$row['assignment_id'],'" data-toggle="modal" data-target="#exampleModal" type="button" style="margin-top: 11px;">Upload</button>';
                                                        }


                                                        echo' <p class="m-0">Due Date : ',$row['due_date'],'</p>
                                                        </div>
                                                    </div>';

                                                        
                                                }
                                                    
                                            }

                                    ?>



                            </div>
                        </div>

                        <!-- assignment end here -->


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