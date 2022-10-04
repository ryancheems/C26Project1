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
     <div class="navbar">
      <a href="index.html">HOME</a>      
      <div class="dropdown">
        <button class="dropbtn">PRODUCTS
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="product.html">SEE ALL PRODUCTS</a>
          <a href="product.html#1">Beetle</a>
          <a href="product.html#2">Lowrider</a>
          <a href="product.html#3">Ranger</a>
        </div>
      </div>
      <a href="enquire.html">ENQUIRE</a>
      <a href="about.html">ABOUT</a>
      <a href="enhancements.html">ENHANCEMENTS</a>
    </div>
    
    <form class="signup-form" method="post" action="https://mercury.swin.edu.au/it000000/formtest.php">
        <div class="form-header">
          <h1>Product Enquiry</h1>
        </div>

        <div class="form-body">

          <div class="horizontal-group">
            <div class="form-group left">
              <label class="label-title" for="fname">First name:</label><br>
              <input class="form-input" type="text" id="fname" name="fname" maxlength="25"
              onkeypress="return /[A-Za-z]/i.test(event.key)" required="required"><br />
            </div>
          
            <div class="form-group right">
              <label class="label-title" for="lname">Last name:</label><br>
              <input class="form-input" type="text" id="lname" name="lname" maxlength="25" required="required"
              onkeypress="return /[A-Za-z]/i.test(event.key)"><br />
            </div>
          </div>
        </div>

        <div id="form-group">
          <label id="label-email" class="label-title" for="email">Email address:</label><br>
          <input class="form-input" type="email" id="email" name="email" required="required"
          var email = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/; ><br />
        </div>

        <fieldset>
          <legend>Address</legend>
            <div>
              <label class="title" for="sadd">Street address</label><br>
              <input class="insert" type="text" id="sadd" name="sadd" maxlength="40" required="required">
            </div>
          
            <div>
              <label class="title" for="st">Suburb/town</label><br>
              <input class="insert" type="text" id="st" name="st" maxlength="20" required="required" pattern="{20}" >
            </div>

            <div id="choose">
              <p class="title">State</p>
              <div class="ben-trai">
                <input type="radio" name="VIC" id="VIC" value="VIC" checked="checked">
                <label for="VIC">VIC</label><br>

                <input type="radio" name="VIC" id="NSW" value="NSW">
                <label for="NSW">NSW</label><br>

                <input type="radio" name="VIC" id="QLD" value="QLD">
                <label for="QLD">QLD</label><br>

                <input type="radio" name="VIC" id="NT" value="NT">
                <label for="NT">NT</label><br>
              </div>

              <div class="ben-phai">
                <input class="phai" type="radio" name="VIC" id="WA" value="WA">
                <label class="phai" for="WA">WA</label><br>

                <input class="phai" type="radio" name="VIC" id="SA" value="SA">
                <label class="phai" for="SA">SA</label><br>

                <input class="phai" type="radio" name="VIC" id="TAS" value="TAS">
                <label class="phai" for="TAS">TAS</label><br>

                <input class="phai" type="radio" name="VIC" id="ACT" value="ACT">
                <label class="phai" for="ACT">ACT</label><br>
              </div>
            </div>

            <div>
              <label id="pct" class="title" for="pc">Postcode</label>
              <input class="insert" type="text" id="pc" name="pc" pattern="^\d{4}$" required="required"
              maxlength="4">
            </div>

          <label class="title" for="phone">Phone number</label><br>
          <input class="insert" type="tell" id="phone" name="phone" 
          placeholder="(##) ####-####"
          pattern="\(\d{2}\) +\d{4}+-+\d{4}" required="required">

          <p class="title">Preferred contact:</p>
          <div>
            <input type="radio" name="e" id="e" value="e" checked="checked">
            <label for="e">email</label><br>
          </div>

          <div>
            <input type="radio" name="e" id="p" value="p">
            <label for="p">post</label><br>
          </div>

          <div>
            <input type="radio" name="e" id="ph" value="ph">
            <label for="ph">phone</label><br>
          </div>

        <p><label class="title" for="pd">Product</label>
        <select name="pd" id="pd">
          <option value="Luxury"  selected="selected">Beetle</option>
          <option value="Trucks">Low Rider</option>
          <option value="Vans">Ranger</option>
        </select>
        </p>

        <p class="title">Product features</p>
        
          <label><input type="checkbox" name="features"
          value="ori" checked="checked"/>Classic</label>
          <label><input type="checkbox" name="features"
          value="spoiler" />Spoiler</label>
          <label><input type="checkbox" name="features"
          value="leg" />Spider Legs</label>
          <label><input type="checkbox" name="features"
          value="roc" />Rocket</label>
          <label><input type="checkbox" name="features"
          value="o" />Open</label>
          <label><input type="checkbox" name="features"
          value="w" />Low Wheel</label>
          <label><input type="checkbox" name="features"
          value="pool" />Open Pool</label>
        

        <p><label class="title" for="cfeild">Comment field</label></p>
        <textarea id="cfeild" name="cfield" placeholder="Which specify paticular aspect you are interested in" required="required"></textarea><br>

        <input id="sm" type="submit" value="Submit">
        </fieldset>
    
    </form>
       <footer>
     <p> Website by: </p>
     <p><br /> Carlos Williams - <a href = "mailto:104246730@student.swin.edu.au">104246730@student.swin.edu.au</a></p>
     <p> Bao An - <a href = "mailto:103485260@student.swin.edu.au">103485260@student.swin.edu.au</a></p>
     <p> Halim Vlahos - <a href = "mailto:104015943@student.swin.edu.au">104015943@student.swin.edu.au</a></p>
     <p> Ngo Thao Ngan - <a href = "mailto:104055130@student.swin.edu.au">104055130@student.swin.edu.au</a></p>
     <p> Ryan Chee - <a href = "mailto:104249483@student.swin.edu.au">104249483@student.swin.edu.au</a></p>
    </footer>
  </body>
</html>