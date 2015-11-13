<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<! DOCTYPE html>
<html>
	<head>
		<title>My First HTML Form</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form method="POST" action="/my_first_form.php">
    	<p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Enter Username here">
    	</p>
    	<p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Enter Password here">
    	</p>
    	<p>
        <button>Aaaand...GO!!!</button>
    	</p>
		</form>
		<h4>User Login</h4>
		<p>
			<form method="POST" action="/my_first_form.php">
				<p>
					<label for="username">User Name</label>
					<input name="username" type="text" id="username" placeholder="Please Enter User Name">
				</p>
				<p>
					<label for="password">Password</label>
					<input name="password" type="password" id="password" placeholder="Please Enter Password">
				</p>
			</form>
		</p>
		<h4>Compose An Email</h4>
		<p>
			<form method="POST" action="/my_first_form.php">
				<label for="from">From</label>
				<input name="from" id="from" type="text" placeholder="Sender">
				<br>
				<label for="to">To</label>
				<input name="to" id="to" type="text" placeholder="Recipient">
				<br>
				<label for="subject">Subject</label>
				<input name="subject" id="subject" type="text" placeholder="Subject">
				<br>
				<textarea type="text" id="body" placeholder="Enter Text" rows="5" cols"40"></textarea>
				<p><label>Save A Copy To My Sent Folder<input type="checkbox" id="checkbox" value="yes" name="save_option" checked>
				</label>
				</p>
				<input type="submit" value="submit">
			</form>
		</p>

			<form method="POST" action="form.php" id="form">
				<p><input type="checkbox" id="mailing_list" value="yes">
					<label for="mailing_list">Send me Spam, Please!</label>
				</p>
				<p>What operating system do you use?</p>
				<p>
					<label>Windows
					<input type="checkbox" id="os1" value="windows" name="os[]">
					</label>
				</p>
				<p>
					<label>Linux
					<input type="checkbox" id="os2" value="linux" name="os[]">
					</label>
				</p>
				<p>
					<label>OSX
					<input type="checkbox" id="os3" value="osx" name="os[]">
					</label>
				</p>
				<p>
					<button type="submit" value="submit">Submit</button>
				</p>

				<!-- The "name" attribute groups things together. -->

				<h4>You must answer me these questions 3...</h4>
				<p><strong>What is your name?</strong></p>
				<p><label>Matt<input type="radio" name="question_1" value="Matt"></label></p>
				<p><label>Matthew<input type="radio" name="question_1" value="Matthew"></label></p>
				<p><label>Brodis<input type="radio" name="question_1" value="Brodis"></label></p>
				<p><strong>What...is your quest?</strong></p>
				<p><label>Find the Holy Grail<input type="radio" name="question_2" value="Find the Holy Grail"></label></p>
				<p><label>Become a Jedi<input type="radio" name="question_2" value="Become a Jedi"></label></p>
				<p><label>Become a coding ninja<input type="radio" name="question_2" value="Become a coding ninja"></label></p>
				<p><strong>What...is your favorite color?</strong></p>
				<p><label>Black<input type="radio" name="question_3" value="Black"></label></p>
				<p><label>Blue<input type="radio" name="question_3" value="Blue"></label></p>
				<p><label>Chartruse<input type="radio" name="question_3" value="Chartruse"></label></p>

				<h4>Very good. One more for the road...</h4>
				<p><strong>Select 3 of the members of The Jackson 5</strong></p>
				<p><label>Michael<input type="checkbox" name="jackson_5" value="Michael"></label></p>
				<p><label>Jermaine<input type="checkbox" name="jackson_5" value="Jermaine"></label></p>
				<p><label>Julio<input type="checkbox" name="jackson_5" value="Julio"></label></p>
				<p><label>Tito<input type="checkbox" name="jackson_5" value="Tito"></label></p>


				<!-- This creates a drop down menu -->

				<p><label for="transmission">Transmission</label>
					<select id="transmission" name="transmission">
						<option>Automatic</option>
						<option>Automatic</option>
						<option>Automatic</option>
					</select>
				</p>

				<h4>Select Testing:</h4>
				<p><label for="reported_source"><strong>Would you like to receive our news letter?</strong></label>
					<select id="reported_source" name="reported_source">
						<option value="1">Yes</option>
						<option value="0">No</option>
					
					</select>

					<button type="submit" value="submit">Submit</button>
				</p>


				<!-- Brackets in the "name" attribute allow for an array in the event of multiple answer questions, like Ethnic background or list of hobbies. -->

				<p>What is your ethnicity?</p>
				<p><label>Black/African-American<input type="checkbox" id="checkbox_black" name="ethnicity[]" value="checkbox_black"></label></p>
				<p><label>White/Caucasian<input type="checkbox" id="checkbox_white" name="ethnicity[]" value="checkbox_white"></label></p>
				<p><label>Native American<input type="checkbox" id="checkbox_native" name="ethnicity[]" value="checkbox_native"></label></p>
				<p><label>Hispanic/Latino<input type="checkbox" id="checkbox_latino" name="ethnicity[]" value="checkbox_latino"></label></p>



				<!-- The "multiple" attribute stands alone within the "select" tag and allows for open-selection, multiple answer questions. -->

				<label>Select all locations to which you are willing to relocate
					<p>
						<select id="relocation_locations" name="locations[]" multiple>
							<option value="New York City">New York City</option>
							<option value="Detroit">Detroit</option>
							<option value="Anchorage">Anchorage</option>
							<option value="Phoenix">Phoenix</option>
							<option value="San Jose">San Jose</option>
							<option value="Colorado Springs">Colorado Springs</option>
						</select>
					</p>
				</label>
				<p>
					<button type="submit" value="submit">Submit</button>
				</p>


			</form>


		<html>
		<head>
			<title></title>
		</head>
		<body>
		
		</body>
		</html>

	</body>
</html>