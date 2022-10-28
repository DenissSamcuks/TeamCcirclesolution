<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
	<head>
		<title>My first form</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = filter_input(INPUT_POST, "firstname");
                $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
                $subject = filter_input(INPUT_POST, "subject");
                $message = filter_input(INPUT_POST, "message");
                $newsletter = filter_input(INPUT_POST, "subscribe");
				$rick = $_POST["rick"];
				$pass = filter_input(INPUT_POST, "password");

           		var_dump($rick);
            }
		?>
		<h1>This is our first form</h1>
			
		<form name="contact" action="contact.php" method="POST">
			<div>
				<label for="firstname">Firstname</label> 
				<input type="text" name="firstname" id="firstname" placeholder="Firstname">
			</div>
			<div>
				<label for="email"><span class="required">*</span>Email</label>
				<input type="text" name="email" id="email" required placeholder="Email">
			</div>
			<div>
				<label for="subject">Subject</label>
				<select name="subject" id="subject">
					<option>Complaint</option>
					<option selected>Suggestion</option>
					<option>Question</option>
				</select>
			</div>
			<div>
				<textarea name="message" placeholder="your message" class="textarea"></textarea>
			</div>
			<div>
				do you want to subscribe?
			    <input type="radio" name="subscribe" value="yes" checked>Yes
				<input type="radio" name="subscribe" value="no">No
			</div>
			<div>
				Never gonna?
			    <input type="checkbox" name="rick[]" value="give you up" checked>Give you up
				<input type="checkbox" name="rick[]" value="let you down">Let you down
			</div>
			<div>
				<label for="password">Password</label>
				<input type="password" name="password" id="password"> 
			</div>
			<div>
				<input type="submit" name="submit" value="Send Form">
				<input type="reset">
			</div>
		</form>
	</body>
</html>
