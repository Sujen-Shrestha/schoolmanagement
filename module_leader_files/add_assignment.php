<?php
session_start();
$display = "none";
include '../connection.php';
if($con)
{


    if (isset($_POST['submit-btn']))
    {
        if($_POST['title'])
        {
            $title = $_POST['title'];
            $now_date = $_POST['date_now'];
            $due_date = $_POST['date'];
            $weight = $_POST['weight'];
            $mod_id = $_SESSION['module_id'];
            $query = "INSERT INTO module_assignment ( assignment_title , posted_date , weightage , due_date ,  module_code ) VALUES ('$title' , '$now_date' , '$weight' , '$due_date' , '$mod_id')";
            mysqli_query( $con , $query );
    
            $result = mysqli_query($con , "select *from module_assignment  order by assignment_id desc limit 1 ");
            $row = mysqli_fetch_array($result);
            $content_id  = $row['assignment_id'];
    
            if (isset($_FILES))
            {
    
                foreach ($_FILES as $key => $value) 
                {
    
      
                    $tmp_name = $_FILES[$key]['name'];
                    $tmp_name = explode(" ",$tmp_name);
                    $name = '';
                    if( sizeof($tmp_name) == 0 )
                    {
                        $name = $tmp_name;
                    }
                    else
                    {
                        for ($i  =0 ; $i < sizeof($tmp_name); $i++)
                        {
                            $name = $name.$tmp_name[$i];
                        }
                    }
                    
                   // print_r($_FILES);
                    if($_FILES[$key]['size'] > 0)
                    {
                        $type = $_FILES[$key]['type'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES[$key]["name"]);
        
                        // Select file type
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
                            // Insert record
                            if($key == 'brief')
                            {
                                echo $key;
                                $query = "INSERT INTO module_assignment_files ( brief_document , assignment_id ) VALUES ( '$name' , '$content_id')";
                                mysqli_query( $con , $query );
                            }
                            else
                            {
                                echo $key;
                                $query = "INSERT INTO module_assignment_files ( other_documents , assignment_id ) VALUES ( '$name' , '$content_id')";
                                mysqli_query( $con , $query );
                            }
                            
                            
                            // Upload file
                            move_uploaded_file($_FILES[$key]['tmp_name'],'../uploads/'.$name);
                    }
    
                }

                            // creating  list of students for assignment grade

                            $result6 = mysqli_query($con , "select *from students where status='live'");
                                        
                            while($row6 = mysqli_fetch_array($result6))
                            {
                                $cource_id = $row6['std_course'];

                                $result7 = mysqli_query($con , "select *from modules where mod_id='$mod_id' and course_id='$cource_id'");
                                if($row7 = mysqli_fetch_array($result7))
                                {
                                    $std_d =  $row6['student_id'];
                                    $query = "INSERT INTO module_assignment_grade  ( assignment_id, std_id) VALUES ('$content_id' , '$std_d')";
                                    mysqli_query( $con , $query );
                                }
                             
                                    
                            }

        header('Location:./assignment.php'); 
    
            }
        }
        else
        {
            $display = "block";
        }

    }
}
else
{
  
  echo " Database not connected ";
}
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Module Leader Panel</title>

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
              <!-- Home menu  here -->
            <div class="col-lg-2  tmp_h d-flex align-content-center flex-column justify-content-center bg-dark-b position-relative">

 <!-- section 1 here -->
            <!-- Admin menu here -->
            <?php include './menu.php';?>
            <!-- Admin menu end here -->

            </div>


 <!-- section 2 here -->
            <div class="col-lg-10  tmp_h">

                <!-- date and time here -->

                    <!-- date and time here -->
                    <?php include './upper_nav.php';?>
                    <!-- lower menu start here -->

                <div class="row d-flex align-items-center flex-column justify-content-center bg-full-b std-lower-nav">



                 <!-- content start here -->

               

        <div id="adm_add_annouc" style="dissplay: none !important;"class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50 mt-3 ml-2 pt-5">Add New Assignment</h3>

                        </div>
                        <div class="h-75  flow_auto w-80 pt-5 d-flex-row-align-start">
                        

                            <form action="#" method="post" enctype="multipart/form-data" class="register-form  add-mod-l-form p-0 w-100 h-100 bg-full-b  d-flex-center-row " style="color: black;" >
                                <div class=" add_module_content w-50 h-100 pl-5 pr-5 pt-5"> 
                                    <label class="label_set"> Content Title</label>
                                    <input name="title"  type="text" placeholder="Enter Title" />
                                    <input name="date_now" id="get_time_of_add"  type="hidden"  />
                                    <label class="label_set"> Brief documents</label>
                                    <input type="file" class="" name="brief" placeholder="Select file" />
                                    <label class="label_set"> Due Date</label>
                                    <input type="date" name="date" placeholder="Date of birth" />
                                    <label class="label_set"> Weightage </label>
                                    <input name="weight"  type="text" placeholder="Enter Title" />
                                    
                                </div>
                                 <div class=" add_module_content w-50 h-100 pl-5 pr-5 pt-5"> 
                                    <div style="display:<?php echo $display; ?>;" id="alert" class="alert alert-danger" role="alert">
                                     Please fill the fields.
                                    </div>
                                    <input name="time" id="get_time_of_add"  type="hidden"  />
                                    <label class="label_set"> Necessary documents</label>
                                    <input type="file" class="after_file" name="file" placeholder="Select file" />
                                    <input class="add_document_button"  type="button" value="Add more files" placeholder="Enter Title" />
                                    <input class="pt-0 submit_button" name="submit-btn" type="submit" value="Submit" />
                                    
                                </div>
                            </form>

                            <script>
                                    const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
                                    let today = new Date();
                                    let date = today.getDate()+' '+monthNames[(today.getMonth())]+ ', ' +today.getFullYear();
                                    let time = today.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
                                    document.getElementById("get_time_of_add").value = date;
                            </script>

 
                        </div>
                    </div>
                 <!-- content end here -->




                </div>

            </div>

        </div>

    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./mod_leader.js"></script>

</body>

</html>





