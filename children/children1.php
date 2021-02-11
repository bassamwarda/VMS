<html>
<head>
<title>التلقيحات</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

   
</head><body>
<?php
require "../connection.php";

if(isset($_POST['ch_f_name']) && isset($_POST['ch_m_name']) && isset($_POST['ch_l_name']) && isset($_POST['ch_birthday']))
{
    if ($_POST['ch_birthday'] <= date("Y-m-d"))
    {     
            $p_id = $_POST['ch_id']; 
            $p_f_name = $_POST['ch_f_name'];
            $p_m_name = $_POST['ch_m_name'];
            $p_l_name = $_POST['ch_l_name'];
            $p_birthday = $_POST['ch_birthday'];
            $p_gender = $_POST['ch_gendar'];
            $p_phone = $_POST['ch_phone'];
            $p_city = $_POST['ch_city'];
            $p_region = $_POST['ch_region'];
            $p_street = $_POST['ch_street'];
            //--------------------------------
            $pv_nationality = $_POST['ch_national'];
            $pv_m_f_name = $_POST['ch_mf_name']; 
            $pv_m_m_name = $_POST['ch_mm_name'];
            $pv_m_l_name = $_POST['ch_ml_name'];
            //$pv_today_date=auto
            $pv_user_id = $_POST['ch_user'];
            $pv_direct_id=$_POST['ch_director'];

            if (isset($_POST['add'])) {
                $sql = "insert into person values (null,'$p_f_name','$p_m_name','$p_l_name','$p_birthday','$p_gender','$p_phone','$p_city','$p_region','$p_street')";
                if($con->query($sql))
                {                    
                     $pid = $con->insert_id;
                     echo $pid;
                    $sql2 = "insert into person_vaccination values ($pid,'$pv_nationality','$pv_m_f_name','$pv_m_m_name','$pv_m_l_name',CURRENT_TIMESTAMP,'$pv_user_id','$pv_direct_id')";
                    if($con->multi_query($sql2))
                      {  echo "Record Saved";
                        //  header('location: ../children.php');
                      }
                      else{
                        $sql = "DELETE FROM `person` WHERE p_id='$pid'";
                        $result2 = mysqli_query($con, $sql);
                        if($result2)
                        {echo "Record Saved2";
                            // header('location: ../children.php');
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

                $sql2 = "UPDATE `person`,`person_vaccination` SET  person.`p_f_name`='$p_f_name',person.`p_m_name`='$p_m_name',person.`p_l_name`='$p_l_name',person.`p_birthday`='$p_birthday',person.`p_gender`='$p_gender',person.`p_phone`='$p_phone',person.`p_city`='$p_city',person.`p_region`='$p_region',person.`p_street`='$p_street',person_vaccination.`pv_nationality`='$pv_nationality',person_vaccination.`pv_m_f_name`='$pv_m_f_name',person_vaccination.`pv_m_m_name`='$pv_m_m_name',person_vaccination.`pv_m_l_name`='$pv_m_l_name',person_vaccination.`pv_today_date`=CURRENT_TIMESTAMP,person_vaccination.`pv_user_id`='$pv_user_id',person_vaccination.`pv_direct_id`='$pv_direct_id' WHERE person.p_id='$p_id ' AND person_vaccination.p_id='$p_id '";
                $result2 = mysqli_query($con, $sql2);
                if($result2)
                {
                    echo 'the request is successful...';
                    header('location: ../children.php');
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
                    header('location: ../children.php');
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
<p class="btn btn-info btn-lg active"><a href='../children.php' style="padding:50px ;color:black;">رجوع</a></p>
</body>
</html>