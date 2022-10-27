<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="description" content="Reciept" />
<meta name="keywords" content="PHP, MySql" />
<title>Receipt</title>
</head>
<body>
<h1>Receipt</h1>
<?php
    session_start();
    $fname =  $_SESSION['fname'];
    $lname = $_SESSION['lname'] ;
    $email = $_SESSION['email'] ;
    $sadd = $_SESSION['address'];
    $st = $_SESSION['suburb'] ;
    $state = $_SESSION['state'];
    $pc = $_SESSION['postcode'];
    $phone = $_SESSION['phone'];
    $contact = $_SESSION['contact'];
    $product = $_SESSION['product'];
    $features = $_SESSION['features'];
    $ctype = $_SESSION['ctype'];
    $cnum = $_SESSION['cnum'];

    echo ("<p>Your name is $fname $lname</p>");
    echo ("<p>Your email is $email</p>");
    echo ("<p> Address: $add, $st, $state, $pc</p>");
    echo ("<p>Phone number: $phone</p>");
    echo ("<p>Preferred contact: $contact</p>");
    echo ("<p>The product you want to order: $product</p>");
    echo ("<p>Product features: $features</p>");
    echo ("<p>$ctype</p>");
    echo ("<p>$cnum</p>");
    echo ("<p>$cname</p>");
    echo ("<p>$cexp</p>");
    echo ("<p>$ccsc</p>");

?>
</body>
</html>
