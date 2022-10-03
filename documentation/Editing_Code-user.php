<?php

// include "";
session_start();
include "./connect.php";



if(isset($_POST['updateUserData']))
{
    $user_id =$_SESSION['id'];

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

        $query = "UPDATE users SET  name='$name', email='$email',
        password='$password',contact='$contact',city='$city', address='$address' WHERE id='$user_id' ";
        $query_run = mysqli_query($conn, $query);
        header("Location: userpage.php");
      
   
 
}

?>
