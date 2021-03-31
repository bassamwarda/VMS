
<?php

require_once 'vendor/autoload.php';
  if(isset($_POST['submit'])){
    $mobile=$_POST['mobile'];
    $message=$_POST['message'];
      $basic  = new \Vonage\Client\Credentials\Basic('a743cefd', 'uaEsq87XBwDXXFeS');
      $client = new \Vonage\Client($basic);

      $response = $client->sms()->send(
          new \Vonage\SMS\Message\SMS($mobile, 'Vaccination project', $message)
      );

      $message = $response->current();

      if ($message->getStatus() == 0) {
          echo "The message was sent successfully\n";
      } else {
          echo "The message failed with status: " . $message->getStatus() . "\n";
      }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP SMS Blast</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <h2 class="text-center">SMS form</h2>
  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="mobile">Mobile Number:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="message">Message:</label>
      <div class="col-sm-10">          
        <textarea name="message" class="form-control" placeholder="Enter message"></textarea>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10"><br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
</body>
</html>
