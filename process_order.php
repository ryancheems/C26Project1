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
    $cnum = sanitise_input($cnum);
    $cname = sanitise_input($cname);
    $cexp = sanitise_input($cexp);
    $ccsc = sanitise_input($ccsc);

	$errors = array("","","","","","","","","","","");
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
	session_start();
	$_SESSION = array();
	session_destroy();
    if ($errMsg==""){
        header ("location: receipt.php");
    }
    else {
	session_set_cookie_params(3600);
	session_start();
	 $i = 0;
	while ($i<count($errors)){
		if ($errors[$i] != ""){
			$errNum = $i+1;
			$_SESSION['error'.$errNum] = $errors[$i];
		}
		$i +=1;
	 } 
        header ("location: fix_order.php");
    }


?>
