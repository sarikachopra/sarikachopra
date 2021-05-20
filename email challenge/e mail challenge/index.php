<?php
if(isset($_POST['submit'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to". mysqli_connect_error());
}
$email = $_POST['email'];

$sql = "INSERT INTO `newsletter`.`newsletter` (`E-Mail`) VALUES ('$email'); ";

$to_email = $email;
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: sender email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

if ($con->query($sql) == true) {
   
}
else{
    echo "Error: $sql <br> $con->error";
}
$con->close();

}
?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <title>NewsLetter | Subscribe to recieve mail</title>
   <meta name="description" content="" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="index.css" />
</head>
<body>
   <div class="subscribe">
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
      <form action="#" method="POST">
         <input placeholder="enter your email address" type="email" id="email" name="email" required >
         <button type="submit">Subscribe</button>
      </form>
   </div>
</body>
<script>
</script>
</html>