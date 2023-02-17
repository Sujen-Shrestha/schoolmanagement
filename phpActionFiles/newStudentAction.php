<?php


include '../connection.php';
if($con)
{

  if (isset($_POST['submit-btn']))
  {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $cource_id = $_POST['cource'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $h_add = $_POST['h_add'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender']; 

    
      $query = "insert into students( student_firstname , student_surname , std_course ,  email , contact_no , home_address, date_of_birth , gender  , status ) values('$fname' , '$lname'  , '$cource_id' , '$email' , '$phone'  , '$h_add' , '$dob' , '$gender' , 'provisional' )";
      if ( mysqli_query( $con , $query ))
      {
        include './sign_up_success.php';


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