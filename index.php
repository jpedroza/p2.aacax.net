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
</head>

<body>
<h1> Password Successfully Generated</h1>
<form method='POST' action='index.php'>
    <input type='number' name='intWords' min="1" max="10">How many words do you want (e.g., 1 to 10)?<br>
    <input type='number' name='intSpecialCharacters' min="1" max="10">How many Special Characters do you want (e.g., 1 to 10)?<br>
    <input type='number' name='intNumbers' min="1" max="10">How many Numbers do you want (e.g., 1 to 10)?<br>	
    <input type='number' name='intTotalCharacters' min="1" max="40">How many Total Characters do you want (e.g., 1 to 40)?<br>	
    <input type='submit' value='Generate'><br>
</form>
<pre>
    <?php 

		echo "This is the value passed: " . $_POST['intWords']; echo "<br>";
		echo "This is the value passed: " . $_POST['intSpecialCharacters']; echo "<br>";	
		echo "This is the value passed: " . $_POST['intNumbers']; echo "<br>";	
		echo "This is the value passed: " . $_POST['intTotalCharacters']; echo "<br>";			
	?>
</pre>


	<p> 
	Your password is <?php echo $password; ?>
	</p> 

</body>
</html>
