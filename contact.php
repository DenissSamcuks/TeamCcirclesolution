<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="page2.css" rel="stylesheet" type=text/css>
    <script type="text/javascript" src="email.js"></script>
    <script src="main.js" defer type="text/javascript"></script>
    <title>Circle Solutions</title>
</head>
<body>
<header>
    <div class="nav-wrapper">
        <div class="left-side">
            <div>
                <img src="img/logo.png" title="logo" alt="logo" width="195px" height="65px">
            </div>
        </div>

        <ul id="navigation" data-visible="false" class="navigation">
            <li><a href="index.html" class="style">Home</a></li>
            <li><a href="reviews.html" class="style">Reviews</a></li>
            <li><a href="values.html" class="style">Values</a></li>
            <li><a href="contact.php" class="style">Contact</a></li>
            <li><a href="faq.html" class="style">FAQ</a></li>
            <li><a href="Packages.php"><button class="button button1">Our Packages</button></a></li>
        </ul>

        <button class="mobile-nav-toggle" aria-controls="navigation" aria-expanded="false"><span class="sr-only"></span>
        </button>
</header>

<div class="pusto">
</div>

<div class="We’d">
    <h1 class="We’dh1">We’d Love to hear from you</h1>
    <div class="We’dh1">
        <p class="psize">if you have a question about features, trials,</p> <p class="psize">pricing, need a demo or anything else, our team</p>
    </div>
    <div class="We’dh1">
        <p class="psize" >is ready to answer all your questions</p>
    </div>

    <div class="getbut">
        GET IN TOUCH
    </div>
</div>

<div id="main">
    <div class="Contactus">
        <h2 style="font-size: 30px">Contact Us</h2>
    </div>


    <div class="needtocallus">
        <div class="leftbox">
            <h2 class="needtocallush2">Need to call us?</h2>
            <div class="needtocallusp">
                <p>Are there any problems or</p>
                <p>questions you have? Don’t</p>
                <p>be afraid to call us on this</p>
                number:
            </div>
            <img src="whatsapp.png" alt="img" height="33px" width="33px" style="margin-top: 20px"></a><br>
            <p style="margin-bottom: 10px"  >+31 6 0000 0000</p>
        </div>

        <div class="rightbox">
            <h2 class="needtocallush2">Contact us on
                <p>social media</p></h2>
            <div class="pic">
                <a href="https://www.instagram.com/"><img src="insta.png" alt="img" height="60px" width="60px" style="margin-right: 20px"></a>
                <a href="https://www.facebook.com/"><img src="facebook.png" alt="img" height="60px" width="60px"></a>
                <a href="https://twitter.com/"><img src="twitter.png" alt="img" height="60px" width="60px" style="margin-left: 20px"></a>
            </div>
        </div>
    </div>
</div>

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