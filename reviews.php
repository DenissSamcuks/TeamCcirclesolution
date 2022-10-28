<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Circle Solutions</title>
  <link rel="stylesheet" type="text/css" href="reviews.css">
  <script src="main.js" defer type="text/javascript"></script>
  <script src="email.js" defer type="text/javascript"></script>
</head>

<body>

  <header>
    <div class="nav-wrapper">
      <div class="left-side">
         <div>
           <img src="logo.png" title="logo" alt="logo" width="195px" height="65px">
         </div>
       </div>

      <ul id="navigation" data-visible="false" class="navigation">
          <li><a href="index.html" class="style active">Home</a></li>
          <li><a href="reviews.html" class="style">Reviews</a></li>
          <li><a href="values.html" class="style">Values</a></li>
          <li><a href="contact.html" class="style">Contact</a></li>
          <li><a href="faq.html" class="style">FAQ</a></li>
          <li><a href="Packages.html"><button class="button button1">Our Packages</button></a></li>
        </ul>

        <button class="mobile-nav-toggle" aria-controls="navigation" aria-expanded="false"><span class="sr-only"></span>
        </button>
  </header>

	<main>
	
	<div class="container">
	<div class="text-container">
	<h1> Reviews </h1>
	<h2>“A user friendly, customizable platform for communication and shared work spaces. Easy to create a customized internal platform for company communications, news, and resources for employee needs through pre-built templates”</h2>
	<h3>John Dough<br>
	Senior Operations Coordinator – Cookiegenerator inc.</h3>
	
	<h2>“The ability to quickly communicate and scale collaboration is second to none. Users across the globe can receive information, connect and collaborate in real time – answer questions quickly and publicly to avoid duplicative emails.”</h2>
	<h3>Petty Dwarves<br>
		Director of Marketing and Communications – Little Cloths ltd.</h3>
		
	<h2>“Our onboarding experience has greatly improved thanks to Happeo’s Pages. Instead of having a quick meeting and sending out slides to new employees, we now have an entire Page they can easily refer to.”</h2>
	<h3>Halluci Absinthe<br>
		People Operations Manager – Green Fairy Company</h3>
		
	</div>
		
		<div id="reviewImage">
		<img src="online review.png">
		</div>
	
	</div>
	</main>
	

<footer>
    <div class="footer-wrap">
		<div class="subscribe">
        <h2 id="newsletter">Newsletter</h2>
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