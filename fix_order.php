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

    <form class="signup-form" method="post" action="process_order.php"  novalidate="novalidate">
        <div class="form-header">
          <h1>PAYMENT</h1>
        </div>

        <div class="form-body">

          <div class="horizontal-group">
            <?php
              session_start();
              if (isset($_SESSION['error1'])){
                $error1 = $_SESSION['error1'];
              
                echo "<div class='form-group left'> 
                <p>$error1</p>
                <label class='label-title' for='fname'>First name:</label><br>
                <input class='form-input' type='text' id='fname' name='fname' maxlength='25'
                onkeypress='return /[A-Za-z]/i.test(event.key)' required='required'><br />
                </div>";
              }
              else;
              ?>
              <?php
              if (isset($_SESSION['error2'])){
                $error2 = $_SESSION['error2'];
              
                echo "<div class='form-group right'>
                <p>$error2</p>
                <label class='label-title' for='lname'>Last name:</label><br>
                <input class='form-input' type='text' id='lname' name='lname' maxlength='25' required='required'
                onkeypress='return /[A-Za-z]/i.test(event.key)'><br />
                </div>";
              }
              else;
              ?>      
          </div>
        </div>
        <?php
              if (isset($_SESSION['error3'])){
                $error3 = $_SESSION['error3'];
              
                echo "<div id='form-group'>
                <p>$error3</p>
                <label id='label-email' class='label-title' for='email'>Email address:</label><br>
                <input class='form-input' type='email' id='email' name='email' required='required'
                var email = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; ><br />
                </div>";
              }
              else;
              ?>
        
        <fieldset>
          <legend>Address</legend>
          <?php
              if (isset($_SESSION['error4'])){
                $error4 = $_SESSION['error4'];
                
                echo "<div>
                <p>$error4</p>
                <label class='title' for='sadd'>Street address</label><br>
                <input class='insert' type='text' id='sadd' name='sadd' maxlength='40' required='required'>
                </div>";
              }
              else;
          ?>
          <?php
              if (isset($_SESSION['error5'])){
                $error5 = $_SESSION['error5'];
                
                echo "<div>
                <p>$error5</p>
                <label class='title' for='st'>Suburb/town</label><br>
                <input class='insert' type='text' id='st' name='st' maxlength='20' required='required' pattern='{20}' >
                </div>";
              }
              else;
          ?>    
          <?php
              if (isset($_SESSION['error6'])){
                $error6 = $_SESSION['error6'];
                
                echo 
                "<div id='choose'>
                  <p>$error6</p>
                  <p class='title'>State</p>
                  <div class='ben-trai'>
                    <input type='radio' name='VIC' id='VIC' value='VIC' checked='checked'>
                    <label for='VIC'>VIC</label><br>
    
                    <input type='radio' name='VIC' id='NSW' value='NSW'>
                    <label for='NSW'>NSW</label><br>
    
                    <input type='radio' name='VIC' id='QLD' value='QLD'>
                    <label for='QLD'>QLD</label><br>
    
                    <input type='radio' name='VIC' id='NT' value='NT'>
                    <label for='NT'>NT</label><br>
                  </div>";
              }
              else;
          ?>     
          <?php
              if (isset($_SESSION['error7'])){
                $error7 = $_SESSION['error7'];
                
                echo "<div class='ben-phai'>
                <p>$error7</p>
                <input class='phai' type='radio' name='VIC' id='WA' value='WA'>
                <label class='phai' for='WA'>WA</label><br>

                <input class='phai' type='radio' name='VIC' id='SA' value='SA'>
                <label class='phai' for='SA'>SA</label><br>

                <input class='phai' type='radio' name='VIC' id='TAS' value='TAS'>
                <label class='phai' for='TAS'>TAS</label><br>

                <input class='phai' type='radio' name='VIC' id='ACT' value='ACT'>
                <label class='phai' for='ACT'>ACT</label><br>
                </div>";
              }
              else;
          ?>    
          <?php
              if (isset($_SESSION['error8'])){
                $error8 = $_SESSION['error8'];
                
                echo "<div>
                <p>$error8</p>
                <label id='pct' class='title' for='pc'>Postcode</label>
                <input class='insert' type='text' id='pc' name='pc' pattern='^\d{4}$' required='required'
                maxlength='4'>
                </div>";
              }
              else;
          ?>    
          <?php
              if (isset($_SESSION['error9'])){
                $error9 = $_SESSION['error9'];
                
                echo "<p>$error9</p>
                <label class='title' for='phone'>Phone number</label><br>
                <input class='insert' type='tell' id='phone' name='phone' 
                placeholder='(##) ####-####'
                pattern='\(\d{2}\) +\d{4}+-+\d{4}' required='required'>";
              }
              else;
          ?>
          <?php
              if (isset($_SESSION['error10'])){
                $error10 = $_SESSION['error10'];
                
                echo "<p>$error10</p>
                <label class='title' for='phone'>Phone number</label><br>
                <input class='insert' type='tell' id='phone' name='phone' 
                placeholder='(##) ####-####'
                pattern='\(\d{2}\) +\d{4}+-+\d{4}' required='required'>";
              }
              else;
          ?>        
          <?php
              if (isset($_SESSION['error11'])){
                $error11 = $_SESSION['error11'];
                
                echo "<p>$error11</p>
                <p class='title'>Preferred contact:</p>
                <div>
                <input type='radio' name='e' id='e' value='e' checked='checked'>
                <label for='e'>email</label><br>
                </div>
                <div>
                <input type='radio' name='e' id='p' value='p'>
                <label for='p'>post</label><br>
                </div>
                <div>
                <input type='radio' name='e' id='ph' value='ph'>
                <label for='ph'>phone</label><br>
                </div>";
              }
              else;
          ?>        
          <?php
              if (isset($_SESSION['error12'])){
                $error12 = $_SESSION['error12'];
                
                echo "<p>$error12</p>
                <p><label class='title' for='pd'>Product</label>
                <select name='pd' id='pd'>
                <option value='Luxury'  selected='selected'>Beetle</option>
                <option value='Trucks'>Low Rider</option>
                <option value='Vans'>Ranger</option>
                </select>
                </p>";
              }
              else;
          ?>
        <p class="title">Product features</p>   
          <?php
              if (isset($_SESSION['error13'])){
                $error13 = $_SESSION['error13'];
                
                echo "<p>$error13</p>
                  <label><input type='checkbox' name='features'
                  value='ori' checked='checked'/>Classic</label>
                  <label><input type='checkbox' name='features'
                  value='spoiler' />Spoiler</label>
                  <label><input type='checkbox' name='features'
                  value='leg' />Spider Legs</label>
                  <label><input type='checkbox' name='features'
                  value='roc' />Rocket</label>
                  <label><input type='checkbox' name='features'
                  value='o' />Open</label>
                  <label><input type='checkbox' name='features'
                  value='w' />Low Wheel</label>
                  <label><input type='checkbox' name='features'
                  value='pool' />Open Pool</label>";
              }
              else;
          ?> 
          <?php
              if (isset($_SESSION['error14'])){
                $error14 = $_SESSION['error14'];
                
                echo "<p>$error14</p>
                <p><label class='title' for='cfeild'>Comment field</label></p>
                <textarea id='cfeild' name='cfield' placeholder='Which specify paticular aspect you are interested in' required='required'></textarea><br>";
              }
              else;
          ?>

        <br>
        <h1>PAYMENT FORM</h1>
        <?php
              if (isset($_SESSION['error14'])){
                $error14 = $_SESSION['error14'];
                
                echo "<section>
                <p>$error14</p>
                <p><label class='title' for='dp'>Credit card type</label>
                <select name='dp' id='dp'>
                <option value='Visa'  selected='selected'>Visa</option>
                <option value='Mastercard'>Mastercard</option>
                <option value='American Express'>American Express</option>
                </select>
                </p>
                </section>";
              }
              else;
          ?>
          <?php
              if (isset($_SESSION['error15'])){
                $error15 = $_SESSION['error15'];
                
                echo "<section>
                <p>$error15</p>
                <label class='title' for='cc-number'>Card number</label>
                <input id='cc-number' name='cc-number' autocomplete='cc-number' inputmode='numeric' pattern='[\d ]{10,30}' required>
                </section>";
              }
              else;
          ?>
          <?php
              if (isset($_SESSION['error16'])){
                $error16 = $_SESSION['error16'];
                
                echo "<section>
                <p>$error16</p>
                <label class='title' for='cc-name'>Name on card</label>
                <input id='cc-name' name='cc-name' autocomplete='cc-name' pattern='[\p{L} \-\.]+' required>
                </section>";
              }
              else;
          ?>
          <?php
              if (isset($_SESSION['error17'])){
                $error17 = $_SESSION['error17'];
                
                echo "<section>
                <p>$error17</p>
                <label class='title' for='cc-name'>Name on card</label>
                <input id='cc-name' name='cc-name' autocomplete='cc-name' pattern='[\p{L} \-\.]+' required>
                </section>";
              }
              else;
          ?>



        <section id="cc-exp-csc">
          <?php
              if (isset($_SESSION['error18'])){
                $error18 = $_SESSION['error18'];
                
                echo "<div>
                <p>$error18</p>
                <label class='title' for='cc-exp'>Expiry date</label>
                <input id='cc-exp' name='cc-exp' autocomplete='cc-exp' placeholder='MM/YY' maxlength='5' required>
                </div>";
              }
              else;
          ?>
          <?php
              if (isset($_SESSION['error19'])){
                $error19 = $_SESSION['error19'];
                
                echo "<div>
                <p>$error19</p>
                <label class='title' for='cc-csc'>Security code</label>
                <input id='cc-csc' name='cc-csc' autocomplete='cc-csc' inputmode='numeric' maxlength='3' required>
                <div class='explanation'>Back of card, last 3 digits</div>
                </div>";
              }
              else;
          ?>
        </section>
            <input id="sm" type="submit" value="Check out" >
        </form>
        </fieldset>
    
    </form>
      <?php include 'includes/footer.inc'; ?>
  </body>
</html>
