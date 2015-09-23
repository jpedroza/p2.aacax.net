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
?>

</head>

<body>
<h1>Welcome to my Password Generator</h1>
<p>
Tell us want you want and we will make a custom one for you!
</p>
<form method='POST' action='index.php'>
    <input type='number' name='intWords' min="1" max="10">How many words do you want (e.g., 1 to 10)?<br>
    <input type='number' name='intSpecialCharacters' min="1" max="10">How many Special Characters do you want (e.g., 1 to 10)?<br>
    <input type='number' name='intNumbers' min="1" max="10">How many Numbers do you want (e.g., 1 to 10)?<br>	
	<p>Note: Your Generated Password will be <?php echo $characters . " Characters." ?></p>
	<input type="checkbox" name="limitChar" value="Yes">Check here to limit the number of characters.
    <div id="limitCharacters">
		<input type='number' name='intTotalCharacters' min="1" max="40">How many Total Characters do you want (e.g., 1 to 40)?<br>	
    </div>
	<input type='submit' value='Generate'><br>
</form>

<hr />
    <?php 

		echo "This is the value passed: " . $_POST['intWords']; echo "<br>";
		echo "This is the value passed: " . $_POST['intSpecialCharacters']; echo "<br>";	
		echo "This is the value passed: " . $_POST['intNumbers']; echo "<br>";	
		echo "This is the value passed: " . $_POST['limitChar']; echo "<br>";
		echo "Trim to this many characters: " . $_POST['intTotalCharacters']; echo "<br>";
		echo "The returned value is " . getRandomWordString(2);
	?>


<h1> Password Successfully Generated</h1>
<hr />
<div id="passwordBox">
	<p> 
	Your password is <?php echo $password; ?> which is <?php	echo strlen($password); ?> characters.
	</p> 
	The trimmed password is: <?php echo substr($password, 0, strlen($password) - $_POST['intTotalCharacters']); ?>
	<p>
	
	</p>
	
</div>
</body>
</html>
