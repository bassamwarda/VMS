<html>
<head>
<title>الدوائر</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head><body>

<?php 
require "../connection.php";
if (isset ($_POST['dirc_name']) and isset ($_POST['dirc_sector'] ) and isset ($_POST['dirc_center']))
{
    if ( (int)$_POST['dirc_id'] > 0)
    {  
          $dir_id=$_POST['dirc_id'];            
            $dir_sector_name=$_POST['dirc_sector'];
            $dir_directorate_name=$_POST['dirc_name'];
            $dir_center_name=$_POST['dirc_center'];


            $sql="";
            if (isset($_POST['add'])) {
            $sql = "insert into directoration values (null,'$dir_sector_name','$dir_directorate_name','$dir_center_name')";
            }
            elseif (isset($_POST['update'])) {
                $sql ="update directoration set dir_sector_name='$dir_sector_name',dir_directorate_name='$dir_directorate_name',dir_center_name='$dir_center_name' where dir_id='$dir_id'";
            }
            elseif (isset($_POST['delete']))
            {
                 $sql = "DELETE FROM `directoration` WHERE dir_id='$dir_id'";
            }
            $result = mysqli_query($con, $sql);
            if($result)
            {
                header('location: ../directorate.php');
            }else
            {
                ?>
                <div class="alert alert-info" role="alert">
                يوجد خطأ ما يرجى المحاولة مرة اخرى
                لانه لا يمكن حذف بعض العناصر لان لديهم معلومات تستند عليها في مكان اخر.
                </div>
            <?php 

            }
    }else{
     echo "<br> an value is negative please enter the posativ number.<br>";   
    }
}
else
{ 
    echo '<!--<br> input is not set';
} 

?>
<br>
<p class="btn btn-info btn-lg active"><a href='../directorate.php' style="padding:50px ;color:black;">رجوع</a></p>
</body>
</html>