<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name="smart_home";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<?php
session_start();
 $id=$_SESSION['id']




?>

<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link href="./style.css" rel="stylesheet">

   <title>Document</title>
</head>
<body>
<div class="container px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders ">
        <h4 style="text-align:center;color:green">Profile</h4>
       
       
      
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
    
        <div class="col-sm-2"></div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header bg-success text-light ">Account Details</div>
                <div class="card-body">
<?php 
$query="SELECT * FROM users where id='$id'";
$conn->query($query);
if ($result = $conn->query($query) ) {
    while ($row = $result->fetch_assoc() ) {



?>

                    <form action="./Editing_Code-user.php" method="POST">
                    <img class="img-account-profile rounded-circle mb-2" src="./images.png" width="100px" height="100px" style="border-raduis:50%"> 
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1 " for="inputFirstName">Name</label>
                                <input name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="<?php echo $row['name'] ?>" >
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputMiddle name">Email</label>
                                <input  name="email"class="form-control" id="inputMiddle name" type="email" placeholder="Enter your Middle name"   value="<?php echo $row['email'] ?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Password</label>
                                <input  name="password" class="form-control" id="inputLastName" type="text" placeholder="Enter your last name"  value="<?php echo $row['password'] ?>">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                           
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Contact</label> 
                                <input name="contact"  class="form-control"  id="inputEmailAddress" type="text"  placeholder="Enter your email address"  value="<?php echo $row['contact'] ?>">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">City</label>
                            <input    name="city" class="form-control" id="inputLocation"type="text" placeholder="Enter your location" value="<?php echo $row['city'] ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Address</label>
                                <input name="address" class="form-control" id="inputPhone" type="text" placeholder="+9627777777" value="<?php echo $row['address'] ?>" >
                            </div>
                           <!-- Form Group (new password)-->
                         
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-success" type="submit" name="updateUserData">Save changes</button>
                        </form>
                        <?php
}
}
?>
                </div>
            </div>
        </div>
        <!-- <div class="col-xl-4"> -->
            <!-- Profile picture card-->
            <!-- <div class="card mb-4 mb-xl-0">
                <div class="card-header bg-dark text-light">Profile Picture</div>
                <div class="card-body text-center"> -->
                    <!-- Profile picture image-->
                    <!-- <img class="img-account-profile rounded-circle mb-2" src="" alt=""> -->
                    <!-- Profile picture help block-->
                    <!-- <div class="small font-italic text-muted mb-4">User image</div> -->
                    <!-- Profile picture upload button-->
                    <!-- <button class="btn btn-secondary" type="button">Upload new image</button> -->
                    







<!-- 
                </div>
            </div>
        </div> -->

    
    </div>
</div>
</body>
</html>