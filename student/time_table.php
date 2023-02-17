<?php


session_start();
$id = $_SESSION['std_id'];
include '../connection.php';


if($con)
{


    $result = mysqli_query($con , "select *from students where student_id='$id'");

            $row = mysqli_fetch_array($result);
            if ($row)
            {
                $_SESSION['timetabel_view_id'] = $row['std_course'];
            }


    if (isset($_POST['submit']))
    {

          if (isset($_FILES))
          {
  
  
    
          
                  $tmp_name = $_FILES['file']['name'];
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
                  
                  print_r($_FILES);
                  if($_FILES['file']['size'] > 0)
                  {
                      $type = $_FILES['file']['type'];
                      $target_dir = "../uploads/";
                      $target_file = $target_dir . basename($_FILES['file']["name"]);
      
                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
                      if( $imageFileType == "jpeg" ||  $imageFileType == "jpg" || $imageFileType == "png" )
                      {

                        $query = "UPDATE students SET profile_photo ='$name' WHERE student_id='$id'";
                       mysqli_query( $con , $query );
                    
                        
                          
                          // Upload file
                       move_uploaded_file($_FILES['file']['tmp_name'],'../uploads/'.$name);
                       header('Location:./edit_profile.php'); 

                      }
                       
                  }

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



<!-- Class schedule start here -->

<div id="schedule" style="dissplay: none !important;" class="menu_on_off d-flex align-items-center flex-column justify-content-start  w-100 h-100">
                        <div class=" p-5 h-15 w-100  d-flex align-items-start flex-column justify-content-center ">
                            <h3 class="w-50"> Class Schedule</h3>
                            

                        </div>
                        <div class="h-75 w-100  d-flex align-items-center flex-column justify-content-center ">

                            <div class="w-100 h-50 d-flex align-items-center flex-row justify-content-center">
                                
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value00' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                        echo'<div class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value01' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value01" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value01" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value01" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value02' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value02" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value02" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value02" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value03' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value03" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value03" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value03" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value04' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value04" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value04" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value04" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value05' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value05" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value05" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value05" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value06' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value06" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value06" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value06" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

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
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value10' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value10" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value10" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value10" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value11' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value11" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value11" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value11" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value12' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value12" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value12" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value12" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value13' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value13" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value13" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value13" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value14' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value14" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value14" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value14" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value15' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value15" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value15" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value15" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value16' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value16" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value16" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value16" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

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
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value20' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value20" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';
                                                        

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value20" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value20" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value21' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value21" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value21" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value21" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value22' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value22" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value22" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value22" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value23' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value23" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value23" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value23" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value24' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value24" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value24" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value24" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value25' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value25" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value25" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value25" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value26' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value26" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value26" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value26" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

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
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value30' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value30" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value30" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value30" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value31' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value31" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value31" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value31" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value32' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value32" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value32" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value32" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value33' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value33" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value33" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value33" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value34' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value34" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value34" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value34" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value35' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value35" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value35" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value35" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value36' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value36" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value36" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value36" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

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
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value40' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value40" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value40" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value40" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value41' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value41" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value41" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value41" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value42' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value42" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value42" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value42" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value43' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value43" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value43" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value43" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value44' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value44" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value44" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value44" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value45' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value45" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value45" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value45" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value46' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value46" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value46" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value46" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

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
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value50' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value50" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value50" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value50" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value51' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value51" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value51" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value51" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value52' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value52" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value52" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value52" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value53' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value53" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value53" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value53" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value54' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value54" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value54" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value54" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value55' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value55" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value55" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value55" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                                <div class="border w-15 h-10 d-flex align-items-center flex-row justify-content-center m-0">
                                    <?php
                                       
                                       if( isset($_SESSION['timetabel_view_id']) )
                                       {
                                            $id =  $_SESSION['timetabel_view_id'];
                                            include '../connection.php';
                                            if($con)
                                                {
                                                    $result6 = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='value56' ");
                                                
                                                    if($row6 = mysqli_fetch_array($result6))
                                                    {
                                                        echo'<div index="value56" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p">',$row6['value'],'</p></div>';

                                                    }
                                                    else
                                                    {
                                                        echo'<div index="value56" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                                    }
                                                        
                                                }
                                       }
                                       else
                                       {
                                            echo'<div index="value56" class=" bg-light-b w-100 h-100 text-center d-flex-center-row"><p class="sch-p"></p></div>';

                                       }
                                    ?>
                                    
                                </div>
                            </div>



                        </div>
                        <!-- <div class=" p-5 h-13 w-100  d-flex align-items-start flex-column justify-content-center ">
                           

                        </div> -->
                    </div>

                    <!-- Class schedule start here -->
                    


            </div>

        </div>

        </div>

    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="#" enctype="multipart/form-data" method="post">
      <div class="modal-body">
        <input type="file"  id="myFile" class="after_file" name="file" placeholder="Select file" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="save_btn"  data-dismiss=""  class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./student_script.js"></script>

</body>

</html>