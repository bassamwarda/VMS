<html>
<head>
<title>التلقيحات</title>      
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head><body>


<?php


//work with posted data
//print_r($_POST);
//_______________________________________________________________________________________________________________
/*$keys = array_keys($_POST);
for($i=0; $i < count($keys); ++$i) {
    echo $keys[$i] . ' ' . $_POST[$keys[$i]] . "<br>";
}

echo "<br>";
//print_r($_GET);*/
//echo $_POST['vacc_no'];  

if (isset ($_POST['vacc_age']) and isset ($_POST['vacc_name'] ) and isset ($_POST['vacc_no']) and isset ($_POST['vacc_user'] ))
{
    if ( (int)$_POST['vacc_no'] > 0 && (int)$_POST['vacc_age'] >= 0 && (int)$_POST['vacc_user'] > 0)
    {  
      
      $con=mysqli_connect('localhost','root','','vms_db');
        if(mysqli_connect_errno())
        {
             echo "failed to connect".mysqli_connect_error();
            exit();
        }else
        {
            $v_id=$_POST['vacc_id'];
            $v_right_age=$_POST['vacc_age'];
            $v_vaccination_name=$_POST['vacc_name'];
            $v_dosing=$_POST['vacc_no'];
            $v_user_id=$_POST['vacc_user'];

            $sql="";
            if (isset($_POST['add'])) {
            $sql = "insert into vaccination values (null,'$v_right_age','$v_vaccination_name','$v_dosing','$v_user_id')";
            }
            elseif (isset($_POST['update'])) {
                $sql = "update vaccination set v_right_age = '$v_right_age',v_vaccination_name='$v_vaccination_name',v_dosing='$v_dosing',v_user_id='$v_user_id' where v_id='$v_id'";
            }
            elseif (isset($_POST['delete']))
            {
                 $sql = "DELETE FROM `vaccination` WHERE v_id='$v_id'";
            }
            $result = mysqli_query($con, $sql);
            if($result)
            {
                header('location: ../vaccin.php');
            }else
            {
                ?>
                    <div class="alert alert-info" role="alert">
                    يوجد خطأ ما يرجى المحاولة مرة اخرى
                لانه لا يمكن حذف بعض العناصر لان لديهم معلومات تستند عليها في مكان اخر.
                    </div>
                <?php 
            }
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
<p class="btn btn-info btn-lg active"><a href='../vaccin.php' style="padding:50px ;color:black;">رجوع</a></p>
</body>
</html>