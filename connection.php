<?php
$conn = mysqli_connect('localhost', 'root', 'Mineing02', 'ecommerce');

if($conn)
{
    echo "You have connected";
}

if(!$conn)
{
    die('There was a connection error');
}

?>