<?php
require "../connection.php";
if (isset ($_POST['delete']))
{
     //echo $_POST['con_id'];
     $con_id= $_POST['con_id'];
     if (isset($_POST['delete']))
     {
          $sql = "DELETE FROM `contact` WHERE con_id='$con_id'";
     }
     $result = mysqli_query($con, $sql);
     if($result)
     {
         session_start();
        $_SESSION["message"]=intval($_SESSION["message"])-1;
         header('location: ../messages.php');
     }else
     {
        
        echo' <div class="alert alert-info" role="alert">
         يوجد خطأ ما يرجى المحاولة مرة اخرى
       
         </div>';
    }
}