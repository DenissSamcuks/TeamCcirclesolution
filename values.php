<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Circle Solutions</title>
  <link rel="stylesheet" type="text/css" href="values.css">
  <script type="text/javascript" src="email.js"></script>
  <script src="main.js" defer type="text/javascript"></script>
</head>

<body>

  <header>
    <div id="nav-wrapper">
      <div class="left-side">
         <div>
           <img src="img/logo.png" title="logo" alt="logo" width="195px" height="65px">
         </div>
       </div>

      <ul id="navigation" data-visible="false" class="navigation">
          <li><a href="index.php" class="style active">Home</a></li>
          <li><a href="reviews.php" class="style">Reviews</a></li>
          <li><a href="values.php" class="style">Values</a></li>
          <li><a href="contact.php" class="style">Contact</a></li>
          <li><a href="faq.php" class="style">FAQ</a></li>
          <li><a href="Packages.php"><button class="button button1">Our Packages</button></a></li>
        </ul>

        <button class="mobile-nav-toggle" aria-controls="navigation" aria-expanded="false"><span class="sr-only"></span>
        </button>
  </header>
  
  <main>

  	<div class="container">

<div class="text-container">

	<div class="val">
		<h1> Values </h1>
	</div>

			<div class="padd">
			<h2> Down to Earth </h2>
			<p> We  love to keep things simple, No big gestures, no theathre or promising Utopias </p>
			</div>
	
			<div class="padd">
			<h2> Quality Driven </h2>
			<p> Our profesionalism doesn't follow hypes: it follows quality. We believe in ever growing and striving for the best. </p>
			</div>
	
			<div class="padd">
			<h2> User friendly </h2>
			<p> With our soluition we build bridges between user and systems. </p>
			</div>
	</div>
	
	<div class="img-size">
		<img src="img/values.png">
	</div>

</div>
  
  </main>

  <footer>
    <div class="footer-wrap">
		<div class="subscribe">
        <h2>Newsletter</h2>
        <p class="merge">Want to know what we’re up to? <br> Sign up for the newsletter and join our tribe</p>
        <button class="open-button" onclick="openForm()">Subscribe</button>
        <div class="form-popup" id="myForm">
            <form action="#" class="form-container">
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder=" Your name" name="name" required>

                <label for="email"><b>E-mail</b></label>
                <input type="text" placeholder=" Your E-mail" name="email" required>

                <button type="submit" class="btn">Send</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
        </div>
		
		
		<div class="footer-right">
		<div class="footer-social">
   <a href="https://www.instagram.com/"><img class="items2" src="img/instagram.png"></a>
    <a href="https://www.facebook.com/"><img class="items2" src="img/facebook.png"></a>
	   <a href="https://www.twitter.com/"><img class="items2" src="img/twitter.png"></a>
	  </div>
	  <p> &#169; 2022, All rights reserved </p>
  </div>
		</div>
	</div>
  </footer>

</body>

</html>