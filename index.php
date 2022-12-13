<?php require_once 'connection.php'?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<br>"."Product ID: ";
            echo $row['productid']. "<br>";
            echo "Product Name: ";
            echo $row['name']. "<br>";
            echo "Product Description: ";
            echo $row['description']. "<br>";
            echo "Product Category: ";
            echo $row['category']. "<br>";
            echo "Product Price: $";
            echo $row['price']. "<br>";
            echo "Number of Product in stock: ";
            echo $row['stock']. "<br>";
            echo "Product Ship From: ";
            echo $row['city']. ", ";
            echo $row['state']. ", ";
            echo $row['zip']. "<br>";
            echo "Product Seller ID: ";
            echo $row['sellerID']. "<br>";
        }
    }

    $sql = "SELECT * FROM seller";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<br>"."Seller ID: ";
            echo $row['sellerid']. "<br>";
            echo "Seller Name: ";
            echo $row['name']. "<br>";
            echo "Seller Username: ";
            echo $row['username']. "<br>";
            echo "Seller Password: ";
            echo $row['password']. "<br>";
            echo "Seller email: ";
            echo $row['email']. "<br>";
            echo "Seller Phone Number: ";
            echo $row['phonenumber']. "<br>";
            echo "Seller Headquarters (USA): ";
            echo $row['city']. ", ";
            echo $row['state']. ", ";
            echo $row['zip']. ", ";
            echo $row['Address']. "<br>";
        }
    }

    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<br>"."Customer ID: ";
            echo $row['customerid']. "<br>";
            echo "Customer Name: ";
            echo $row['firstname']. " ";
            echo $row['lastname']. "<br>";
            echo "Customer Username: ";
            echo $row['username']. "<br>";
            echo "Customer Password: ";
            echo $row['password']. "<br>";
            echo "Customer email: ";
            echo $row['email']. "<br>";
            echo "Customer Phone Number: ";
            echo $row['phonenumber']. "<br>";
            echo "Customer Address: ";
            echo $row['city']. ", ";
            echo $row['state']. ", ";
            echo $row['zip']. ", ";
            echo $row['address']. "<br>";
        }
    }

    $sql = "SELECT * FROM payment";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<br>"."Payment ID: ";
            echo $row['paymentid']. "<br>";
            echo "Card Type: ";
            echo $row['type']. "<br>";
            echo "Card Number: ";
            echo $row['cardnumber']. "<br>";
            echo "Card Security Code: ";
            echo $row['securitycode']. "<br>";
            echo "Card Expiration Date: ";
            echo $row['expirationdate']. "<br>";
            echo "Address of Card: ";
            echo $row['city']. ", ";
            echo $row['state']. ", ";
            echo $row['zip']. ", ";
            echo $row['address']. "<br>";
            echo "Price of Purchase: ";
            echo $row['amount']. "<br>";
            echo "Customer ID: ";
            echo $row['customerID']. "<br>";
            echo "Product ID: ";
            echo $row['productID']. "<br>";
        }
    }

?>

</body>
</html>