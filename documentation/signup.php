<?php

session_start();
session_unset();
session_destroy();
?>

<?php
include "./connect.php";
include "headertest.php"?>


<?php
/////php validation

$email = $name  = $mobile =$address= $password = $passwordConfirm = null;
$emailErr = $nameErr = $mobileErr =$addressErr= $passwordErr = $passwordConfirmErr = null;
$note = null;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
// if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $nameErr = " name required";
    }
    // else if(!preg_match("/^([a-zA-Z' ]+)$/",$_POST['name'])){
    //     echo 'writ full name ';
    // }
     else {
        $name = $_POST['name'];
    } 

    if (empty($_POST['email'])) {
        $emailErr = " email required";
    }else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { // check if e-mail address is well-formed
        $emailErr = "invalid email";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['phone'])) { 
         $mobileErr = "mobile required";
    }
    else if (strlen($_POST['phone']) != 10) {
    $mobileErr = "Should be 10 digits ";
    } else {
    $mobile = $_POST['phone'];
    }



    if (empty($_POST['address'])) { 
         $addressErr = "address required";
    }
  else {
    $address = $_POST['address'];
    }



 
    $password = $_POST['password'];
    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    if (empty($_POST['password'])) {
            $passwordErr = "password required";
        }
    else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $passwordErr = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }else{
        // echo 'Strong password.'; 
        $password=$_POST['password'];
    }
    
    if (empty($_POST['checkpass'])) {
        $passwordConfirmErr = "confirm password";
    }
    if ($_POST['password'] != $_POST['checkpass']) {
       $passwordConfirmErr = "not match";
    } else {
        $passwordConfirm = $_POST['password'];
    }

//insert user data to database 
// if(isset($_POST['submit'])) {
    if ( isset($name)  &&isset($email) && isset($mobile)&& isset($address)  && isset($password)&& isset($passwordConfirm) ) {
     
     //Avoiding duplicate emails
        $checkUser="SELECT * FROM users where email='$email'";
       $result=mysqli_query($conn, $checkUser);
       $count=mysqli_num_rows($result);
       if($count>0){
        echo"<b>Email is already signed up, use another one</b>";
       }
       else{
        $note = "Registered Successfully";
        $sql = "INSERT INTO users(name,	email, contact , address ,password) 
        VALUES('$name','$email','$mobile','$address','$password')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        mysqli_close($conn);
        header("location:login.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

       }
       
        

    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
   <style>
     <?php include 'css/signup.css'; ?>
   </style>
   
</head>

<body>

    <div  class="containerc">
        <!-- <img src="f.jpg" style="width:400px;height:400px"> -->
    <form  name="myForm" id="sign-up" method="post" >
       
        <h3 style="text-align:center ">Sign Up</h3>
        <h6 style="text-align:center ;" class="create">Create an account,it's free</h6>
     
        <label for="name" class="form-label "><b>Name:</b></label>
        
        <input type="text"  autofocus name="name" id="name" />
          <span class="err">
                <?php
                if (isset($nameErr)) {
                    echo  $nameErr;
                }
                ?>
            </span>
            <div id="zero" class="err"></div><br />
      
     
        
        <label for="mail" >Email </label>
        <input   id="email" name="email"  />
          <span class="err">
                <?php
                if (isset($emailErr)) {
                    echo  $emailErr;
                }
                ?>
            </span> 
            <div id="one" class="err"></div><br />
     
        
        <label for="phone">Mobile </label>
        <input type="number"  name="phone" id="phone">
         <span class="err">
                <?php
                if (isset($mobileErr)) {
                    echo  $mobileErr;
                }
                ?>
            </span>
            <div id="two" class="err"></div><br />

        <label for="address">Address </label>
        <input type="text"  name="address" id="address">
         <span class="err">
                <?php
                if (isset($addressErr)) {
                    echo  $addressErr;
                }
                ?>
            </span>
            <div id="two" class="err"></div><br />
       

    
       
       

        <label for="password"> Password </label>
        <input type="password" id= "pass"  name="password"  autocomplete="current-password"/>
        <span class="err">
                <?php
                if (isset($passwordErr)) {
                    echo  $passwordErr;
                }
                ?>
            </span> 
            <div id="three" class="err"></div><br /> 
       
         <label for="chekpass"> confirm Password </label>
        <input type="password" id= "password2"  name="checkpass"  autocomplete="current-password" onkeyup="checkPassword(); "/>
        <span class="err">
                <?php
                if (isset($passwordConfirmErr)) {
                    echo  $passwordConfirmErr;
                }
                ?>
            </span>
             <div id="pw2_check"class="err"></div>  <br />
         
    
          <!-- success login message -->
             <span class="error">
            <?php
            if (isset($note)) {
                echo "* " . $note;
            }
            ?>
        </span>
        <input id="submitBtn" class="signForm" type="submit" value="SIGN UP " name="submit"/><br />
        <a class="forget" href="./login.php" >already have an account? <b>log in</b></a>
        <div id="invalid"></div>

       </div>
      </form>
    </div>
  </div>
<script src="./js/signup.js"></script>
   


</body>
</html>