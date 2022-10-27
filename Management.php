<!DOCTYPE html>
<html lang="en">
<head>
    <link href="styles/style.css" rel="stylesheet"/>   
    <link href="styles/style_enquire.css" rel="stylesheet"/>
    <meta charset="utf-8" />
    <meta name="description" content="Enquire" />
    <meta name="keywords" 	 content="HTML, CSS, Javascript" />
    <meta name="author"		 content="Thao Ngan Ngo" />
    <title>Enquire</title>
</head>
<body>
    	<?php include 'includes/header.inc'; ?>
        <?php 
        require_once "settings.php";
        $conn = mysqli_connect ($host, $user, $pwd, $sql_db);
        if ($conn) {
            echo "<p>Connection successful!</p>";
            $query = "SELECT * FROM Orders";
            $result = mysqli_query($conn, $query);

        if ($result)
            echo "<p>select successful.</p>";
            $record = mysqli_fetch_assoo ($result);

            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Hours</th></tr>";
            while ($record) {
                echo "<tr><td>{$record['orders']}</td>";
                echo "<td>{$record['order number']}</td>";
                echo "<td>{$record['order date']}</td>";
                echo "<td>{$record['fname']}</td>";
                echo "<td>{$record['lname']}</td>";
                echo "<td>{$record['email']}</td>";
                echo "<td>{$record['add']}</td>";
                echo "<td>{$record['st']}</td>";
                echo "<td>{$record['state']}</td>";
                echo "<td>{$record['pc']}</td>";
                echo "<td>{$record['phone']}</td>";
                echo "<td>{$record['contact']}</td>";
                echo "<td>{$record['product']}</td>";
                echo "<td>{$record['features']}</td>"; 
                echo "<td>{$record['cost']}</td>";
                $record = mysqli_fetch_assoo ($result);
            }
            echo "</table>";
            mysqli_free_result($result);
        }
        else
            echo "<p>No record</p>";
        ?>
        <?php include 'includes/footer.inc'; ?>
</body>
