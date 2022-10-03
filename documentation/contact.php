
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
$ErrMsg = '';
if (isset($_POST['sendMsg'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mwssage = $_POST['message'];
  if (empty($name) || empty($email) || empty($message)) {
    $ErrMsg = 'Please Fill All Fields';
  } else {
    $ErrMsg = '';
    // Insert Queiry
  }
}


?>

<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Jordan,Amman</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">0096277887757</div>
          <div class="text-two">0096279887756</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Get In Touch</div>
        <p>We Love Hearing From You. If you have any quessions or notices you can reach us any time by filling this form</p>

        <form action="about.php" method="POST">
          <div class="input-box">
            <input type="text" name="name" placeholder="Enter your name">
          </div>
          <div class="input-box">
            <input type="email" name="email" placeholder="Enter your email">
          </div>
          <div class="input-box message-box">
            <textarea placeholder="Enter your message" name="message"></textarea>
          </div>
          <div class="button">
            <input type="button" name="sendMsg" id="sendBtn" value="Send Now">
          </div>
          <div class="errMsg"><?php echo $ErrMsg ?></div>
        </form>
      </div>
    </div>
  </div>


</body>

</html>