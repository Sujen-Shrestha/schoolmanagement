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
      $address = $_POST['t_add'];
      $dormany = $_POST['dormany'];
      $dob = $_POST['dob'];
      $doj = $_POST['doj'];
      $privilege = $_POST['privilege'];
      $gender = $_POST['gender']; 
      
      $query = "INSERT INTO staff ( address ,  contact_no , staff_first_name , staff_surname , email , login_password , date_of_birth , date_joined , privilege , gender , dormancy_reason) 
      VALUES (  '$address', '$phone' , '$fname' , '$lname' , '$email' , '$pass' , '$dob' , '$doj' , '$privilege' , '$gender'  , '$dormany'  )";

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