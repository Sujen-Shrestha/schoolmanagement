<?php
session_start();
include './connection.php';
if($con)
{


    if (isset($_POST['submit-btn']))
    {

       
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $result = mysqli_query($con , "select *from staff where email='$email' and login_password='$pass' and privilege = 0");

            $row = mysqli_fetch_array($result);
            if ($row)
            {
              $_SESSION['mod_leader_id'] = $row['staff_id'];
              $id = $row['staff_id'];
              $result1 = mysqli_query($con , "select *from modules where staff_id='$id'");
              $row1 = mysqli_fetch_array($result1);
              $_SESSION['module_id'] = $row1['mod_id'];
              header('Location:./module_leader_files/home.php'); 
            }
            else
            {
                include './phpActionFiles/mod_l_login_fail.php';

            }

    }

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Module Leader Login</title>
  <link rel="stylesheet" href="./style.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="./mystyle.css">

</head>

<body >
  <!-- partial:index.partial.html -->
  <div class=" w-100 m-h-100 bg-full-b pt-160px">

    <div class="form bg-dark-b mt-5 col c-white">
      <span class="d_flex">
          <img style="    width: 196px;margin-bottom: 37px;" src="img/logo_lg.jpg">
          <span class="login_heading">
            Moduler Leader
          </span>
      </span>

      <form action="#" method="post" class="login-form" style="color: black;">
        <input type="text" name="email" placeholder="Email" />
        <input type="password" name="pass" placeholder="password" />
        <input class="submit_button" name="submit-btn" type="submit" value="Submit Form" />
      </form>
    </div>
  </div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type="text/javascript" src="./js/myscript2.js"></script>
  <script type="text/javascript" src="./script.js"></script>


</body>

</html>