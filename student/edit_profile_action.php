<?php

session_start();
$id = $_SESSION['std_id'];


include '../connection.php';
if($con)
{

  if (isset($_POST['submit-btn']))
  {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $pass = $_POST['pass'];
      
      $query = "UPDATE students SET student_firstname ='$fname' , login_password='$pass', student_surname='$lname' ,email='$email' ,contact_no='$phone' WHERE student_id='$id'";
       mysqli_query( $con , $query );
    
        
        header('Location:./edit_profile.php'); 
    }
}
else
{
  
  echo " Database not connected ";
}
  

?>