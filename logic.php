<?php
	$password = "-----";
	
	function getRandomWordString ($intNumOfWords=1) {
			$wordString = "randomword";
			return ($wordString);
	}

	function getRandomSymbols ($intNumOfSymbols=1) {
			$symbolString = "----";
			return ($symbolString);
	}
	
	function getRandomNumbers ($intNumOfNumbers=1) {
			$numberString = "10";
			return ($numberString);
	}	
	
	$password = getRandomWordString(2) . getRandomSymbols(3) . getRandomNumbers(4);
	
?>