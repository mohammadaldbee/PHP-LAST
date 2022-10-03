<?php
session_start();
include "headertest.php"?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="about.css">
    <title>About Us</title>
</head>

<body>


    <div id="container" class="container-fluid ">

        <h2 class="mainHeading">About Us</h2>

        <div class="header">
            <img id="largeimage" src="imgs/smart-home-background-as.jpg" alt="">
            <img id="phoneImage" src="imgs/smart-home-features.png" alt="">
            <div class="headArt">
                <p> <span>Controle</span> Your Home <br> Any Where,Any Time <br> <span>Simply</span> From Your Phone</p>
                <a href="#"><button>Explore</button></a>
            </div>
        </div>

        <div class="ourComp">
            <h3>Online Shop</h3>
            <p>
                The world is witnessing rapid development in technical industries. Owning a modern home has become a prerequisite to keeping pace with the civilizational progress we are living. We offer you the best high-quality smart devices at affordable prices to make your home comfortable and elegant.
            </p>

            <a href="#"><button>More</button></a>


        </div>


        <div class="whySmart">
            <div class="why1">
                <img src="imgs/tired.jpg" alt="">
            </div>
            <div class="why2">
                <div class="artic1">
                    Got into bed after a long day, just to remember you left the lights on?. No worries, we got you.
                    With our smart products, you can control any device in your home remotely using your smartphone
                </div>
            </div>
            <div class="why3">
            <div class="artic2">
                    With our wide variety of products, you will find everything you need to keep your home modern and elegant
                </div>

            </div>
            <div class="why4">
            <img src="imgs/Collage-Smart-Homes.jpg" alt="">
            </div>
        </div>





        <div class="testimCont">
            <h4 style="text-align:center ;">Happy Customers</h4>
            <div class="testim">

                <div id="testimCard1" class="testimCard">
                    <img src="imgs/salam.jpg" alt="">
                    <h4>Salam</h4>
                    <p>High Quality Products</p>
                </div>
                <div id="testimCard2" class="testimCard">
                    <img src="imgs/samar.jpg" alt="">
                    <h4>Samar</h4>
                    <p>Nice People</p>
                </div>
                <div id="testimCard3" class="testimCard">
                    <img src="imgs/samer.jpg" alt="">
                    <h4>Samer</h4>
                    <p>Best Experience Keep Going</p>
                </div>
                <div id="testimCard4" class="testimCard">
                    <img src="imgs/malek.jpg" alt="">
                    <h4>Malek</h4>
                    <p>Great Compony</p>
                </div>
            </div>
        </div>





    </div>


</body>

</html>