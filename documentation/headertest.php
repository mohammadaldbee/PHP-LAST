<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Header</title>
</head>
<style>
    header .navbar {
        padding: 25px;
        background-color: #f8f8f8;


    }

    .navbar-nav1,
    .navbar-nav2 {
        flex-direction: row;
    }

    .btn3 {
        color: black;
        border: none;
    }

    .btn3:hover {
        color: black;
        border-bottom: 1px solid #7e107e;
        border-radius: 0px;
    }

    .btn1 {
        color: white;
        background-color: rgb(238, 109, 3);
    }

    .btn1:hover {
        color: black;
    }

    .btn2 {
        color: #7e107e;
    }

    .btn2:hover {
        color: black;
    }

    @media screen and (max-width:950px) {
        .navbar .container-fluid {
            flex-direction: column;
        }
    }

    @media screen and (max-width:500px) {
        .navbar .container-fluid div {
            flex-direction: column;
        }
    }
</style>

<body>
    <header>
        <nav class="navbar ">
            <div class="container-fluid">
                <img src="logo-removebg-preview_2.png" style="width: 90px; height: 70px;">
                <div class="nav navbar-nav1">
                    <a href="index.php" class="btn btn3">HOME</a>
                    <a href="http://localhost/php-final/shop.php" class="btn btn3">SHOP</a>
                    <a href="http://localhost/php-final/about.php" class="btn btn3">ABOUT</a>
                    <a href="http://localhost/php-final/contact.php" class="btn btn3">CONTACT</a>

                </div>
                <div class="nav navbar-nav2"><?php
                                                if (empty($_SESSION['name']) || $_SESSION['name'] == '') {
                                                    echo " <a href='login.php'class='btn btn2'>Log In</a></button>";
                                                } else {
                                                    echo "<img style='width:40px; height:40px; margin-right:2px;' src='images/avatar-removebg-preview (1).png'><font color='green'><a href='userpage.php'class='btn btn2'><h6 style= margin-right:10px; >Hello  " . $_SESSION['name'] . " </h6></font></a>";
                                                }
                                                ?>
                    <?php
                    if (empty($_SESSION['name']) || $_SESSION['name'] == '') {
                        echo "  <a href='signup.php' class='btn btn2'>
    Sign Up</a>";
                    } else {
                        echo "<a href='logout.php' class='btn btn2'>Log Out</a></button>";
                    }
                    ?>
                    <!-- <a href='login.php'class="btn btn2">Log In</a>
                    <a href="#" class="btn btn2">My Account</a>
                    <a href="#" class="btn btn2">My Account</a> -->
                    <a href="#" class="btn btn2"><i class="fas fa-search"></i></a>
                    <a href="last.php" class="btn btn2"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </nav>
    </header>
</body>



</html>