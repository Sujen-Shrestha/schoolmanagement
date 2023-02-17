

<?php


include '../connection.php';
if($con)
{


   // header("Content-type: application/docx");
   header("Content-type: application/vnd.ms-word");
   header("Content-Disposition: attachment;Filename=../uploads/lab 4.docx");
   
    readfile("../uploads/lab 4.docx");

}
else
{
  
  echo " Database not connected ";
}
  

?>