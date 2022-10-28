<!DOCTYPE html>
<html lang="en">
<head>
    <link href="styles/style.css" rel="stylesheet"/>   
    <link href="styles/style_enquire.css" rel="stylesheet"/>
    <meta charset="utf-8" />
    <meta name="description" content="Manager" />
    <meta name="keywords" 	 content="PHP, MySql" />
    <title>Enquire</title>
</head>
<body>
    <?php include 'includes/header.inc'; ?>
    <?php 
    $buttonvar = "SELECT * FROM `orders`";
    echo "<table border = '1'>";
    echo "<tr><th>Order ID</th><th>Order Status</th><th>First Name</th><th>Last Name</th>
    <th>Email</th><th>Address</th><th>Suburb</th><th>State</th><th>Postcode</th><th>Phone</th><th>Contact</th>
    <th>Product</th><th>Features</th></tr>";
    require_once "settings.php";
    $conn = mysqli_connect ($host, $user, $pwd, $sql_db);
    if ($conn) {
        echo "<p>Connection successful!</p>";
        $query = $buttonvar;
        $queryResult = mysqli_query($conn, $query);
        if ($queryResult){
            $row = mysqli_fetch_row($queryResult);
            while ($row){
                echo "<tr><td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td>$row[5]</td>";
                echo "<td>$row[5]</td>";
                echo "<td>$row[6]</td>";
                echo "<td>$row[7]</td>";
                echo "<td>$row[8]</td>";
                echo "<td>$row[9]</td>";
                echo "<td>$row[10]</td>";
                echo "<td>$row[11]</td>";
                echo "<td>$row[12]</td></tr>";
                $row = mysqli_fetch_row($queryResult);
            }
            echo "</table>";
        }
        else{
            echo "<p>No record</p>";
        }
    }
    ?>


    <?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        else if(array_key_exists('button3', $_POST)) {
            button3();
        }
        else if(array_key_exists('button4', $_POST)) {
            button4();
        }
        else if(array_key_exists('button5', $_POST)) {
            button5();
        }
        function button1() {
            $buttonvar = "SELECT * FROM `orders`";
            echo "Selected All";
        }
        function button2() {
            
            echo 
            "<form method='post'>
                <input type='text' name='bname' id='bname' value='Enter Name'>
            </form>";

        }
        if (isset($_POST["bname"])){
            $bname = ($_POST["bname"]);
            echo  $_POST['bname'];
        }
        function button3() {
            echo 
            "<form method='post'>
                <input type='text' name='bproduct' id='bproduct' value='Enter Product Type'>
            </form>";
        }
        if (isset($_POST["bproduct"])){
            $bproduct = ($_POST["bproduct"]);
            echo  $_POST['bproduct'];
        }
        function button4() {
            // change this
            $buttonvar = "SELECT * FROM `orders`";
            echo "Pending";
        }
        function button5() {
            // change this
            $buttonvar = "SELECT * FROM `orders`";
            echo "Price";
        }
    ?>
    <form method="post">
        <input type="submit" name="button1"
                class="button" value="Select All" />
          
        <input type="submit" name="button2"
                class="button" value="Search by Name" />

        <input type="submit" name="button3"
                class="button" value="Search by Product" />
        
        <input type="submit" name="button4"
                class="button" value="Pending Orders" />
        
        <input type="submit" name="button5"
                class="button" value="Sort by Price" />
    </form>

    <?php include 'includes/footer.inc'; ?>
</body>
</html>