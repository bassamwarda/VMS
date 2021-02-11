<html>
<head>
<title>التلقيحات</title>
</head><body>
<?php
require "../connection.php";

$uname=trim($_POST['uname']);
$u_password=trim($_POST['password']);
if (isset ($uname) and isset ($u_password ))
{
    if ( strlen($u_password) >= 3 && strlen($uname) >= 1)
    {  
        $sql="select * from user where u_name='$uname' && u_password='$u_password'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0)
        {
                $row = mysqli_fetch_assoc($result);
                session_start(); 
                $_SESSION["p_id"]=  $row["p_id"];
                $_SESSION["u_name"]=$row["u_name"];
                $_SESSION["u_password"]=$row["u_password"];
                $_SESSION["u_email"]=$row["u_email"];
                $_SESSION["u_role_id"]=$row["u_role_id"];
                $_SESSION["u_director_id"]=$row["u_director_id"];

                echo "<h1>Welcome ".$_SESSION['u_name']."</h1>";
                echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
                header('Location:../home.php');
        }
        else
        { 
            echo "<script>alert('username or password in correct')</script>";
            echo 'not faund the user ';
        }
    }
    else
    {
        echo "<br>pleace insert the userid and password again.<br>";   
    }
}
else
{ 
    echo '<br> input is not set';
} 

?>
<br>

</body>
</html>



<?php
$sql="SELECT * FROM `contact` WHERE `con_u_id`=  ".$_SESSION["p_id"];
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0)
{
    session_start(); 
    $_SESSION["message"]= mysqli_num_rows($result);
}
else
{ 
    $_SESSION["message"]= 0;
}

?>