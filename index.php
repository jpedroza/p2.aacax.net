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

	<p> 
	Your password is <?php echo $password; ?>
	</p> 

</body>
</html>
