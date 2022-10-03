
<?php
session_start();

include("connect.php");
include "header.php";


$sql = "SELECT * FROM items WHERE category_id='" . $_GET["id"] . "'";

$result = $conn->query($sql);

?>

<?php


?>



<!-- cart -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}

</style>
</head>
<body>
    






<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">




<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">E-COMMERCE CATEGORY</h1>
        <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>
    </div>
</section>

<?php
$sql2 = "SELECT * FROM categories" ;

$result2 = $conn->query($sql2);
?>


<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="catergories_productss.php?id=<?php echo $row["category_id"] ?>"></a></li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">Sub-category</li> -->
                </ol>
            </nav>
        </div>
    </div>
</div>






<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
 
<?php

if ($result2->num_rows > 0) {

    while ($row = $result2->fetch_assoc()) {

?>
<ul class="list-group category_block">
                    <li class="list-group-item"><a href="catergories_productss.php?id=<?php echo $row["category_id"] ?>"><?php echo $row["category_name"] ?></a></li>
       
                </ul>
                <?php
    }
}

?>

            </div>


            
            <!-- <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase">Last product</div>
                <div class="card-body">
                    <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
                    <h5 class="card-title">Product title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="bloc_left_price">99.00 $</p>
                </div>
            </div> -->
        </div>

 <div class="col">

            <div class="row">
                <!-- <div class="col-12 col-md-6 col-lg-4"> -->
                    <div style="   display: grid;
    grid-template-columns: 32% 32% 32%;
    grid-template-rows: 50% 50%; 
    gap:15px;">

                   
                    
              
        <?php




if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

?>

        <form method="post" action="last.php?id=<?php echo $row["id"] ?>">
                    <div class="card">
                        <img class="card-img-top" style="height:230px;" src=  <?php echo "images/".$row["item_image"] ?> alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product_details.php?id=<?php echo $row["id"] ?>"><?php echo"<h5>". $row["name_item"]."</h5>" ?> </a>
                            <p class="card-text"></p><br>
                            <div class="row">
                                <div class="col">
                                    
                                    <p class="btn btn-danger btn-block"><?php echo $row["price"] ?></p>
                                    <input type="text" name="quantity" class="form-control text-center " value="1" />  
                                </div>
                                <input class="btn btn-success btn-block" type="hidden" value='<?php echo $row["name_item"] ?>' name="hidden_name" >
                                <input class="btn btn-success btn-block" type="hidden" value='<?php echo $row["price"] ?>' name="hidden_price" >
                                <input class="btn btn-success btn-block" type="hidden" value='<?php echo $row["item_image"] ?>' name="hidden_image" >

                                <div class="col">
                                   
                              <input type="submit" class="btn btn-success btn-block" value="Add to cart" name="addCart" >
                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
    }
}

?>

                </div>
               

 </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php







// if(isset(($_POST['addCart']))){
//     $sql = "INSERT INTO cart(product_name,product_price	,product_image  ,quantity ) 
    
//     VALUES('1','1','1','psegrhdhdfjdfj')";
//     if (mysqli_query($conn, $sql)) {
//   var_dump($sql);}
// }

?>

























<!-- 

                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </div>

    </div>
</div>

