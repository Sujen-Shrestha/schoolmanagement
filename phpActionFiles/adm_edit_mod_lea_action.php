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
      $doj = $_POST['doj'];
      $privilege = $_POST['privilege'];
      $id =  $_POST['edit_staff_id'];
      $gender = $_POST['gender']; 
      
      $query = "UPDATE staff SET   address = '$address' ,  contact_no = '$phone' , staff_first_name = '$fname' ,
      staff_surname = '$lname' , email = '$email' , login_password  = '$pass' ,
      date_of_birth = '$dob' , date_joined = '$doj' ,
       gender = '$gender' , dormancy_reason = '$dormany' where staff_id = '$id' ";
      if ( mysqli_query( $con , $query ))
      {
        $query = "UPDATE last_button SET last_button_id='admin_module_l_btn' order by id desc limit 1";
        mysqli_query( $con , $query );
        header('Location:../admin_panel.php'); 
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