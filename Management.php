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
    session_start();

    if (!(isset($_SESSION['buttonvar']))){
        $buttonvar = "SELECT * FROM `orders`";
        $bname = "";
        $bproduct = "";
        $_SESSION['buttonvar'] = $buttonvar;
        $_SESSION['bname'] = $bname;
        $_SESSION['bproduct'] = $bproduct;
    }
    $status_list = array();
    $_SESSION['status_list'] = $status_list;

    require_once "settings.php";
    $conn = mysqli_connect ($host, $user, $pwd, $sql_db);
    if ($conn) {
        echo "<p>Connection successful!</p>";
        $query = $_SESSION['buttonvar'];
        $queryResult = mysqli_query($conn, $query);
        if ($queryResult){
            echo "<table border = '1'>";
            echo "<tr><th>Order ID</th><th>Order Status</th><th>Order Date</th><th>First Name</th><th>Last Name</th>
            <th>Email</th><th>Address</th><th>Suburb</th><th>State</th><th>Postcode</th><th>Phone</th><th>Contact</th>
            <th>Product</th><th>Features</th><th>Quantity</th><th>Cost</th></tr>";
            $row = mysqli_fetch_row($queryResult);
            while ($row){
                array_push($status_list, $row[1]);
                $_SESSION['status_list'] = $status_list;
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
                echo "<td>$row[19]</td>";
                echo "<td>$row[20]</td>";
                echo "<td><form action='' method='post'>
                <button name='tbutt' value='$row[0]'>Update</button>
              </form></td>";
                if (($row[1])=='PENDING'){
                    echo "<td><form action='' method='post'>
                    <button name='tbutt2' value='$row[0]'>Cancel</button>
                  </form></td></tr>";
                }
                    
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
        }//
       // else if(array_key_exists('tbutt1', $_POST)) {
        //    tbutt1();
       // }
       // else if(array_key_exists('tbutt2', $_POST)) { 
        //    tbutt2();
        //} 
        if (isset($_POST['tbutt'])){
            $i = $_POST['tbutt'];
            tbutt($i);
       }
        if (isset($_POST['tbutt2'])){
            $i = $_POST['tbutt2'];
            tbutt2($i);
       }

      //  $i = 0;
      //  while ($i<5){
		//echo "tbutt $i<br>";
       //     if(array_key_exists("tbutt $i", $_POST)){
         //       tbutt($i);
           // }
            //$i = $i + 1;
        //}
       // $i = 0;
       // while ($i<5){
		//echo "tbutt2 $i <br>";
        //    if(array_key_exists("tbutt2 $i", $_POST)){
        //        tbutt2($i);
         //   }
         //   $i = $i + 1;
        //}

         if (isset($_POST["bname"])){
            $bname = ($_POST["bname"]);
             $_SESSION['bname'] = $bname;

             $bname = $_SESSION['bname'];
             $buttonvar = "SELECT * FROM `orders` WHERE fname = '$bname' OR lname = '$bname' OR CONCAT(fname, ' ', lname) = '$bname'";
             $_SESSION['buttonvar'] = $buttonvar;
            echo  $_POST['bname'];
            echo $buttonvar;
        }
        if (isset($_POST["bproduct"])){
            $bproduct = ($_POST["bproduct"]);
            $_SESSION['bproduct'] = $bproduct;

            $bproduct = $_SESSION['bproduct'];
            $buttonvar = "SELECT * FROM `orders` WHERE product = '$bproduct'";
            $_SESSION['buttonvar'] = $buttonvar;
            echo  $_POST['bproduct'];
        }
        function button1() {
            $buttonvar = "SELECT * FROM `orders`";
            $_SESSION['buttonvar'] = $buttonvar;
            echo "Selected All";
        }
        function button2() {
            $bname = $_SESSION['bname'];
            $buttonvar = "SELECT * FROM `orders` WHERE fname = '$bname' OR lname = '$bname' OR CONCAT(fname, ' ', lname) = '$bname'";
            $_SESSION['buttonvar'] = $buttonvar;
            echo 
            "<form method='post'>
            <input type='text' name='bname' id='bname' value='Enter Name'>
            </form>";
            
        }
        
        function button3() {
            $bproduct = $_SESSION['bproduct'];
            $buttonvar = "SELECT * FROM `orders` WHERE product = '$bproduct'";
            $_SESSION['buttonvar'] = $buttonvar;
            echo 
            "<form method='post'>
            <input type='text' name='bproduct' id='bproduct' value='Enter Product Type'>
            </form>";
        }

        function button4() {
            // change this
            $buttonvar = "SELECT * FROM `orders` WHERE order_status = 'PENDING'";
            $_SESSION['buttonvar'] = $buttonvar;
            echo "Pending";
        }
        function button5() {
            // change this
            if ($_SESSION['buttonvar'] == "SELECT * FROM `orders` ORDER BY  order_cost DESC"){
                $buttonvar = "SELECT * FROM `orders` ORDER BY  order_cost ASC";
            }
            else{
                $buttonvar = "SELECT * FROM `orders` ORDER BY  order_cost DESC";
            }
            
            $_SESSION['buttonvar'] = $buttonvar;
            echo "Price";
        }
        function tbutt($id_num) {
            // change this
            $status_list = $_SESSION['status_list'];
            if ($status_list[$id_num-1] == "PENDING"){
                $buttonvar = "UPDATE `orders` SET order_status ='FULFILLED' WHERE order_id = '$id_num'";
            }
            else if ($status_list[$id_num-1] == "FULFILLED"){
                $buttonvar = "UPDATE `orders` SET order_status ='PAID' WHERE order_id = '$id_num'";
            }
            else if ($status_list[$id_num-1] == "PAID"){
                $buttonvar = "UPDATE `orders` SET order_status ='ARCHIVED' WHERE order_id = '$id_num'";
            }
            else{
                $buttonvar = "UPDATE `orders` SET order_status ='PENDING' WHERE order_id = '$id_num'";

            }
            $_SESSION['status_list'] = $status_list;
            $_SESSION['buttonvar'] = $buttonvar;
            echo "Update $id_num";


        }
        function tbutt2($id_num) {
            // change this
            $buttonvar = "DELETE FROM `orders` WHERE order_id = '$id_num'";
            $_SESSION['buttonvar'] = $buttonvar;
            echo "Cancel $id_num";
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
