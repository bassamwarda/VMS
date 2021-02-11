‎<?php
$host="localhost";
$user="root";
$password="";
$database="vms_db";
$con= mysqli_connect($host, $user, $password, $database);
if(mysqli_connect_errno())
{
    die("failed to connect".mysqli_connect_error());
    // echo "failed to connect".mysqli_connect_error();
    exit();
}/*else
{
    echo"connected<br>"; 
}
*/
function selectmaxid($tableid,$tablename)
{
   	if (!is_null($tableid) && !is_null($tablename)) 
   	{   	
      global $con;
        //this code is for selected the new id 
            $sqlid = "select max($tableid)+1 from $tablename";
            $res = mysqli_query($con, $sqlid);
            if($rowid = mysqli_fetch_assoc($res))
            {
                return $rowid["max($tableid)+1"]; ;   
            }else
            {
                return 0;
            }
            mysql_free_result($res);
    }   
        // end of selected id 
}
?>‎
