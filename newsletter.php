<?php
if(isset($_POST['subscriber_btn'])){
  $subscriber_email=$_POST['subscriber_email'];
  $subscriber_email_saved=strtolower($_POST['subscriber_email']);
  $check_subscription=mysqli_query($bil,"SELECT*FROM subscribers WHERE email='$subscriber_email_saved'");
  if(mysqli_num_rows($check_subscription) > 0){
    echo"<meta http-equiv='refresh' content='0.00005;url=./?exist&trx=".base64_encode($subscriber_email)."&#newsletter'>";
    die();
  }elseif(mysqli_num_rows($check_subscription) == 0){
    $save_subscription="INSERT INTO subscribers(email) VALUES('$subscriber_email_saved')";
    mysqli_query($bil,$save_subscription);
    echo"<meta http-equiv='refresh' content='0.00005;url=./?success&trx=".base64_encode($subscriber_email)."&#newsletter'>";
    die();
  }
}

?>