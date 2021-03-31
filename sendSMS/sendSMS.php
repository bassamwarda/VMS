
<?php
require '../connection.php'; 
$sql='SELECT CONCAT( person.p_f_name," ",person.p_m_name," ",person.p_l_name)as "full_name",person.p_phone as"phone" FROM work_record INNER JOIN person ON person.p_id=work_record.w_pv_id AND work_record.w_next_date=  ADDDATE(CURRENT_DATE(),2)';
$result = mysqli_query($con, $sql);
if($result)
{                      
  while ($row = mysqli_fetch_assoc($result)) {
  require_once 'vendor/autoload.php';
  if(isset($row["phone"])){
    $mobile='00964750'.$row["phone"];
    $message=nl2br('عزيزي المواطن ').nl2br($row["full_name"]).' نود اعلامك بأن بعد يومين موعد التلقيح الخاص بك' ;
      $basic  = new \Vonage\Client\Credentials\Basic('a743cefd', 'uaEsq87XBwDXXFeS');
      $client = new \Vonage\Client($basic);

      $response = $client->sms()->send(new \Vonage\SMS\Message\SMS($mobile, 'Vaccination project', $message));

      $message = $response->current();

      if ($message->getStatus() == 0) {
          echo "The message was sent successfully\n";
      } else {
          echo "The message failed with status: " . $message->getStatus() . "\n";
      }

}
}
}else
{
    echo 'error';
}
?>

</body>
</html>
