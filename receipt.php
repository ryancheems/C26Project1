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
    require_once "settings.php";
    $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
    if (!$conn) {
        // Displays an error message
        echo "<p>Database connection failure</p>";
    } else {
        // Upon successful connection
        $sql_table="Order";
                // Set up the SQL command to query or add data into the table
                $query = "SELECT  make, model, price FROM Order ORDER BY make, model";

                // Execute the query and store result into the result pointer
                $result = mysqli_query($conn, $query);

                // Checks if the execution was successful
                if (!$result) {
                    echo "<p>Something is wrong with ", $query, "</p>";
                } else {
                    //Display the retrieved records
                        echo "<table border=\"1\">\n";
                        echo "<tr>\n "
                            ."<th scope=\"col\">Order_id</th>\n "
                            ."<th scope=\"col\">Order_status</th>\n "
                            ."</tr>\n ";
                        while ($row = mysqli_fetch_assoc($result)){
                            echo "<tr>\n ";
                            echo "<td>",$row["order_id"],"</td>\n ";
                            echo "<td>",$row["order_status"],"</td>\n ";
                            echo "</tr>\n ";
                        }

                    echo "</table>\n ";
                // Frees up the memory, after using the result pointer
                    mysqli_free_result($result);
                } // if successful query operation

                // close the database connection
                mysqli_close($conn);
            } //if successful database connection
    echo ("<p>Your name is $fname $lname</p>");
    echo ("<p>Your email is $email</p>");
    echo ("<p> Address: $add, $st, $state, $pc</p>");
    echo ("<p>Phone number: $phone</p>");
    echo ("<p>Preferred contact: $contact</p>");
    echo ("<p>The product you want to order: $product</p>");
    echo ("<p>Product features: $features</p>");
?>
</body>
</html>
