<?php


include '../connection.php';
if($con)
{

  if (isset($_POST['submit-btn']))
  {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $pass = $_POST['pass'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $t_add = $_POST['t_add'];
      $h_add = $_POST['h_add'];
      $dob = $_POST['dob'];
      $file = $_POST['file'];
      if( isset($_POST['male']))
      {
        $gender = $_POST['male'];
      }
      if( isset($_POST['female']))
      {
        $gender = $_POST['female'];
      }
      
    
      $query = "insert into students( student_firstname , email  , gender  ) values('$fname' , '$email'  , '$gender')";
      if ( mysqli_query( $con , $query ))
      {
          echo " Data entered successfully";
      }
      else
      {
          echo " Data entered fail";
      }
  }
}
else
{
  
  echo " Database not connected ";
}
  

?>