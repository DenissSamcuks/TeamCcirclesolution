<!DOCTYPE html>
<html lang="en">
<head>
    <link href="footer.css" rel="stylesheet" type=text/css>
    <script type="text/javascript" src="email.js"></script>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<header>
    <div class="container">
        <div class="containerimg">
            <a href=""><img src="img.png" alt="img" height="65px", width="195px"></a>
        </div>
        <a href="" class="homelink">Home</a>
        <a href="" class="revlink">Reviews</a>
        <a href="" class="valuelink">Values</a>
        <a href="" class="contlink">Contact</a>
        <a href="" class="faqlink">FAQ</a>
        <a href="" class="button">Our Packages</a>
    </div>
</header>




<footer>
    <div>
        <h2>Newsletter</h2>
        <p>Want to know what we’re up to?</p>
        <p>Sign up for the newsletter and join our tribe</p>
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
    <div>
        <a href="https://www.instagram.com/"><img src="img_1.png" alt="img" height="49.33px" width="50.16px" style="margin-right: 20px"></a>
        <a href="https://www.facebook.com/"><img src="img_2.png" alt="img" height="49.33px" width="50.16px" style="margin-right: 20px"></a>
        <a href="https://twitter.com/"><img src="img_3.png" alt="img" height="49.33px" width="50.16px"></a>
        <p style="margin-top: 20px; font-size: 20px;", >2022. All right reserved</p>
    </div>
</footer>
</body>
</html>