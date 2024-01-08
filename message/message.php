<?php
  if(isset($_POST['submit'])){
    $text=" Name: ".$name=$_POST['name']." Email: ".$email=$_POST['email']." Subject: ".$subject=$_POST['subject']." Message: ".$message=$_POST['message']." ";
    
    $chat_id='@AMSE_lab';
    $token = "5395660536:AAG9IAn04u8dMgxupYh80nSbfed-7DEUNvE";
    $url="https://api.telegram.org/bot$token/sendMessage?text=$text&chat_id=$chat_id";
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    if(isset($result['result'])){
      echo "Thank you <?php echo $_POST["name"]; ?> for contacting us!";
    }else{
      echo "<pre>";
      print_r($result);
      echo "Something went wrong!";
    }
              $name=$_POST['name'];
              $email=$_POST['email'];
              $subject=$_POST['subject'];
              $message=$_POST['message'];
  }

  ?>