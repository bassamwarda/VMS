<html>
<head>
<title>التلقيحات</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head><body>
<?php
 require '../connection.php';
if(isset($_POST['user_f_name']) && isset($_POST['user_m_name']) && isset($_POST['user_l_name']) && isset($_POST['user_birthday']))
{
    if ($_POST['user_birthday'] <= date("Y-m-d"))
    { 
            $p_id = $_POST['user_id']; 
            $p_f_name = $_POST['user_f_name'];
            $p_m_name = $_POST['user_m_name'];
            $p_l_name = $_POST['user_l_name'];
            
            $p_birthday = $_POST['user_birthday'];
            $p_gender = $_POST['user_gender'];
            $p_phone = $_POST['user_phone'];
            $p_city = $_POST['user_city'];
            $p_region = $_POST['user_region'];
            $p_street = $_POST['user_street'];            
            //--------------------------------            
            $u_name=$_POST['user_name'];
            $u_password=$_POST['user_password'];
            $u_email = $_POST['user_email'];
            $u_role_id=$_POST['user_role'];
            $u_id = $_POST['user_user'];
            $u_director_id=$_POST['user_director'];

            if (isset($_POST['add'])) {
                $sql = "insert into person values (null,'$p_f_name','$p_m_name','$p_l_name','$p_birthday','$p_gender','$p_phone','$p_city','$p_region','$p_street')";
                if($con->query($sql))
                {                    
                     $pid = $con->insert_id;
                     echo $pid;
                    $sql2 = "insert into user values ($pid,'$u_name','$u_password','$u_email','$u_role_id','$u_id','$u_director_id')";
                    if($con->multi_query($sql2))
                      {  echo "Record Saved";
                         header('location: ../user.php');
                      }
                    else{
                        $sql = "DELETE FROM `person` WHERE p_id='$pid'";
                        $result2 = mysqli_query($con, $sql);
                        if($result2)
                        {echo "Record Saved2";
                            header('location: ../user.php');
                        }else
                        {
                            ?>
                            <div class="alert alert-info" role="alert">
                            يوجد خطأ ما يرجى المحاولة مرة اخرى
    
                            </div>
                    <?php            
                        }
                    }
                    
                }else
                {
                  echo "Saved is failed ";
                }
            }              
            elseif (isset($_POST['update'])) {

                $sql2 = "UPDATE `person`,`user` SET  person.`p_f_name`='$p_f_name',person.`p_m_name`='$p_m_name',person.`p_l_name`='$p_l_name',person.`p_birthday`='$p_birthday',person.`p_gender`='$p_gender',person.`p_phone`='$p_phone',person.`p_city`='$p_city',person.`p_region`='$p_region',person.`p_street`='$p_street',user.`u_name`='$u_name',user.`u_password`='$u_password',user.`u_email`='$u_email',user.`u_role_id`='$u_role_id',user.`u_id`='$u_id',user.`u_director_id`='$u_director_id' WHERE person.p_id='$p_id ' AND user.p_id='$p_id '";
                $result2 = mysqli_query($con, $sql2);
                if($result2)
                {
                    header('location: ../user.php');
                }else
                {
                    ?>
                        <div class="alert alert-info" role="alert">
                        يوجد خطأ ما يرجى المحاولة مرة اخرى
                        </div>
                <?php  
                }
            }
            elseif (isset($_POST['delete']))
            {
                 $sql = "DELETE FROM `person` WHERE p_id='$p_id'";
                 $result2 = mysqli_query($con, $sql);
                 if($result2)
                {                   
                    header('location: ../user.php');
                }else
                {
                ?>
                        <div class="alert alert-info" role="alert">
                        لا يمكن حذف هذا العنصر لان لديه معلومات تستند عليه
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
<p class="btn btn-info btn-lg active"><a href='../user.php' style="padding:50px ;color:black;">رجوع</a></p>
</body>
</html>