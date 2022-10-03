
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
</body>
</html>


<nav style="z-index: 1;" class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/smart.png"style="width:65px;height:50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kitchen</a></li>
            <li><a class="dropdown-item" href="#">Security_Cameras</a></li>
            <li><a class="dropdown-item" href="#">Smart_Pet</a></li>
            <li><a class="dropdown-item" href="#">Climate_Control</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Voice_Assistants</a></li>
          </ul>
        </li>
      
      </ul>

      <?php
      // $sel="SELECT * FROM users";
      // $query=mysqli_query($conn,$sel);
      // $result=mysqli_fetch_assoc($query);
      

      ?>

      <?php
      // echo $result['name'];?>
      
      <!-- <img src="cart3.svg " style="margin-right:10px"><h6>Cart</h6> -->
      <!-- <button class="btn btn-outline-info mx-2" type="submit"><a href="signup.php">
      Sign Up</a></button> -->
      <?php
if(empty($_SESSION['name']) || $_SESSION['name'] == ''){
    echo " <button class='btn btn-outline-info' type='submit'name=><a href='login.php'>Log In</a></button>";
}else{
  echo "<img style='width:40px; height:40px; margin-right:10px;' src='images/avatar-removebg-preview (1).png'><font color='green'><a href='userpage.php'><h5 style= margin-right:10px; >Hello  ". $_SESSION['name']. " </h5></font></a>";
}
?>
      <?php
      if(empty($_SESSION['name']) || $_SESSION['name'] == ''){
    echo "  <button class='btn btn-outline-info mx-2' type='submit'><a href='signup.php'>
    Sign Up</a></button>";
}else{
  echo "<button class='btn btn-outline-info' type='submit'><a href='logout.php'>Log Out</a></button>";
}
?>
      <!-- <button class="btn btn-outline-info" type="submit"name=><a href="login.php">Log In</a></button> -->
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>

