<?php
session_start();

include "headertest.php";
include "./connect.php";
?>
<?php


?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="landing.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- JavaScript Bundle with Popper -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .overlay h1,
        h2 {
            color: white;
            background-color: rgba(18, 6, 6, 0.6);

            font-weight: 600;
            margin: 2rem 3rem 0;
            mix-blend-mode: normal;
            z-index: 1;
            padding: 5px 15px;
            text-align: center;
        }




        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;

        }

        .image-gallery>li {
            flex-basis: 350px;
            /* width: 350px; */
        }

        .image-gallery li img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            vertical-align: middle;
            border-radius: 5px;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        footer {
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #f8f8f8;
            height: auto;
            width: 100vw;

            padding-top: 40px;
            color: #fff;
        }

        .footer-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;

        }

        .footer-content h3 {
            font-size: 2.1rem;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 3rem;
            color: black;
        }

        .footer-content p {
            max-width: 500px;
            margin: 10px auto;
            line-height: 28px;
            font-size: 14px;
            color: #cacdd2;
            color: black;
        }

        .socials {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3rem 0;
            color: black;
        }

        .socials li {
            margin: 0 10px;
            color: black;
        }

        .socials a {
            text-decoration: none;
            color: black;
            border: 1.1px solid black;
            padding: 5px;

            border-radius: 50%;

        }

        .socials a i {
            font-size: 1.1rem;
            width: 20px;
            color: black;




        }

        .socials a:hover i {
            color: aqua;
        }

        .footer-bottom {
            background: #000;
            width: 100vw;
            padding: 20px;
            padding-bottom: 40px;
            text-align: center;
        }

        .footer-bottom p {
            float: left;
            font-size: 14px;
            word-spacing: 2px;
            text-transform: capitalize;
        }

        .footer-bottom p a {
            color: #44bae8;
            font-size: 16px;
            text-decoration: none;
        }

        .footer-bottom span {
            text-transform: uppercase;
            opacity: .4;
            font-weight: 200;
        }

        .footer-menu {
            float: right;

        }

        .footer-menu ul {
            display: flex;
        }

        .footer-menu ul li {
            padding-right: 10px;
            display: block;
        }

        .footer-menu ul li a {
            color: black;
            text-decoration: none;
        }

        .footer-menu ul li a:hover {
            color: #27bcda;
        }

        @media (max-width:500px) {
            .footer-menu ul {
                display: flex;
                margin-top: 10px;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>



    <video playsinline autoplay muted loop>
        <source src="videos/Keemple_Smart_Home_3D_animation.webm" type="video/mp4">
        Your browser does not support the video tag. I suggest you upgrade your browser.
    </video>


    <div class="overlay ">
        <!-- <h1>LIVE LIFE BRILLIANTLY</h1><br>
        <h2>We connect smart devices to work in unison, <br> -->
        <!-- delivering a truly intelligent smart home experience that <br> makes life more convenient, safe, and enjoyable.</h2> -->
    </div>

    <img class="mx-auto d-block mt-1" src="images/line.jfif">
    <h1 class="heading"> Categories </h1><br><br>

    <?php
    $sql = "SELECT * FROM categories ";

    $result = $conn->query($sql);
    ?>
    <div style="    background-image: url(images/3.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="container ">
            <div class="row row-cols-3 g-5 mx-5 justify-content-center">

                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                ?>

                        <div class="col ">
                            <div class="card border-0">
                                <img src="<?php echo "images/" . $row["category_image"] ?>" style="height:200px;" class="card-img-top" alt="Hollywood Sign on The Hill" />
                                <div class="card-body">
                                    <h6 class="card-title text-center"><a style="text-decoration: none; text-align: center;" href="shop.php?id=<?php echo $row["category_id"] ?>"> <?php echo $row["category_name"] ?> </a></h6>

                                </div>
                            </div>
                        </div>



                <?php
                    }
                }

                ?>
            </div>
        </div>
    </div>

    <div class="introContainer " style="margin-top:5%">
        <div class="intro  ">
            <div style="width: 60%; padding: 20px; ">
                <img src="images/line.jfif">
                <h4 style="text-align: center ;">Home is where the comfort is , the real comfort lies in living smart & simple</h4><br>
                <p>A smart home is a house which is equipped with connected devices that can be programmed and controlled remotely via a smartphone or computer. For example, a smart home enables remote control of lighting, temperature, multi-media, security, window and doors, and many other functions.</p>
            </div>
            <div style="width: 40%;">
                <img src="images/Capture.PNG" style="width:100% ;height: 300px; " alt="">
            </div>

        </div>

    </div>

    <div class="introContainer">
        <div class="intro">

            <div style="width: 40%;">
                <img src="images/user.jpg" style="width:100% ;height: 310px; " alt="">
            </div>
            <div style="width: 60%; padding: 20px;">
                <img src="images/line.jfif">
                <h4 style="text-align: center ;">Safety that Keeps your Mind Clear</h4>
                <p>Your home is the place where you feel secure, you and your family deserves the feeling of security even if you are not at home.

                    The Smart Home from iHomeFuture keeps an eye on itself, it keeps monitoring undesired motions or opened windows and alerts you instantly if a threat detected.

                    Thanks to the integration of Zwave and FIBARO systems with surveillance system, our Smart Home can also send you pictures from the camera in order to keep a record of what is going on.</p>
            </div>

        </div>

    </div>

    <div class="introContainer">
        <div class="intro">
            <div style="width: 60%; padding: 20px;">
                <img src="images/line.jfif">
                <h4 style="text-align: center ;">You Hold the Key in Your Mobile</h4><br>
                <p>With the integration of smart locks and smart intercoms, the Smart Home from iHomeFuture is an advanced vault.

                    The intercom will alert you about people on your doorsteps even if you are far away, you can talk and watch them as well, you can also allow them access by opening the integrated smart lock.iHomeFuture Smart Home uses the most .</p>
            </div>
            <div style="width: 40%;">
                <img src="images/box3.jpg" style="width:100% ;height: 310px; " alt="">
            </div>

        </div>

    </div>

    <img class="mx-auto d-block mt-5" src="images/line.jfif">
    <h1 class="heading"> Our Team </h1>
    <div class="container d-flex align-items-center justify-content-center flex-wrap circle">

        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="images/picc1.jfif" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5"> Ghayda AL-Rabee</h3>
                        <p class="fs-6 text-white">Web Devloper</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="images/467.jpg" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">Mohammad Aldb'ee</h3>
                        <p class="fs-6 text-white">Manager</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="images/majdpic.jpeg" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">Majd Alshanteer</h3>
                        <p class="fs-6 text-white">Web Devloper</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="images/HQAli.png" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">Ali Kholani</h3>
                        <p class="fs-6 text-white">Web Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide w-75 mx-auto d-block h-50  " data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/pic7.PNG" class=" d-block w-100" alt="...">
             
            </div>
            <div class="carousel-item">
                <img src="images/pic6.jpg" class="d-block w-100" alt="...">
             
            </div>
            <div class="carousel-item">
                <img src="images/pic1.jpg" class=" d-block w-100" alt="...">
            
            </div>
            <div class="carousel-item">
                <img src="images/pic10.jpg" class="d-block w-100" alt="...">
              
            </div>
            <div class="carousel-item">
                <img src="images/pic11.jpg" class="d-block w-100" alt="...">
           
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
    <br>



    <footer>
        <div class="footer-content">
            <!-- <img src="logo-removebg-preview_2.png" style="width: 90px; height: 100px; padding-bottom:20px ; "> -->

            <h3>Smart Home </h3>
            <h6 style="color: black ;">Home is not a place it's a feeling..</h6>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 <a href="#">Smart Home </a> </p>

        </div>

    </footer>


</body>

</html>