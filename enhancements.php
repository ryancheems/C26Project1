<!DOCTYPE html>
  <html lang = "en">

  <head>
    <link rel = "stylesheet" href ="styles/style.css">
	  <meta charset="UTF-8">
    <meta name="description" content="Assignment 1 - Enhancements - Page">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="Edited by h">
    <title> Enhancements </title>
  </head>
   <body>
	<?php include 'includes/header.inc'; ?>
     
	<p>Here is a description of a couple of enhancements (maximum of two) used in this website.</p>
	<table>
	  <tr>
	    <td><p><br/>Additional CSS properties:<br/><br/>
	On the <a href="index.html">index page</a> of the site the gif graphic uses a CSS Animation property, which allowed it to scroll continuously across the screen.<br/>
	This goes beyond the requirements of the assignment, as although the index page required a graphic, it was not required to make it animated, and CSS animations were not covered in the tutorials (not yet at least).<br/>
	      Code used to implement Feature:<br/>
	<img src="images/sourcecode1.png" alt="source code1"/>
	<br/>
	      <a href="https://css-tricks.com/creating-a-css-sliding-background-effect/">Technique source</a>
	</p></td>
		  <td><video  muted="true" width="100%" autoplay loop>  <source src="images/cssanim.mp4" type="video/mp4">Your browser does not support the video tag. </video></td>
	  </tr>
	  <tr>
	    <td><p><br/>Responsive CSS:<br/><br/>
	      On the <a href="product.html">products page</a>, Responsive CSS Design is implemented, allowing it to resize for mobile devices.<br/>
	This is beyond the basic requirements of the assignment and is a listed potential enhancement.
	      <br/>
		    Here is a sample of the CSS code used to implement the feature, note use of dynamic rather than fixed (vw, %, etc):<br/>
	      <img src="images/sourcecode2.png" alt="source code2"/></p></td>
	    <td><img src="images/mobile.png" alt="mobile"/></td>
	  </tr>
	</table>
  <?php include 'includes/footer.inc'; ?>
   </body>
</html>
