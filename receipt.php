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
echo "<table border = '1'>";
    echo "<tr><th>Order ID</th><th>Order Status</th><th>Order Date</th><th>First Name</th><th>Last Name</th>
    <th>Email</th><th>Address</th><th>Suburb</th><th>State</th><th>Postcode</th><th>Phone</th><th>Contact</th>
    <th>Product</th><th>Features</th><th>Card Type</th><th>Card Number</th><th>Card Name</th><th>Card Expiry Date</th><th>Card CSC</th><th>Quantity</th>
    <th>Cost</th></tr>";
    require_once "settings.php";
    $conn = mysqli_connect($host, $user, $pwd, $sql_db);
    if ($conn) {
        $query = "SELECT * FROM `orders` ORDER BY order_id DESC LIMIT 1";
        $queryResult = mysqli_query($conn, $query);
        if ($queryResult){
            $row = mysqli_fetch_row($queryResult);
            while ($row){
                echo "<tr><td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td>$row[4]</td>";
                echo "<td>$row[5]</td>";
                echo "<td>$row[6]</td>";
                echo "<td>$row[7]</td>";
                echo "<td>$row[8]</td>";
                echo "<td>$row[9]</td>";
                echo "<td>$row[10]</td>";
                echo "<td>$row[11]</td>";
                echo "<td>$row[12]</td>";
                echo "<td>$row[13]</td>";
                echo "<td>$row[14]</td>";
                echo "<td>$row[15]</td>";
                echo "<td>$row[16]</td>";
                echo "<td>$row[17]</td>";
                echo "<td>$row[18]</td>";
                echo "<td>$row[19]</td>";
                echo "<td>$row[20]</td></tr>";
                $row = mysqli_fetch_row($queryResult);
            }
            echo "</table>";
        }
    }
    else{
        echo "<p>ERROR</p>";
    }


?>
</body>
</html>
