<?php
	var_dump($_GET);
	var_dump($_POST);
?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>My First PHP Form</title>
			<link rel="stylesheet" href="/css/site">
		</head>
			<body>
				<form method="POST" action="/my_first_form.php">
					<div>
						<label for="username">Username</label>
						<input id="username" name="username" placeholder="Give Me Your Name">
					</div>
					<div>
						<label for="password">Password</label>
						<input id="password" name="password" placeholder="Now Your Password">
					</div>
					<div>
					   <button type="submit">Push to Close</button>
					 </div>
				<h2>Compose An Email</h2>
					<div>
						<label for="to">To</label>
						<input id="to" name="to" placeholder="To User Email">
					</div>
					<div>
						<label for="from">From</label>
						<input id="from" name="from" placeholder="From Your Email">
					</div>
					<div>
						<label for="Subject">Subject</label>
						<input id="Subject" name="Subject">
					</div>
					<div>
						<textarea id="email_body" name="email_body">Type Content Here</textarea>
					</div>
						<button>Send</button>
					<div>
						<input type="checkbox" id="Save" name="Save" value="yes" checked>
						<label for="Save">Save to Sent Folder?</label>
					</div>
				</form>
				<form>
					<h3>Multiple Choice Test</h3>
					<div>
						<p>Who Was the NBA MVP</p>
						<label>
							<input type="radio" name="q1" value="Chef Curry">
							Chef Curry
						</label>
						<label>
							<input type ="radio" name="q1" value="Bron Bron">
							Bron Bron
						</label>
						<label>
							<input type="radio" name="q1" value="Kawhi Klaw">
							Kawhi Klaw
						</label>
					</div>
					<div>
						<p>Where is San Antonio</p>
						<label>
							<input type="radio" name="q2" value="Louisiana">
							Louisiana
						</label>
						<label>
							<input type="radio" name="q2" value="Washington">
							Washington
						</label>
						<label>
							<input type="radio" name="q2" value="Texas">
							Texas
						</label>
					</div><br>
					<button>Submit</button>
				</form>
				<form>
					<h3>What are the best pizza toppings?</h3>
					<div>
						<label><input type="checkbox" id="q3" name="q3" value="Pepperoni">Pepperoni</label>
						<label><input type="checkbox" id="q3" name="q3" value="Italian Sausage">Italian Sausage</label>
						<label><input type="checkbox" id="q3" name="q3" value="Pineapple">Pineapple</label>
					</div>
					<br>
					<button>Submit</button>
				</form>
				<form>
					<h3>Select Testing</h3>
					<label for="orange juice">Do you like OJ?</label>
					<select id="orange juice" name="orange juice">
						<option value="1">Yes</option>
						<option value="0">NO</option>
					</select><br>
					<label for="peanut butter">Crunchy, Creamy or Almond Peanut Butter?</labeel>
					<select id="peanut butter" name="peanut butter[]" multiple>
						<option value="Crunchy">Crunchy</option>
						<option value="Creamy">Creamy</option>
						<option value="Almond">Almond</option>
					</select>
					<button>Submit</button>

				</form>
			</body>
	</html>