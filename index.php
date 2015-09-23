<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<?php require 'logic.php'; ?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Password Generator</title>
<?php
	$characters = 20;
	$password = '';
?>

</head>

<body>
<h1>Welcome to My Password Generator</h1>
<h3>Description of This App</h3>
<p>
Hello, this application was created to help users come up with a quick easy way to create complex passwords for everyone to enhance Cybersecurity by giving you a few recommendations for complex passwords (e.g., passwords that have words, special characters, and numbers). A "XKCD" password is a simple concept I learned from a comic written back in August 10, 2011?"
</p>
<p>
You can have the default password at the way bottom, or you can generate a custom password by filling in the form and pressing "Generate" button.
</p>

<p>
Tell us want you want, and we will make a custom password for you!
</p>
<form method='POST' action='index.php'>
    <input type='number' name='intWords' min="1" max="10">How many words do you want (e.g., 1 to 10)?<br>
    <input type='number' name='intSpecialCharacters' min="1" max="10">How many Special Characters do you want (e.g., 1 to 10)?<br>
    <input type='number' name='intNumbers' min="1" max="10">How many Numbers do you want (e.g., 1 to 10)?<br>	
    <div id="limitCharacters">
		<input type='number' name='intTotalCharacters' min="1" max="50">How many Total Characters do you want (e.g., 1 to 50)?<br>	
    </div>
	<input type='submit' value='Generate'><br>
</form>

<hr />
    <!-- These programming hooks are for debugging -->
	
	<?php 

		//echo "This is the value passed: " . $_POST['intWords']; echo "<br>";
		//echo "This is the value passed: " . $_POST['intSpecialCharacters']; echo "<br>";	
		//echo "This is the value passed: " . $_POST['intNumbers']; echo "<br>";	
		//echo "Trim your password to how many characters: " . $_POST['intTotalCharacters']; echo "<br>";
		$newPassword = getRandomWordString($_POST['intWords']) . getRandomSymbols($_POST['intSpecialCharacters']) . getRandomNumbers($_POST['intNumbers']);
		echo "<h3>The Password is: " . $newPassword . "</h3>";
		echo "<h3>A Trimmed Version of the Password is: " . substr($newPassword, 0, $_POST['intTotalCharacters']) . "</h3>";
	?>
	




</body>
</html>
