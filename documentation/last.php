
<?php
session_start();
include "headertest.php";
include "./connect.php";
/* code by webdevtrick ( https://webdevtrick.com ) */



if(isset($_POST["checkout"])){

    if(empty($_SESSION['name']) || $_SESSION['name'] == ''){
        header('Location:login2.php');
        
}
else{
    // $id=$_SESSION['id'];
    // $name=$_SESSION['name'];
    // $address=$_SESSION['address'];
    // $contact=$_SESSION['contact'];
    // $total=$_SESSION['total'];

			
    // $sql = "INSERT INTO orders(user_id,	name, address ,contact ,total_price) 
    // VALUES('$id','$name','$address','$contact','$total')";
    // if (mysqli_query($conn, $sql)) {
    //     echo "New record created successfully";
    // mysqli_close($conn);
  

    header('Location:shipping.php'); 
}

}



//Cart

$connect = mysqli_connect("localhost", "root", "", "smart_home");
 
if(isset($_POST["addCart"]))
{
if(isset($_SESSION["shopping_cart"]))
{
$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["shopping_cart"]);
$item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["hidden_name"],
'item_image' => $_POST["hidden_image"],
'item_price' => $_POST["hidden_price"],
'item_quantity' => $_POST["quantity"]
);
$_SESSION["shopping_cart"][$count] = $item_array;
}
else
{
    echo"  <div class='alert alert-warning alert-dismissible fade show'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Product is already added into the cart </strong> 
  </div>";
// echo '<script>alert("Item Already Added")</script>';
}
}
else
{
$item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["hidden_name"],
'item_image' => $_POST["hidden_image"],
'item_price' => $_POST["hidden_price"],
'item_quantity' => $_POST["quantity"]
);
$_SESSION["shopping_cart"][0] = $item_array;
}
}
 
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["shopping_cart"] as $keys => $values)
{
if($values["item_id"] == $_GET["id"])
{
unset($_SESSION["shopping_cart"][$keys]);
echo ' ';

}
}
}
}
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Shopping Cart In PHP and MySql | Webdevtrick.com</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   

<style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #fff;
    background-repeat: no-repeat;
}

.plus-minus {
    position: relative;
}

.plus {
    position: absolute;
    top: -4px;
    left: 2px;
    cursor: pointer;
}

.minus {
    position: absolute;
    top: 8px;
    left: 5px;
    cursor: pointer;
}

.vsm-text:hover {
    color: #FF5252;
}

.book, .book-img {
    width: 120px;
    height: 180px;
    border-radius: 5px;
}

.book {
    margin: 20px 15px 5px 15px;
}

.border-top {
    border-top: 1px solid #EEEEEE !important;
    margin-top: 20px;
    padding-top: 15px;
}

.card {
    margin: 40px 0px;
    padding: 40px 50px;
    border-radius: 20px;
    border: none;
    box-shadow: 1px 5px 10px 1px rgba(0,0,0,0.2);
}

input, textarea {
    background-color: #F3E5F5;
    padding: 8px 15px 8px 15px;
    width: 100%;
    border-radius: 5px !important;
    box-sizing: border-box;
    border: 1px solid #F3E5F5;
    font-size: 15px !important;
    color: #000 !important;
    font-weight: 300;
}

input:focus, textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #9FA8DA;
    outline-width: 0;
    font-weight: 400;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

.pay {
    width: 80px;
    height: 40px;
    border-radius: 5px;
    border: 1px solid #673AB7;
    margin: 10px 20px 10px 0px;
    cursor: pointer;
    box-shadow: 1px 5px 10px 1px rgba(0,0,0,0.2);
}

.gray {
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    filter: grayscale(100%);
    color: #E0E0E0;
}

.gray .pay {
    box-shadow: none;
}

#tax {
    border-top: 1px lightgray solid;
    margin-top: 10px;
    padding-top: 10px;
}

.btn-blue {
    border: none;
    border-radius: 10px;
    background-color: #673AB7;
    color: #fff;
    padding: 8px 15px;
    margin: 20px 0px;
    cursor: pointer;
}

.btn-blue:hover {
    background-color: #311B92;
    color: #fff;
}

#checkout {
    float: left;
}

#check-amt {
    float: right;
}

@media screen and (max-width: 768px) {
    .book, .book-img {
        width: 100px;
        height: 150px;
    }

    .card {
        padding-left: 15px;
        padding-right: 15px;
    }

    .mob-text {
        font-size: 13px;
    }

    .pad-left { 
        padding-left: 20px;
    }
}
</style>

</head>
<body>
<br />
<div class="container">

<br />
<h3 align="center">Shopping Cart </h3>

<?php
$query = "SELECT * FROM items ";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
?>


<?php
}
}
?>
<div style="clear:both"></div>
<br />
<!-- <h3>Order Details</h3> -->
<div class="table-responsive ">
<table class="table  ">
<tr>
<th width="30%">Item Name</th>
<th width="20%"> Image</th>
<th width="10%">Quantity</th>
<th width="15%">Price</th>
<th width="15%">Total</th>
<th width="5%">Action</th>
</tr>
<?php
if(!empty($_SESSION["shopping_cart"]))
{
$total = 0;
foreach($_SESSION["shopping_cart"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["item_name"]; ?></td>
<td><img width="80px" height="70px" src="<?php echo 'images/'.$values['item_image'];?>"></td>
<td><?php echo $values["item_quantity"]; ?></td>


<td>JD <?php echo $values["item_price"]; ?></td>
<td>JD <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
<td><a href="last.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger"><button class='btn btn-danger'><img src="trash3.svg"></button></span></a></td>
</tr>
<?php
$total = $total + ($values["item_quantity"] * $values["item_price"]);

}

?>

<?php

}


?>




</table>
<!-- <form method="post"> -->
<!-- <label for="coupon"><b>Add coupon to get discount:</b></label>
<input type="text" name="coupon" autofocus  class=""  style="width:10%"/> 

<button type="submit" name="ok"   class="btn btn-light"  style="width:5%">OK!</button> -->

<!-- </form> -->

<!-- "MGMA-4" -->
<?php
// if(isset($_POST["ok"])){
//     //coupon = 20%
// $x==0.2;
// // $coupon=0.20
// $coupon=$total*$x;

// $totalWithDisc=$total-$coupon;
// }
 $_SESSION['totalFirst']=$total;

 $coupon=$total*0.2;

 $totalWithDisc=$total-$coupon;
 $_SESSION['total']=$totalWithDisc;


?>


</div>
</div>
</div>

<br>




<!-- <a href="shipping.php"><button  >
             go </button></a> -->




     <form method="post" >

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- <div class="card">
                <div class="row">
                    <div class="col-lg-3 radio-group">
                        <div class="row d-flex px-3 radio">
                            <img class="pay" src="https://i.imgur.com/WIAP9Ku.jpg">
                            <p class="my-auto">Credit Card</p>
                        </div>
                        <div class="row d-flex px-3 radio gray">
                            <img class="pay" src="https://i.imgur.com/OdxcctP.jpg">
                            <p class="my-auto">Debit Card</p>
                        </div>
                        <div class="row d-flex px-3 radio gray mb-3">
                            <img class="pay" src="https://i.imgur.com/cMk1MtK.jpg">
                            <p class="my-auto">PayPal</p>
                        </div>
                    </div> 
                 
                    <div class="col-lg-5">
                        <div class="row px-2">
                            <div class="form-group col-md-6">
                                <label class="form-control-label">Name on Card</label>
                                <input type="text" id="cname" name="cname" placeholder="Johnny Doe" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label">Card Number</label>
                                <input type="text" id="cnum" name="cnum" placeholder="1111 2222 3333 4444" required>
                            </div>
                        </div>
                        <div class="row px-2">
                            <div class="form-group col-md-6">
                                <label class="form-control-label">Expiration Date</label>
                                <input type="text" id="exp" name="exp" placeholder="MM/YYYY" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="***" required>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-4 mt-2">
                        <div class="row d-flex justify-content-between px-4">
                            <p class="mb-1 text-left">Total</p>
                            <h6 class="mb-1 text-right"><?php echo number_format($total, 1); ?></h6>
                        </div>
                        <div class="row d-flex justify-content-between px-4">
                            <p class="mb-1 text-left">Discount (20%)</p>
                            <h6 class="mb-1 text-right"><?php echo $coupon?></h6>
                        </div>
                        <div class="row d-flex justify-content-between px-4" id="tax">
                            <p class="mb-1 text-left">Final Total </p>
                            <h6 class="mb-1 text-right"><?php echo $totalWithDisc?></h6>
                        </div>


                       
                        <a href="shipping.php"><button type="submit" class="btn-block btn-blue" name="checkout">
                            <span>
                                <span id="checkout">Place Your Order</span></a>
                                <!-- <span id="check-amt">$26.48</span>
                            </span>
                        </button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->







</body>
</html>