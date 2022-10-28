<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    session_start();
    function sanitise_input ($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
    if (isset($_POST["fname"])){
        $fname = ($_POST["fname"]);
        $_SESSION["fname"] = $fname;
    }
	else{
        header ("location: payment.php");   
        $fname = "";
    }
    if (isset($_POST["lname"])){
        $lname = ($_POST["lname"]);
        $_SESSION["lname"] = $lname;
    }
    else{
        $lname = "";
    }
    if (isset($_POST["email"])){
        $email = ($_POST["email"]);
        $_SESSION["email"] = $email;
    }
    else{
        $email = "";
    }
    if (isset($_POST["sadd"])){
        $sadd = ($_POST["sadd"]);
        $_SESSION["sadd"] = $sadd;
    }
    else{
        $sadd = "";
    }
    if (isset($_POST["st"])){
        $st = ($_POST["st"]);
        $_SESSION["st"] = $st;
    }
    else{
        $st = "";
    }
    if (isset($_POST["VIC"])){
        $state = ($_POST["VIC"]);
        $_SESSION["VIC"] = $state;
    }
    else{
        $state = "";
    }
    if (isset($_POST["pc"])){
        $pc = ($_POST["pc"]);
        $_SESSION["pc"] = $pc;
    }
    else{
        $pc = "";
    }
    if (isset($_POST["phone"])){
        $phone = ($_POST["phone"]);
        $_SESSION["phone"] = $phone;
    }
    else{
        $phone = "";
    }
    if (isset($_POST["e"])){
        $contact = ($_POST["e"]);
        $_SESSION["contact"] = $contact;
    }
    else{
        $contact = "";
    }
    if (isset($_POST["pd"])){
        $product = ($_POST["pd"]);
        $_SESSION["product"] = $product;
    }
    else{
        $product = "";
    }

    $features = array("0","0","0","0","0","0","0");
    $totalcost = 1000;
    if (!empty($_POST["features"])){
        foreach ($_POST["features"] as $value)
            if ($value == "ori"){
                $features[0] = "ori";}
            if ($value == "spoiler"){
                $totalcost += 500;
                $features[1] = "spoiler";}
            if ($value == "leg"){
                $totalcost += 1250;
                $features[2] = "leg";}
            if ($value == "roc"){
                $totalcost += 1500;
                $features[3] = "roc";}
            if ($value == "o"){
                $totalcost += 750;
                $features[4] = "o";}
            if ($value == "w"){
                $totalcost += 500;
                $features[5] = "w";}
            if ($value == "pool"){
                $totalcost += 1000;
                $features[6] = "pool";}
        $_SESSION["features"] = $features;
        $_SESSION["totalcost"] = $totalcost;
    }
    else{
        $features = "";
        $_SESSION["totalcost"] = $totalcost;
    }
    if (isset($_POST["dp"])){
        $ctype = ($_POST["dp"]);
        $_SESSION["ctype"] = $ctype;
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
    if (isset($_POST["quantity"])){
        $quantity= ($_POST["quantity"]);
        $_SESSION['quantity'] = $quantity;
    }
    else{
        $quantity = "";
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
    $quantity = sanitise_input($quantity);

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
				else if (!(substr($cnum, 0, 2) >= 51 && substr($cnum, 0, 2) <= 55)){
					$errMsg .= "<p>Mastercard card should start with 51-55<p>";
					$errors[12] = "<p>* Mastercard card should start with 51-55.<p>";
				}
			}
			else if ($ctype=="American Express"){
				if (strlen($cnum)!= 15){
					$errMsg .= "<p>American Express card should be 15 digits<p>";
					$errors[12] = "<p>* American Express card should be 15 digits.<p>";
				}
				else if (!(substr($cnum, 0, 2) == 34 || substr($cnum, 0, 2) == 37)){
					$errMsg .= "<p>American Express card should start with 34 or 37<p>";
					$errors[12] = "<p>* American Express card should start with 34 or 37.<p>";
				}
			}
		}
	}
    if ($cname=="") {
	$errMsg .= "<p>Must enter card name<p>";
	$errors[13] = "<p>* Must enter card name.<p>";
    }
    else if (!preg_match("/^[a-zA-Z]*$/",$cname)) {
        $errMsg .= "<p>Only alpha letters allowed in card name.</p>";
	$errors[13] =  "<p>* Only alpha letters allowed in card name.</p>";    
    }
    if ($cexp=="") {
	$errMsg .= "<p>Must enter card expiry date<p>";
	$errors[14] = "<p>* Must enter card expiry date.<p>";
    }
    else if (!preg_match("/^(0[1-9]|1[0-2])\/\d{2}$/",$cexp)) {
        $errMsg .= "<p>Card Expiry must be in MM / YY Format.</p>";
	$errors[14] =  "<p>* Card Expiry must be in MM / YY Format.</p>";    
    }
    if ($ccsc=="") {
	$errMsg .= "<p>Must enter CVV<p>";
	$errors[15] = "<p>* Must enter enter CVV<p>";
    }
    else if (!preg_match("/^[0-9]*$/",$ccsc)) {
        $errMsg .= "<p>Only numbers allowed in CVV.</p>";
	$errors[15] =  "<p>* Only numbers allowed in CVV.</p>";   
    }
    else if (strlen($ccsc)!=4) {
        $errMsg .= "<p>Length of CVV should be 3 digits</p>";
	$errors[15] =  "<p>* Length of CVV should be 3 digits.</p>";    
    }
    if ($quantity=="") {
	$errMsg .= "<p>Must enter quantity<p>";
	$errors[16] = "<p>* Must enter enter quantity<p>";
    }
    else if (!preg_match("/^[0-9]*$/",$quantiy)) {
        $errMsg .= "<p>Quantity must be a number.</p>";
	$errors[16] =  "<p>* Quantity must be a number.</p>";   
    }

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
