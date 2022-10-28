<?php
    function sanitise_input ($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
    if (isset($_POST["fname"])){
        $fname = ($_POST["fname"]);
    }
	else{
        header ("location: payment.php");
        $fname = "";
    }
    if (isset($_POST["lname"])){
        $lname = ($_POST["lname"]);
    }
    else{
        $lname = "";
    }
    if (isset($_POST["email"])){
        $email = ($_POST["email"]);
    }
    else{
        $email = "";
    }
    if (isset($_POST["sadd"])){
        $sadd = ($_POST["sadd"]);
    }
    else{
        $sadd = "";
    }
    if (isset($_POST["st"])){
        $st = ($_POST["st"]);
    }
    else{
        $st = "";
    }
    if (isset($_POST["VIC"])){
        $state = ($_POST["VIC"]);
    }
    else{
        $state = "";
    }
    if (isset($_POST["pc"])){
        $pc = ($_POST["pc"]);
    }
    else{
        $pc = "";
    }
    if (isset($_POST["phone"])){
        $phone = ($_POST["phone"]);
    }
    else{
        $phone = "";
    }
    if (isset($_POST["e"])){
        $contact = ($_POST["e"]);
    }
    else{
        $contact = "";
    }
    if (isset($_POST["pd"])){
        $product = ($_POST["pd"]);
    }
    else{
        $product = "";
    }
    $features = "";
    if (isset($_POST["features"])){
        $features = ($_POST["features"]);
    }
    else{
        $features = "";
    }
    if (isset($_POST["dp"])){
        $ctype = ($_POST["dp"]);
    }
    else{
        $ctype = "";
    }
    if (isset($_POST["cc-number"])){
        $cnum = ($_POST["cc-number"]);
    }
    else{
        $cnum = "";
    }
    if (isset($_POST["cc-name"])){
        $cname= ($_POST["cc-name"]);
    }
    else{
        $cname = "";
    }
    if (isset($_POST["cc-exp"])){
        $cexp= ($_POST["cc-exp"]);
    }
    else{
        $cexp = "";
    }
    if (isset($_POST["cc-csc"])){
        $ccsc= ($_POST["cc-csc"]);
    }
    else{
        $ccsc = "";
    }
    $fname = sanitise_input($fname);
    $lname = sanitise_input($lname);
    $email = sanitise_input($email);
    $sadd = sanitise_input($sadd);
    $st = sanitise_input($st);
    $state = sanitise_input($state);
    $pc = sanitise_input($pc);
    $phone = sanitise_input($phone);
    $contact = sanitise_input($contact);
    $product = sanitise_input($product);
    $features = sanitise_input($features);
    $ctype = sanitise_input($ctype);
    $cnum = sanitise_input($cnum);
    $cname = sanitise_input($cname);
    $cexp = sanitise_input($cexp);
    $ccsc = sanitise_input($ccsc);

	$errors = array("","","","","","","","","","","","","");
    $errMsg = "";
    if ($fname=="") {
        $errMsg .= "<p>You must enter your first name.</p>";
	$errors[0] =  "<p>* You must enter your first name.</p>";
    }
    else if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
        $errMsg .= "<p>Only alpha letters allowed in first name.</p>";
	$errors[0] =  "<p>* Only alpha letters allowed in first name.</p>";    
    }
    else if (strlen($fname)>25) {
        $errMsg .= "<p>Length of first name must be under 25 letters</p>";
	$errors[0] =  "<p>* Length of first name must be under 25 letters.</p>";    
    }
	
    if ($lname=="") {
        $errMsg .= "<p>You must enter your last name.</p>";
	$errors[1] =  "<p>* You must enter your last name.</p>";    
    }
    else if (!preg_match("/^[a-zA-Z]*$/",$lname)) {
        $errMsg .= "<p>Only alpha letters allowed in last name.</p>";
	$errors[1] =  "<p>* Only alpha letters allowed in last name.</p>";     
    }
    else if (strlen($lname)>25) {
        $errMsg .= "<p>Length of last name must be under 25 letters</p>";
	$errors[1] =  "<p>* Length of last name must be under 25 letters.</p>";    
    }

    if ($email=="") {
	$errMsg .= "<p>Must enter email address<p>";
	$errors[2] = "<p>* Must enter email address<p>";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	$errMsg .= "<p>Invalid email format<p>";
	  $errors[2] = "<p>* Invalid email format<p>";
	}
    if ($sadd=="") {
	$errMsg .= "<p>Must enter street address<p>";
	$errors[3] = "<p>* Must enter street address<p>";
    }
    if ($st=="") {
	$errMsg .= "<p>Must enter suburb/town<p>";
	$errors[4] = "<p>* Must enter suburb/town<p>";
    }
    else if (!preg_match("/^[a-zA-Z]*$/",$st)) {
        $errMsg .= "<p>Only alpha letters allowed in suburb/town.</p>";
	$errors[4] =  "<p>* Only alpha letters allowed suburb/town.</p>";     
    }
    if ($state=="") {
	$errMsg .= "<p>Must enter state<p>";
	$errors[5] = "<p>* Must enter state<p>";
    }
    if ($pc=="") {
	$errMsg .= "<p>Must enter postcode<p>";
	$errors[6] = "<p>* Must enter postcode<p>";
    }
    else if (!preg_match("/^[0-9]*$/",$pc)) {
        $errMsg .= "<p>Only numbers allowed in postcode.</p>";
	$errors[6] =  "<p>* Only numbers allowed in postcode.</p>";   
    }
    else if (strlen($pc)!=4) {
        $errMsg .= "<p>Length of postcode should be 4 digits</p>";
	$errors[6] =  "<p>* Length of postcode should be 4 digits.</p>";    
    }
    if ($phone=="") {
	$errMsg .= "<p>Must enter phone number<p>";
	$errors[7] = "<p>* Must enter phone number<p>";
    }
    else if (!preg_match("/^[0-9]*$/",$phone)) {
        $errMsg .= "<p>Only numbers allowed in phone number.</p>";
	$errors[7] =  "<p>* Only numbers allowed in phone number.</p>";   
    }
    if ($contact=="") {
	$errMsg .= "<p>Must select preferred contact<p>";
	$errors[8] = "<p>* Must select preferred contact<p>";
    }
    if ($product=="") {
	$errMsg .= "<p>Must select product type<p>";
	$errors[9] = "<p>* Must select product type.<p>";
    }
    if ($features=="") {
	$errMsg .= "<p>Must select features<p>";
	$errors[10] = "<p>* Must select features.<p>";
    }
    if ($ctype=="") {
	$errMsg .= "<p>Must select card type<p>";
	$errors[11] = "<p>* Must select card type.<p>";
    }
	else{
		if ($cnum==""){
			$errMsg .= "<p>Must enter card number<p>";
			$errors[12] = "<p>* Must enter card number.<p>";
		}
		else {
			if ($ctype=="Visa"){
				if (strlen($cnum)!= 16){
					$errMsg .= "<p>Visa card should be 16 digits<p>";
					$errors[12] = "<p>* Visa card should be 16 digits.<p>";
				}
				else if ($cnum[0] != 4){
					$errMsg .= "<p>Visa card should start with 4<p>";
					$errors[12] = "<p>* Visa card should start with 4.<p>";
				}

			}
			else if ($ctype=="Mastercard"){
				if (strlen($cnum)!= 16){
					$errMsg .= "<p>Mastercard card should be 16 digits<p>";
					$errors[12] = "<p>* Mastercard card should be 16 digits.<p>";
				}
				else if ($cnum[0].$cnum[1] >= 51 && $cnum[0].$cnum[1] <= 55){
					$errMsg .= "<p>Mastercard card should start with 51-55<p>";
					$errors[12] = "<p>* Mastercard card should start with 51-55.<p>";
				}
			}
			else if ($ctype=="American Express"){
				if (strlen($cnum)!= 15){
					$errMsg .= "<p>American Express card should be 15 digits<p>";
					$errors[12] = "<p>* American Express card should be 15 digits.<p>";
				}
				else if (substr($cnum, 0, 2) == 34 || substr($cnum, 0, 2) == 37){
					$errMsg .= "<p>American Express card should start with 34 or 37<p>";
					$errors[12] = "<p>* American Express card should start with 34 or 37.<p>";
				}
			}
		}
	}
	session_start();
	$_SESSION = array();
	session_destroy();
    if ($errMsg==""){
	    require_once "settings.php";
	     $conn = @mysqli_connect($host,$user,$pwd,$sql_db);
	    if (!$conn) {
		// Displays an error message
		echo "<p>Database connection failure</p>";
	    } 
	    else {
		$query = "CREATE TABLE IF NOT EXISTS `orders` (
		    order_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		    order_status VARCHAR(40) NOT NULL ,
		    fname VARCHAR(25) NOT NULL,
		    lname VARCHAR(25) NOT NULL,
		    email VARCHAR(40) NOT NULL,
		    address VARCHAR(40) NOT NULL,
		    surburb VARCHAR(40) NOT NULL ,
		    state VARCHAR(40) NOT NULL ,
		    postcode VARCHAR(40) NOT NULL ,
		    phone INT NOT NULL,
		    contact VARCHAR(40) NOT NULL,
		    product VARCHAR(40) NOT NULL,
		    features VARCHAR(40) NOT NULL
		    )";
		$result = mysqli_query($conn, $query);

		if ($result) {
		    $insert_query = "INSERT INTO `orders` ( fname, lname, email, address, surburb, state, postcode, phone, contact, product, features)
			VALUES ( '$fname', '$lname', '$email', '$sadd', '$st', '$state', '$pc', '$phone', '$contact', '$product', '$features')";
		    $insert_result = mysqli_query($conn, $insert_query);
		    if ($insert_result) {
			echo "<p>Insert successful.</p>"; 
		    }
		    else {
			echo "<p>insert not successfull.</p>";
		    }
		}
		else {
		    echo "<p>Create table unsuccessful.</p>";
		}
		mysqli_close($conn);
	    }

		  session_set_cookie_params(3600);
		 session_start();
		$_SESSION['fname'] = $fname;
		  $_SESSION['lname'] = $lname;
		  $_SESSION['email'] = $email;
		  $_SESSION['address'] = $sadd;
		  $_SESSION['suburb'] = $st;
		  $_SESSION['state'] = $state;
		  $_SESSION['postcode'] = $pc;
		  $_SESSION['phone'] = $phone;
		  $_SESSION['contact'] = $contact;
		  $_SESSION['product'] = $product;
		  $_SESSION['features'] = $features;
		  $_SESSION['ctype'] = $ctype;
		  $_SESSION['cnum'] = $cnum;
		header ("location: receipt.php");
    }
    else {
	session_set_cookie_params(3600);
	session_start();
	 $i = 0;
	while ($i<count($errors)){
		if ($errors[$i] != ""){
			$errNum = $i+1;
			$err = "<section class = 'red'>".$errors[$i]."</section>";
			$_SESSION['error'.$errNum] = $err;
		}
		$i +=1;
	 } 
        header ("location: fix_order.php");
    }


?>
