<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Password Generator</title>
	<?php 
	//the following variables are to setup a dummy password string to construct 
		$word ="secret";
		$specialcharacter ="*";
		$number =5;
	?>

</head>
<body>
<h1> Password Successfully Generated</h1>

	<p> 
	Your password is <?php echo $word . $specialcharacter . $number; ?>
	</p> 

</body>
</html>
