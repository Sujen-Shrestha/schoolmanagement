

<?php

session_start();
$id = $_POST['mod_id'];
$_SESSION["edit_btn_id"] = $id;

include '../connection.php';
if($con)
{
    $query = "UPDATE last_button SET last_button_id='adm_edit_c1' order by id desc limit 1";
    mysqli_query( $con , $query );
}


?>