<?php


include '../connection.php';
if($con)
{


      $id = $_POST['cource_id'];
      $value = $_POST['txt_value'];
      $index = $_POST['index'];

      $result = mysqli_query($con , "select *from time_table where cource_id ='$id' and index_number='$index'");
                                 
        if($row = mysqli_fetch_array($result))
        {
            $query = "UPDATE time_table SET value='$value'  where cource_id='$id' and  index_number ='$index' ";
            mysqli_query( $con , $query );
            
        }
        else
        {
            $query = "INSERT INTO time_table  ( cource_id , index_number , value) VALUES ('$id' , '$index' , '$value' )";
            mysqli_query( $con , $query );
        }
  
}
else
{
  
  echo " Database not connected ";
}
  

?>