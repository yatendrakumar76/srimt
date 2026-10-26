<?php 
include("connection.php");
if(isset($_POST['order'])){
$product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $pincode = $_POST['pincode'];

    $query = "INSERT INTO orde_cat (product_id, name, address, mobile, pincode) VALUES ('$product_id', '$name', '$address', '$mobile', '$pincode')";
    $result = mysqli_query($connect, $query);

    if($result){
        echo "<script>alert('Order placed successfully!');</script>";
    } else {
        echo "<script>alert('Error placing order. Please try again.');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inde.css">
</head>

<body>
    <form action="buy.php" method="post">
        <input type="number" name="product_id" placeholder="Enter product ID"><br>
        <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="text" name="address" placeholder="enter address"><br>
        <input type="text" name="mobile" placeholder="enter phone number"><br>
        <input type="number" name="pincode" placeholder="enter your area pincode"><br>
        <input type="submit" name="order" value="Place Order">
    </form>

</body>

</html>