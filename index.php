<!DOCTYPE html>
<html Lang="en">
		<head>
			<link rel="stylesheet" type="text/css" href="mystyle.css">
			<meta charset="UTF-8">
			<title> Ebay Listing Use Cases </title>
		</head>
	<body>
		<div>
		<h1> <span class="headtext"> Data Design Project: Ebay Sale</span> </h1>
		</div>
		<h2> Typical User Persona </h2>
			<p> Tom, 35 is looking to sell an iPad since he recently upgraded. He seeks
				ease of use and convenience with minimal time commitment to sell his item. He's
				a busy professional who is comfortable with tech but doesn't work in a tech related field. He spends very
				little time online that isn't work related and he appreciates a streamlined ability to list,
				describe and sell his items in a timely manner. </p>
		<h2>
			<p> Use Case
				An average internet user, Tom mostly consumes news and other information on the web via his desktop computer
				that is an outdated windows machine but he finds it comfortable and more than powerful enough to allow him
				to do the tasks in front of him. Besides, Tom prefers his tablet when it comes to checking emails and
				reading web content or ebooks. He seldom posts or otherwise contributes to the web but uses the internet
				for convenience whenever possible. </p>
		</h2>

		<h2> User Frustrations </h2>
			<p>
				 Time consuming process of user registration.
				 The time and detail needed to input in order to list an item for sale.
				 Deciding on a proper category and price.
				</p>
		<h2> Steps to Sell an Item on Ebay</h2>
			<p>
				 Login/Register for an eBay user account by providing email address, name, and creating a username.
				In order to sell an item you will pick a category your item will go in.
				You will then title your item, give it a description, price and add picture(s).
				</p>
		<img class="pad-40" src="images/datauseEbay.svg" alt="Entity Relationship Diagram - Ebay" />

		<article>

		CREATE TABLE profile (<br />
		profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,<br />
		email VARCHAR(128) NOT NULL,<br />
		phone VARCHAR(32),<br />
		userName VARCHAR(32),<br />
		UNIQUE(atHandle),<br />
		UNIQUE(email),<br />
		PRIMARY KEY(profileId)<br />
		); <br />


		CREATE TABLE category (<br />
		profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,<br />
		category VARCHAR(32) NOT NULL,<br />
		phone VARCHAR(32),<br />
		userName VARCHAR(32),<br />
		UNIQUE(userName),<br />
		UNIQUE(email),<br />
		PRIMARY KEY(profileId)<br />
			); <br />


			CREATE TABLE description (<br />
			profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,<br />
			description VARCHAR(255) NOT NULL,<br />
			price VARCHAR(16),<br />
			userName VARCHAR(32),<br />
			UNIQUE(userName),<br />
			UNIQUE(email),<br />
			PRIMARY KEY(profileId)<br />
			); <br />

		</article>

	</body>
</html>





