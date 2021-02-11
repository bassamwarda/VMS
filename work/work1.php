<html>
<head>
<title>التلقيحات</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head><body>
<?php
 require '../connection.php';
print_r($_POST);
if(isset($_POST['work_id']) && isset($_POST['work_person_id']) && isset($_POST['work_vaccin_name']) && isset($_POST['work_doctor']))
{
    if ($_POST['work_next_date'] > date("Y-m-d"))
    { 
            $w_id = $_POST['work_id'];
             //$w_date="CURRENT_TIMESTAMP";//date("Y-m-d");
             $w_next_date = $_POST['work_next_date'];
             $w_note = $_POST['work_note'];
             $w_pollinator_name = $_POST['work_doctor'];
             $w_pv_id = $_POST['work_person_id'];
             $w_user_id = $_POST['user_user'];
             $w_dir_id=$_POST['work_director'];
             $w_v_id= $_POST['work_vaccin_name'];
           
            //INSERT INTO `work_record`(`w_id`, `w_date`, `w_next_date`, `w_note`, `w_pollinator_name`, `w_pv_id`, `w_user_id`, `w_dir_id`, `w_v_id`) VALUES 
             $sql="";
             if (isset($_POST['add'])) {
             $sql = "INSERT INTO `work_record` values (null,CURRENT_TIMESTAMP,'$w_next_date','$w_note','$w_pollinator_name','$w_pv_id','$w_user_id','$w_dir_id','$w_v_id')";
             }
             elseif (isset($_POST['update'])) {
                 $sql ="update work_record set w_id='$w_id',w_next_date='$w_next_date',w_note='$w_note',w_pollinator_name='$w_pollinator_name',w_pv_id='$w_pv_id',w_user_id='$w_user_id',w_dir_id='$w_dir_id',w_v_id='$w_v_id' where w_id='$w_id'";
             }
             elseif (isset($_POST['delete']))
             {
                  $sql = "DELETE FROM `work_record` WHERE w_id='$w_id'";
             }
             $result = mysqli_query($con, $sql);
             if($result)
             {
                 header('location: ../work.php');
             }else
             {
                 ?>
                <div class="alert alert-info" role="alert">
                    يوجد خطأ ما يرجى المحاولة مرة اخرى
                    </div>
                <?php 
 
             }
     }else{
      echo "<br> يرجى التأكد من التاريخ القادم.<br>";   
     }
 }
 else
 { 
     echo '<!--<br> input is not set';
 } 
 
 ?>
<br>
<a href='../work.php'>Back</a>
<p class="btn btn-info btn-lg active"><a href='../work.php' style="padding:50px ;color:black;">رجوع</a></p>
</body>
</html>