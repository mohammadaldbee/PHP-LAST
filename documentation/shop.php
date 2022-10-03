<?php
session_start();
include "headertest.php";
require 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="shop.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <?php //require "header.php"; 
    ?>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Filter Results</h3>
            </div>
            <?php
            $query = "SELECT * FROM items INNER JOIN categories ON categories.category_id = items.id;";
            $query_cat = mysqli_query($conn, $query);
            ?>
            <ul class="list-unstyled components">
                <p>Filter By Category:</p>
                <hr>
                <?php
                foreach ($query_cat as $cat) {
                ?>
                    <li>
                        <a href="<?php echo '../php-final/shop.php?' . 'catId=' . $cat["category_id"] ?>"><?php echo $cat["category_name"] ?></a>
                    </li><br>
                <?php
                }
                ?>
            </ul>

            <ul class="list-unstyled CTAs">
                <p>Filter By Price:</p>
                <form action="" method="GET">
                    <div>
                        <div class="col-md-3">
                            <label for="">Start Price:</label>
                            <input type="text" name="start_price" value="<?php if (isset($_GET['start_price'])) {
                                                                                echo $_GET['start_price'];
                                                                            } else {
                                                                                echo "0";
                                                                            }  ?>" class="form-controle">
                        </div><br>
                        <div class="col-md-3">
                            <label for="">End Price:</label>
                            <input type="text" name="end_price" value="<?php if (isset($_GET['end_price'])) {
                                                                            echo $_GET['end_price'];
                                                                        } else {
                                                                            echo "0";
                                                                        }  ?>" class="form-controle"><br>
                        </div><br>
                        <button type="submit" name="filter" class="btn btn-primary px-4 ">Filter</button>
                    </div>
                </form>
                <li>
                    <a href="#"></a>
                </li>
            </ul>
        </nav>

        <!--------------------- Page Content Holder ----------------------->


        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn bg-primary">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form style="width:70% ;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <input class="form-control mr-sm-2 ml-3" name="searchInput" type="text" placeholder="Search A Product Or A Price..." aria-label="Search">
                            <span>
                                <button class="btn btn-primary px-4 mt-2 ml-3" name="serachBtn" type="submit">Search</button>
                                <button type="submit" name="reset" class="btn btn-primary px-4 mt-2 ml-3">Reset</button>
                            </span>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- //------------------Categories---------------------// -->
            <?php
            if (isset($_GET['catId'])) {
                $categoryId = $_GET['catId'];
                $query = "SELECT * FROM items WHERE category_id = $categoryId;";
                $q_cat = mysqli_query($conn, $query);
            ?>
                <div class="row row-cols-1 mt-3 row-cols-md-3 g-4 mx-5">
                    <?php
                    if (mysqli_num_rows($q_cat) > 0) {
                        foreach ($q_cat as $row) { ?>
                            <div class="card h-90 mb-4  " style=" margin:auto ;max-width:280px  ;">
                                <div class="card p-4">
                                    <div class="text-center">
                                        <img src=  <?php echo "images/".$row["item_image"] ?> style=" height:200px;" class="w-100">
                                    </div><br>
                                    <div class="text-center d-flex flex-column" style="height: 140px; padding:2px;">
                                        <a href="product_details.php?id=<?php echo $row["id"] ?>" class="item_name_link" style="color:blue ;">
                                            <h5 class="px-2 "><?= $row['name_item']; ?></h5>
                                        </a>
                                        <h6 class="card-title"><?php echo '$' . $row["price"] ?></h6>
                                        <form method="post" action="last.php?id=<?php echo $row["id"] ?>">
                                            <div class="btns d-flex">
                                                <!-- <label for="quantity" style=";">Qty: </label> -->
                                                <input type="text" name="quantity" style="width:70px;margin-right:4px;" value="1" /><br>
                                                <input type="hidden" value='<?php echo $row["name_item"] ?>' name="hidden_name">
                                                <input type="hidden" value='<?php echo $row["price"] ?>' name="hidden_price">
                                                <input type="hidden" value='<?php echo $row["item_image"] ?>' name="hidden_image">
                                                <input type="submit" class="btn btn-success" value="Add To Cart" name="addCart">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                </div>
                <br>
                <hr style="color:black ;"><br>
                <h3 style="text-align: center; margin-bottom:50px;">All Products</h3>
        <?php
                    }
                }
        ?>
        <!-- //------------------Search---------------------// -->
        <?php
        $emptySearch = "";
        if (isset($_POST['searchInput'])) {
            $searchFor = $_POST['searchInput'];
            if (isset($_POST['serachBtn'])) {
                $query = "SELECT * FROM items WHERE name_item  LIKE '%$searchFor%' OR price LIKE '%$searchFor%';";
                $query_run = mysqli_query($conn, $query);
                if ($searchFor === "") {
                    echo "Please Type Something To Search For!";
        ?>
                    <br>
                    <hr style="color:black ;"><br>
                    <h3 style="text-align: center; margin-bottom:50px;">All Products</h3>
                <?php
                } ?>
                <div class="row row-cols-1 mt-3 row-cols-md-3 g-4 mx-5">
                    <?php
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                    ?>
                             <div class="card h-90 mb-4  " style=" margin:auto ;max-width:280px  ;">
                                <div class="card p-4">
                                    <div class="text-center">
                                        <img src=  <?php echo "images/".$row["item_image"] ?> style=" height:200px;" class="w-100">
                                    </div><br>
                                    <div class="text-center d-flex flex-column" style="height: 140px; padding:2px;">
                                        <a href="product_details.php?id=<?php echo $row["id"] ?>" class="item_name_link" style="color:blue ;">
                                            <h5 class="px-2 "><?= $row['name_item']; ?></h5>
                                        </a>
                                        <h6 class="card-title"><?php echo '$' . $row["price"] ?></h6>
                                        <form method="post" action="last.php?id=<?php echo $row["id"] ?>">
                                            <div class="btns d-flex">
                                                <!-- <label for="quantity" style=";">Qty: </label> -->
                                                <input type="text" name="quantity" style="width:70px;margin-right:4px;" value="1" /><br>
                                                <input type="hidden" value='<?php echo $row["name_item"] ?>' name="hidden_name">
                                                <input type="hidden" value='<?php echo $row["price"] ?>' name="hidden_price">
                                                <input type="hidden" value='<?php echo $row["item_image"] ?>' name="hidden_image">
                                                <input type="submit" class="btn btn-success" value="Add To Cart" name="addCart">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                </div>
                <br>
                <hr style="color:black ;"><br>
                <h3 style="text-align: center; margin-bottom:50px;">All Products</h3>
                <?php
                ?>
            <?php
                    } else {
                        echo "<h5> No Results Were Found </h5>";
            ?>
                <br>
                <hr style="color:black ;"><br>
                <h3 style="text-align: center; margin-bottom:50px;">All Products</h3>
        <?php
                    }
                }
            }
            //    ----------------Filter------------------     //
            if (isset($_GET['start_price']) && isset($_GET['end_price'])) {
                $startprice = $_GET['start_price'];
                $endprice = $_GET['end_price'];
                $query = "SELECT * FROM items WHERE price BETWEEN $startprice AND $endprice ;";
            } else {
        ?>
        <?php
                $query = "SELECT * FROM items ;";
        ?>
    <?php
            }
            $query_run = mysqli_query($conn, $query);
    ?>
    <div class="row row-cols-1 mt-3 row-cols-md-3 g-4 mx-5">
        <?php
        if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $row) {
        ?>
                 <div class="card h-90 mb-4  " style=" margin:auto ;max-width:280px  ;">
                                <div class="card p-4">
                                    <div class="text-center">
                                        <img src=  <?php echo "images/".$row["item_image"] ?> style=" height:200px;" class="w-100">
                                    </div><br>
                                    <div class="text-center d-flex flex-column" style="height: 140px; padding:2px;">
                                        <a href="product_details.php?id=<?php echo $row["id"] ?>" class="item_name_link" style="color:blue ;">
                                            <h5 class="px-2 "><?= $row['name_item']; ?></h5>
                                        </a>
                                        <h6 class="card-title"><?php echo '$' . $row["price"] ?></h6>
                                        <form method="post" action="last.php?id=<?php echo $row["id"] ?>">
                                            <div class="btns d-flex">
                                                <!-- <label for="quantity" style=";">Qty: </label> -->
                                                <input type="text" name="quantity" style="width:70px;margin-right:4px;" value="1" /><br>
                                                <input type="hidden" value='<?php echo $row["name_item"] ?>' name="hidden_name">
                                                <input type="hidden" value='<?php echo $row["price"] ?>' name="hidden_price">
                                                <input type="hidden" value='<?php echo $row["item_image"] ?>' name="hidden_image">
                                                <input type="submit" class="btn btn-success" value="Add To Cart" name="addCart">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                <!-- ---------------------- -->
            <?php
            }
            ?>
    </div>
<?php
        } else {
            echo "No Results Were Found";
        }
?>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>