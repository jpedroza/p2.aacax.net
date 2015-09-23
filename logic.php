<?php
	$password = "-----";
	
	function getRandomWordString ($intNumOfWords=1) {
			$returnString="";
			//--setup string arrays
			$stringArray=Array(
				'Apples',
				'Oranges',
				'Milk',
				'Glue',
				'Staple',
				'Pig',
				'Boy',
				'Goat',
				'Cow'
			);
			//--setup for word string
			for ($x = 1; $x <= $intNumOfWords; $x++) {
				$randomKey=array_rand($stringArray,1);
				shuffle($stringArray);
				$returnString=$returnString . $stringArray[$randomKey];
			}
			return ($returnString);			
	}

	function getRandomSymbols ($intNumOfSymbols=1) {
			$returnString="";
			//--setup symbol array
			$symbolArray=Array(
				'*',
				'+',
				'=',
				'%',
				'@',
				'#'
			);
			//setup for symbol string
			for ($x = 1; $x <= $intNumOfSymbols; $x++) {
				$randomKey=array_rand($symbolArray,1);
				shuffle($symbolArray);
				$returnString=$returnString . $symbolArray[$randomKey];
			}
			return ($returnString);
	}
	
	function getRandomNumbers ($intNumOfNumbers=1) {
			$returnString="";
			//--setup number array
			$numberArray=Array(
				'1',
				'2',
				'3',
				'4',
				'5',
				'6',
				'7',
				'8',
				'9',
				'0'
			);
			//setup for symbol string
			for ($x = 1; $x <= $intNumOfNumbers; $x++) {
				$randomKey=array_rand($numberArray,1);
				shuffle($numberArray);
				$returnString=$returnString . $numberArray[$randomKey];
			}			
			return ($returnString);
	}	
	
	$password = getRandomWordString(6) . getRandomSymbols(6) . getRandomNumbers(8);

	
?>