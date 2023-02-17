<?php
session_start();
include './connection.php';
if($con)
{


    if (isset($_POST['submit-btn']))
    {

       
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $result = mysqli_query($con , "select *from students where email='$email' and login_password='$pass'");

            $row = mysqli_fetch_array($result);
            if ($row)
            {
              $_SESSION['std_id'] = $row['student_id'];
              header('Location:./student/edit_profile.php'); 
            }
            else
            {
                include './phpActionFiles/std_login_fail.php';

            }

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Student Login</title>
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
            Student Login
          </span>
      </span>

      <!-- create new student -->
      <form action="./phpActionFiles/newStudentAction.php" method="post" class="register-form" style="color: black;">
        <input name="fname"  type="text" placeholder=" First Name" />
        <input name="lname"  type="text" placeholder="Last Name" />
        <?php


            include 'connection.php';
            if($con)
            {
                echo '<select class="select_type" value="" name="cource" id="select_Cource_id">
                <option value="">Select Cource</option>';

                $result1 = mysqli_query($con , "select *from courses ");
                while($row1 = mysqli_fetch_array($result1))
                {

                    echo '<option value="' , $row1['course_id'],'">' , $row1['course_title'],'</option>';
              
                };
              echo '
              </select>';
              }
            else
            {
              
              echo " Database not connected ";
            }
              

            ?>

        <input name="email" type="text" placeholder="Email address" />
        <input name="phone" type="number" placeholder="Phone no." />
        <input name="h_add"type="text" placeholder="Home address" />
        <label class="gender_lb"> Data of birth</label>
        <input type="date" name="dob" placeholder="Date of birth" />
        <label class="gender_lb"> Attach documents</label>
        <input type="file" name="file" placeholder="Select file" />
        <span style="color: white;" class="d_flex">
          <input type="radio" name="gender" value="male"> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
        </span>
        <input class="submit_button" name="submit-btn" type="submit" value="Submit Form" />
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>

      <!-- login here -->
      <form action="#" method="post" class="login-form" style="color: black;">
        <input type="text" name="email" placeholder="Email" />
        <input type="password" name="pass" placeholder="password" />
        <input class="submit_button" name="submit-btn" type="submit" value="Submit Form" />
        <p class="message">Not registered? <a href="#">Create an account</a></p>
      </form>

    </div>
  </div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type="text/javascript" src="./script.js"></script>
  <script type="text/javascript" src="./js/myscript2.js"></script>


</body>

</html>