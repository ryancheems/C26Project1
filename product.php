<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="styles/productstyle.css" rel="stylesheet">
  <link href="styles/style.css" rel="stylesheet">
</head>
<body>	
	<?php include 'includes/header.inc'; ?>
   <section class="textproducts">
  <h1>Products list</h1>
  <p><em>Let's Find What You’re Looking For.</em></p>
  <hr>
  </section>
  <section class="textproducts">
  <table class="table-text">
    <tr>
      <th>Beetle</th>
      <th>Low Rider</th>
      <th>Ranger</th>
    </tr>
    <tr>
      <td><a href="#1"><img src='images/Beetle.png' alt="Beetle Spoiler" class="responsive"></a></td>
      <td><a href="#2"><img src='images/Low Rider Open.png' alt="Low Rider" class="responsive"></a></td>
      <td><a href="#3"><img src="images/Ranger.png" alt="Ranger" class="responsive"></a></td>
    </tr>
  </table>  
  </section>
  <br>
  <hr>
  <section>
  <aside id="asideproducts">
    <p>Special <b>Discount</b> up to <b>20%</b> if you buy today!</p>
  </aside>
	  <p class="slogan"></p>
  </section>

  <hr>
  <section>
    <div id="1" class="products">
        <h2>The Beetle</h2>
        <table id="table1" class="table-text">
          <tr>
            <th>Base Model</th>
            <th>Spoiler Add-on</th>
            <th>Rocket Add-on</th>
            <th>Spider Legs Add-on</th>
          </tr>
          <tr>
          <td><img src="images/Beetle.png" alt="Beetle" class="responsive"></td>
          <td><img src="images/Beetle_Bigger_Spoiler.png" alt="Beetle Bigger" class="responsive"></td>
          <td><img src="images/Beetle_Rocket.png" alt="Beetle Rocket" class="responsive"></td>
          <td><img src="images/Beetle_Spider.png" alt="Beetle Spider"  class="responsive"></td>
          </tr>
          <tr>
          <td>
            <p><span class="tableh1">The Beetle</span></p>
            <p><span class="tableh2">1000 Beans</span></p>
            <p>Ah, the Beetle. A timeless classic, perfect for a sensible, affordable family car. Moderately fast, good handling, plenty of room. Available in a lovely shade of blue, and a diverse range of 3 options to add on. For the cheap price of only 1000 Beans! </p> <p>(small print: wheels not included) </p>
            <p>Options include: </p>
            <ol>
              <li>Spoiler <span class="green">+100 Beans</span> </li>
              <li>Rocket <span class="green">+500 Beans</span>  </li>
              <li>Spider Legs <span class="green">+1000 Beans </span> </li>
            </ol>
          </td>
          <td>
            <p><span class="tableh1">Beetle + Spoiler</span></p>
            <p><span class="tableh2">Costs an extra 100 Beans.</span></p>
            <p> For those who want to add a bit of flair to their Beetle. Improves speed and manoeuvrability.  </p>
            <ul>
                  <li>++ Speed </li>
                  <li>+++ Handling </li>
            </ul>
          </td>
          <td>
            <p><span class="tableh1">Beetle + Rocket</span></p>
            <p><span class="tableh2"> Costs an extra 500 Beans.</p>
            <p>For those who wish to go turbo crazy fast. Quite reckless, and difficult to control. Not advisable for old grannies and those of nervous disposition.  </p>
            <ul>
                  <li> ++++++++++ Speed  </li>
                  <li>- - - Handling  </li>
             </ul>
          </td>
          <td>
            <p><span class="tableh1">The Spider</span></p>
            <p><span class="tableh2">Costs an extra 1000 Beans.</span></p>
            <p> For the criminally insane. Just why? </p>
            <ul>
              <li>+ Clears Traffic </li>
              <li>- Arachnophobia </li>
            </ul>
          </td>
          </tr>
        </table>
    </div>
    <br><br><hr>
    <div id="2" class="products">
      
            <h2>The Low Rider</h2>

        <table id="table2" class="table-text">
          
		  <tr>
            <th>Base Model</th>
            <th>Rocket Add-on</th>
            <th>Convertible Roof</th>
            <th>Lowered Suspension</th>
          </tr>
		  
          <tr>
          <td><img src="images/Low Rider Close.png" alt="Low Rider"  class="responsive"></td>
          <td><img src="images/Low Rider CLow Rider Rocket.png" alt="Low Rider Rocket"  class="responsive"></td>
          <td><img src="images/Low Rider Open.png" alt="Low Rider Open" class="responsive"></td>
          <td><img src="images/Lowest Rider Close.png" alt="Low Rider Low Wheel" class="responsive" class="responsive"></td>
          </tr>
        
				 	  
		  <td>
      <p><span class="tableh1">The Low Rider</span></p>
      <p><span class="tableh2">1000 Beans</span></p>
			  <p>The aim of the low riders is to cruise as slowly as possible</p>
			  <p>Extremely good handling, but interior room is limited.</p>
                          <p>Available in a lovely pink. Offer 3 add-on to upgrade.</p>
		  </td>
		  
		  <td>
      <p><span class="tableh1">Low Rider + Rocket</span></p>
      <p><span class="tableh2">1750 Beans</span></p>
			  <p>Careful or else you’ll be flying.</p>
			  <p>Drastically improve speed with the cost of reduced handling.</p>
                          <p>Low ride hop + rocket = leaping through traffic</p>
		  </td>
		  
		  <td>
      <p><span class="tableh1">Low Rider Convertible</span></p>
      <p><span class="tableh2">1250 Beans</span></p>
		  <p>There is no actual advantage buying this. Just make it look way cooler :D</p>
		  </td>
		  
		  <td>
      <p><span class="tableh1">The Lowest Rider</span></p>
      <p><span class="tableh2">1500 Beans</span></p>
		  <p>The lowest rider! Probably can slide under a truck at this point</p>
		  </td>
		  
		</table>
    </div>
	
	
    <br><br><hr>
    <div id="3" class="products">
        
          <h2>The Ranger</h2>
        <table id="table3" class="table-text">
          <tr>
            <th>Base Model</th>
            <th>Poolback</th>
            <th>Rocket Add-on</th>
            <th>Openback</th>
          </tr>
		  
          <tr>
          <td><img src="images/Ranger.png" alt="Ranger" class="responsive"></td>
          <td><br><br><img src="images/Ranger Open Pool.png" alt="Ranger Open Pool" class="responsive"></td>
          <td><img src="images/Ranger Rocket.png" alt="Ranger Rocket" class="responsive"></td>
          <td><img src="images/Ranger Open.png" alt="Ranger Open" class="responsive"></td>
          </tr>
		  
		  <td>
      <p><span class="tableh1">The Ranger</span></p>
      <p><span class="tableh2">1000 Beans</span></p>
		  <p>The Ranger is off road for any occasion be it camping or fishing.</p>
		  </td>
		  
		  <td>
      <p><span class="tableh1">Ranger Poolback</span></p>
      <p><span class="tableh2">1750 Beans</span></p>
		  <p>If you really enjoy swimming but the beach is too far, you can swim on your way in the back of the ranger pool.</p>
		  </td>
		  
		  <td>
      <p><span class="tableh1">Ranger + Rocket</span></p>
      <p><span class="tableh2">1750 Beans</span></p>
		  <p>The ranger rocket will help you get up those steep mountains.</p>
		  </td>
		  
		  <td>
      <p><span class="tableh1">Ranger Openback</span></p>
      <p><span class="tableh2">1500 Beans</span></p>
		  <p>The open ranger is great for bringing your dog or having tools in your car.</p>
		  </td>
		  
        </table>
    </div>
  </section>
<?php include 'includes/footer.inc'; ?>
</body>
</html>
  <!--The page must contain: 
• Hierarchically structured headings of at least 2 levels 
• More than one <section> 
• An <aside> with appropriate content  
• At least one appropriate image related to your product 
. This image should be less 100kb so it does not take too long to load. 
• A table containing some data related to your product. 
• At least one ordered list 
• At least one unordered list 
• At least one image  -->
