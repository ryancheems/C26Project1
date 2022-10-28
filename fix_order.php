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
       <?php if (!isset($_SESSION))
        {
          session_start();
        }
      ?>
    <form class="signup-form" method="post" action="process_order.php"  novalidate="novalidate">
        <div class="form-header">
          <h1>PAYMENT</h1>
        </div>

        <div class="form-body">

          <div class="horizontal-group">
            <!-- FIRST NAME err#1 -->
            <div class='form-group left'>   
              <label class='label-title' for='fname'>First name:</label><br>
              <input class='form-input' type='text' id='fname' name='fname' maxlength='25' value="<?php 
                
                #echo back 
                echo $_SESSION['fname'];
                
               ?>" 
              onkeypress='return /[A-Za-z]/i.test(event.key)' required='required'><br />
            <?php
              if (isset($_SESSION['error1'])){
                $error1 = $_SESSION['error1'];
                echo "<p>$error1</p>";
              }
              else;
            ?>
            </div>
            <!-- LAST NAME err#2 -->
            <div class='form-group right'>
              <label class='label-title' for='lname'>Last name:</label><br>
              <input class='form-input' type='text' id='lname' name='lname' maxlength='25' required='required' value="<?php echo $_SESSION['lname'] ?>"
              onkeypress='return /[A-Za-z]/i.test(event.key)'><br />
            <?php
              if (isset($_SESSION['error2'])){
                $error2 = $_SESSION['error2'];
                echo "<p>$error2</p>";
              }
              else;
              ?>
            </div>      
          </div>
        </div>
        <!-- EMAIL ADDRESS err#3 -->
        <div id='form-group'>
          <label id='label-email' class='label-email' for='email'>Email address:</label><br>
          <input class='form-input' type='email' id='email' name='email' required='required' value="<?php echo $_SESSION['email'] ?>"
          var email = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; >        
        <?php
              if (isset($_SESSION['error3'])){
                $error3 = $_SESSION['error3'];
                echo "<p>$error3</p>";
              }              
              else;
        ?>
        </div>
        <!-- STREET ADDRESS err#4 -->
        <fieldset>
          <legend>Address</legend>
          <div>
            <label class='title' for='sadd'>Street address</label><br>
            <input class='insert' type='text' id='sadd' name='sadd' maxlength='40' required='required' value="<?php echo $_SESSION['sadd'] ?>">
          <?php
              if (isset($_SESSION['error4'])){
                $error4 = $_SESSION['error4'];
                echo "<p>$error4</p>";
              }
              else;
          ?>
          </div>
          <!-- SUBURB/TOWN err#5 -->
          <div>
            <label class='title' for='st'>Suburb/town</label><br>
            <input class='insert' type='text' id='st' name='st' maxlength='20' required='required' pattern='{20}' value="<?php echo isset($_SESSION['st']) ? $_SESSION['st'] : ''; ?>">
          <?php
            if (isset($_SESSION['error5'])){
              $error5 = $_SESSION['error5'];
              echo "<p>$error5</p>";
            }
            else;
          ?>
          </div>
          <!-- STATE err#6 (N/A) -->
          <div id='choose'>
                  <p class='title'>State</p>
                  <?php $VIC= $_SESSION['VIC']; ?> 
                  <div class='ben-trai'>
                    <!-- VIC -->
                    <input type='radio' name='VIC' id='VIC' value='VIC' 
                    <?php 
                    if ($VIC == 'VIC'){
                      echo 'checked="checked"'; 
                    }
                    ?>>
                    <label for='VIC'>VIC</label><br>
                    <!-- NSW -->
                    <input type='radio' name='VIC' id='NSW' value='NSW' 
                    <?php 
                    if ($VIC == 'NSW'){
                      echo 'checked="checked"'; 
                    }
                    ?>>
                    <label for='NSW'>NSW</label><br>
                    <!-- QLD -->
                    <input type='radio' name='VIC' id='QLD' value='QLD'
                    <?php 
                      if ($VIC == 'QLD'){
                        echo 'checked="checked"'; 
                      }
                    ?>>
                    <label for='QLD'>QLD</label><br>
                      <!-- NT -->
                    <input type='radio' name='VIC' id='NT' value='NT'
                    <?php 
                    if ($VIC == 'NT'){
                      echo 'checked="checked"'; 
                    }
                    ?>>
                    <label for='NT'>NT</label><br>
                  </div>                  
                  <div class='ben-phai'>
                    <!-- WA -->
                    <input class='phai' type='radio' name='VIC' id='WA' value='WA'
                    <?php 
                    if ($VIC == 'WA'){
                      echo 'checked="checked"'; 
                    }
                    ?>>
                    <label class='phai' for='WA'>WA</label><br>
                    <!-- SA -->
                    <input class='phai' type='radio' name='VIC' id='SA' value='SA'
                    <?php 
                    if ($VIC == 'SA'){
                      echo 'checked="checked"'; 
                    }
                    ?>>
                    <label class='phai' for='SA'>SA</label><br>
                    <!-- TAS -->
                    <input class='phai' type='radio' name='VIC' id='TAS' value='TAS'
                    <?php 
                    if ($VIC == 'TAS'){
                      echo 'checked="checked"'; 
                    }
                    ?>>
                    <label class='phai' for='TAS'>TAS</label><br>
                    <!-- ACT -->
                    <input class='phai' type='radio' name='VIC' id='ACT' value='ACT'
                    <?php 
                    if ($VIC == 'ACT'){
                      echo 'checked="checked"'; 
                    }
                    ?>>
                    <label class='phai' for='ACT'>ACT</label><br>
                  </div>   
                  <!-- POSTCODE err#7 -->
                  <div>
                    <label id='pct' class='title' for='pc'>Postcode</label>
                    <input class='insert' type='text' id='pc' name='pc' pattern='^\d{4}$' required='required' value="<?php echo isset($_SESSION['pc']) ? $_SESSION['pc'] : ''; ?>"
                    maxlength='4'>
                  <?php
                    if (isset($_SESSION['error7'])){
                      $error7 = $_SESSION['error7'];
                      echo "<p>$error7</p>"; 
                    }
                    else;
                  ?>
                  </div> 
          <!-- PHONE NUMBER err#8 -->
          <label class='title' for='phone'>Phone number</label><br>
          <input class='insert' type='tell' id='phone' name='phone' 
            placeholder='(##) ####-####'
            pattern='\(\d{2}\) +\d{4}+-+\d{4}' required='required' value="<?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : ''; ?>">
          <?php
              if (isset($_SESSION['error8'])){
                $error8 = $_SESSION['error8'];  
                echo "<p>$error8</p>";
              }
              else;
          ?>    
                <!-- PREFERRED METHOD OF CONTACT err#9 (N/A) -->
                <p class='title'>Preferred contact:</p>
                <div>
                <input type='radio' name='e' id='e' value='e' checked='checked'
                <?php 
                    if ($_SESSION['contact'] == 'e'){
                      echo 'checked="checked"'; 
                    }
                    ?>>
                <label for='e'>email</label><br>
                </div>
                <div>
                <input type='radio' name='e' id='p' value='p'
                <?php 
                    if ($_SESSION['contact'] == 'p'){
                      echo 'checked="checked"'; 
                    }
                    ?>>
                <label for='p'>post</label><br>
                </div>
                <div>
                <input type='radio' name='e' id='ph' value='ph'
                <?php 
                    if ($_SESSION['contact'] == 'ph'){
                      echo 'checked="checked"'; 
                    }
                    ?>>
                <label for='ph'>phone</label><br>
                </div>
          <!-- PRODUCT SELECTION err#10 -->
          <p><label class='title' for='pd'>Product</label>
          <select name='pd' id='pd'>
          <option value='Luxury' <?php echo (isset($_SESSION['product']) && $_SESSION['product'] === 'Luxury') ? 'selected' : ''; ?>>Beetle ($1000)</option>
          <option value='Trucks' <?php echo (isset($_SESSION['product']) && $_SESSION['product'] === 'Trucks') ? 'selected' : ''; ?>>Low Rider ($1000)</option>
          <option value='Vans' <?php echo (isset($_SESSION['product']) && $_SESSION['product'] === 'Vans') ? 'selected' : ''; ?>>Ranger ($1000)</option>
          <?php 
              if (isset($_SESSION['error10'])){
                $error10 = $_SESSION['error10'];
                echo "<p>$error10</p>";
              }
              else;
          ?>
          </select>
          </p>
        <!-- PRODUCT FEATURES err#11 -->
        <p class="title">Product features</p>   
            <label><input type='checkbox' name='features[]'
            value='ori' <?php echo (isset($_SESSION['features']) && ($_SESSION["features"][0]=="ori") ? 'checked' : '');?>/>Classic</label>
            <label><input type='checkbox' name='features[]'
            value='spoiler' <?php echo (isset($_SESSION['features']) && ($_SESSION["features"][1]=="spoiler") ? 'checked' : '');?>/>Spoiler (+$500)</label>
            <label><input type='checkbox' name='features[]'
            value='leg' <?php echo (isset($_SESSION['features']) && ($_SESSION["features"][2]=="leg") ? 'checked' : '');?>/>Spider Legs (+$1250)</label>
            <label><input type='checkbox' name='features[]'
            value='roc' <?php echo (isset($_SESSION['features']) && ($_SESSION["features"][3]=="roc") ? 'checked' : '');?> />Rocket (+$1500)</label>
            <label><input type='checkbox' name='features[]'
            value='o' <?php echo (isset($_SESSION['features']) && ($_SESSION["features"][4]=="o") ? 'checked' : '');?> />Open Top (+$750)</label>
            <label><input type='checkbox' name='features[]'
            value='w' <?php echo (isset($_SESSION['features']) && ($_SESSION["features"][5]=="w") ? 'checked' : '');?> />Lowered Suspension (+$500)</label>
            <label><input type='checkbox' name='features[]'
            value='pool' <?php echo (isset($_SESSION['features']) && ($_SESSION["features"][6]=="pool") ? 'checked' : '');?> />Open Poolback (+$1000)</label>
            
          <?php

              if (isset($_SESSION['error11'])){
                $error11 = $_SESSION['error11'];
                echo "<p>$error11</p>";
              }
              else;
          ?>
                <p><label class='title' for='cfeild'>Comment field</label></p>
                <textarea id='cfeild' name='cfield' placeholder='Which specific aspects are you interested in?' required='required'></textarea><br>
             

        <br>
        <h1>PAYMENT FORM</h1>
        <!-- QUANTITY FIELD err#17 -->
        <form> 
          <label for='quantity'>Quantity</label>
          <input type='number' id='quantity' name='quantity' value="<?php echo $_SESSION['quantity'] ?>">
        </form>
        
        <?php
              if (isset($_SESSION['error17'])){
                $error17 = $_SESSION['error17'];
                echo "<p>$error17</p>";
              }
              else;
          ?>
        <!-- CARD TYPE err#12 -->
        <section>
                <p><label class='title' for='dp'>Credit card type</label>
                <select name='dp' id='dp'>
                <option value='Visa'  selected='selected'>Visa</option>
                <option value='Mastercard'>Mastercard</option>
                <option value='American Express'>American Express</option>
                </select>
                </p>
        </section>
        <?php
              if (isset($_SESSION['error12'])){
                $error12 = $_SESSION['error12'];
                echo "<p>$error12</p>";
              }
              else;
          ?>
          <!-- CARD NUMBER err#13 -->
          <section>
                <label class='title' for='cc-number'>Card number</label>
                <input id='cc-number' name='cc-number' autocomplete='cc-number' inputmode='numeric' pattern='[\d ]{10,30}' required>
          </section>
          <?php
              if (isset($_SESSION['error13'])){
                $error13 = $_SESSION['error13'];
                echo "<p>$error13</p>";
              }
              else;
          ?>
          <!-- NAME ON CARD err#14 -->
          <section>
                <label class='title' for='cc-name'>Name on card</label>
                <input id='cc-name' name='cc-name' autocomplete='cc-name' pattern='[\p{L} \-\.]+' required>
          </section>
          <?php
              if (isset($_SESSION['error14'])){
                $error14 = $_SESSION['error14'];
                echo "<p>$error14</p>";
              }
              else;
          ?>
        <!-- CARD EXPIRY err#15 -->
        <div>
              <label class='title' for='cc-exp'>Expiry date</label>
              <input id='cc-exp' name='cc-exp' autocomplete='cc-exp' placeholder='MM/YY' maxlength='5' required>
        </div>
        <section id="cc-exp-csc">
          <?php
              if (isset($_SESSION['error15'])){
                $error15 = $_SESSION['error15'];
                echo "<p>$error15</p>";
              }
              else;
          ?>
          <!-- SECURITY CODE err#16 -->
          <div>
                <label class='title' for='cc-csc'>Security code</label>
                <input id='cc-csc' name='cc-csc' autocomplete='cc-csc' inputmode='numeric' maxlength='3' required>
                <div class='explanation'>Back of card, last 3 digits</div>
          </div>
          <?php
              if (isset($_SESSION['error16'])){
                $error16 = $_SESSION['error16'];
                
                echo "<p>$error16</p>";
              }
              else;
          ?>
        </section>
            <input id="sm" type="submit" value="Check out" >
        </form>
        </fieldset>
    <?php
      echo $_SESSION['errMsg'];
    ?>
    </form>
      <?php include 'includes/footer.inc'; ?>
  </body>
</html>
