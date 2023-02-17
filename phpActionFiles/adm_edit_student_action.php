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
      $address = $_POST['address'];
      $dormany = $_POST['dormany'];
      $dob = $_POST['dob'];
      $id =  $_POST['edit_staff_id']; 
      $gender = $_POST['gender']; 
      $cource_id =  $_POST['cource'];
      
      $query = "UPDATE students SET student_firstname ='$fname' , student_surname ='$lname' , login_password ='$pass' 
       , email ='$email'  , contact_no ='$phone'  , home_address ='$address'  
       , dormancy_reason ='$dormany'  , date_of_birth ='$dob'  , gender='$gender' , std_course='$cource_id'  WHERE student_id='$id'";
       mysqli_query( $con , $query );
    
       
         if (isset($_POST['submit-btn']))
         {
           $query = "UPDATE last_button SET last_button_id='admin_student_btn' order by id desc limit 1";
           mysqli_query( $con , $query );
         }
         
         header('Location:../admin_panel.php'); 
       
       
  }
}
else
{
  
  echo " Database not connected ";
}
  

?>