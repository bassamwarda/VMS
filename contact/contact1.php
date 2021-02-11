<html>
<head>
<title>الدوائر</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head><body>

<?php 
require "../connection.php";

if (isset ($_POST['ch_id']) and isset ($_POST['ch_message']))
{
    $con_ch_id=$_POST["ch_id"];
    $con_message=$_POST["ch_message"];

    $sql="select * from person_vaccination where p_id='$con_ch_id'";
    $result = mysqli_query($con, $sql);
    if($result)
    {      
        $row = mysqli_fetch_assoc($result) ;                                      
        if($row<=0)
        {?>
            <div class="alert alert-danger" role="alert">
			<center>
            <h1> عذراً التسلسل خطأ يرجى التأكد منه    </h1> 
			</center>
                    </div>
        <?php
        }
        else {
            $con_u_id=$row['pv_user_id'];
            

            $sql="";
            if (isset($_POST['submit'])) {
            $sql = "insert into contact values (null,'$con_ch_id','$con_message','$con_u_id')";
            }
            $result = mysqli_query($con, $sql);
            if($result)
            {
               ?>
               <div class="alert alert-success" role="alert">
                      <h1>  تم ارسال الرسالة بنجاح </h1>
                    </div>
            <?php  
                //header('location: ../contact.php');
            }else
            {
                echo '<div class="alert alert-danger" role="alert">
                <h1>  error </h1>
              </div>';

            }
        }

    }
}

?>
<br>
<center>
<p class="btn btn-info btn-lg active"><a href='../contact.php' style="padding:50px ;color:black;">رجوع</a></p>
</center>

</body>
</html>