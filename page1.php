<center>

<?php
		//Math Operators
		// +  - * / % **
			
			echo 41+5;
			
		?>
		<br/>
<?php
		//Math Operators
		// +  - * / % **
		$num1= 41;
		$num2=5;
		echo $num1+$num2;
			
		?>
<br/>
<?php
		//Math Operators
		// +  - * / % **
		$num1= 41;
		$num2=5;
		echo $num1-$num2;
			
		?>

<br/>
<?php
		//Math Operators
		// +  - * / % **
		$num1= 41;
		$num2=5;
		echo $num1/$num2;
			
		?>

<br/>
<?php
		//Math Operators(% gives the remainder)
		// +  - * / % **
		$num1= 41;
		$num2=5;
		echo $num1%$num2;
			
		?>

<br/>
<?php
		//Math Operators(% gives the remainder)
		// +  - * / % **
		$num1= 40;
		$num2=5;
		echo $num1%$num2;
			
		?>

<br/>
<?php
		//Math Operators(** gives the power or exponential value)
		// +  - * / % **
		$num1= 5;
		$num2=2;
		echo $num1**$num2;
			
		?>

<br/>
<?php
		//Math Operators(** gives the power or exponential value)
		// +  - * / % **
		$num1= 5;
		$num2=3;
		echo $num1**$num2;
			
		?>


<br/>
<?php
		//Math Operators(** gives the power or exponential value)
		// +  - * / % **
		$num1= 41;
		echo $num1;
			
		?>

<br/>
<?php
		//Math Operators(** gives the power or exponential value)
		// +  - * / % **
		$num1= 41;
		echo ++$num1;
		echo"<br/>";
		echo ++ $num1
			
		?>


<br/>
<?php
		//Math Operators
		// +  - * / % **
		$num1= 41;
		echo --$num1;
		echo"<br/>";
		echo -- $num1	
		?>

<br/>
<?php
		//Math Operators
		// +  - * / % **
		$num1= 41;
		echo $num1++;
		echo"<br/>";
		echo $num1;
		?>


<br/>
<?php
		//Math Operators
		// +  - * / % **
		$num1= 41;
		echo $num1--;
		echo"<br/>";
		echo $num1;
	?>


<br/>
<?php
		// String Concentanation
		
		$first_name = "John";
		$last_name = "Steve";
		
		echo $first_name . " " . $last_name;
	?>

<br/>
<?php
		// String Concentanation
		
		$first_name = "John";
		$last_name = "Steve";
		
		echo $first_name;
		echo " ";
		echo $last_name;
	?>


<br/>
<?php
		// String Concentanation
		
		$first_name = "John";
		$last_name = "Steve";
		$question = "How are you?";
		
		echo $first_name . " " . $last_name ;
		echo "<br/>";
		echo $question;
	?>


<br/>
<?php
		// String Concentanation
		
		$num1 = 1;
		$num2 = 5;
		
		echo $num1 . " " . $num2;
		
	?>

<br/>
<?php
		// String Concentanation
		
		$num1 = 1;
		$num2 = 5;
		
		echo $num1 . $num2;
		
	?>

<br/>
<?php
		// String Concentanation
		
		$num1 = 1;
		$num2 = 5;
		
		echo $num1 + $num2;
		
	?>


<br/>
<?php
		// Comparsion Operators
		
		/* == equal to
			!= Not equal to
			> Greater than
			< Less Than
			>= Greater that or equal to
			<= Less than or equal to
		*/

		$num1 = 41;
		$num2 = 4;

		var_dump($num1 == $num2);
		
		?>


<br/>
<?php
		// Comparsion Operators
		
		/* == equal to
			!= Not equal to
			> Greater than
			< Less Than
			>= Greater that or equal to
			<= Less than or equal to
		*/

		$num1 = 41;
		$num2 = 4;

		var_dump($num1 > $num2);
	?>


<br/>
<?php
		// Comparsion Operators
		
		$num1 = 41;
		$num2 = 4;

		var_dump($num1 != $num2);
	?>

<br/>
<?php
		// Comparsion Operators
		
		$num1 = 4;
		$num2 = 4;

		var_dump($num1 == $num2);
	?>


<br/>
<?php
		// Comparsion Operators
		
		$num1 = 41;
		$num2 = 4;

		var_dump($num2 < $num1);
	?>

<br/>
<?php
		// Comparsion Operators
		
		$num1 = 4;
		$num2 = 4;

		var_dump($num1 <= $num2);
	?>


<br/>
<?php
		// Comparsion Operators
		
		$fisrt_name = "John";
		
		var_dump($fisrt_name == "Mary");
	?>


<br/>
<?php
		// Comparsion Operators
		
		$fisrt_name = "John";
		
		var_dump($fisrt_name == "John");
	?>


<br/>
<?php
		// Comparsion Operators
		
		$fisrt_name = "John";
		
		var_dump($fisrt_name == "john");
	?>



<br/>
<?php
		// Escape Operators
		
		echo "And she said: \"You'are ugly!\"";
	?>


<br/>
<?php
		// Escape Operators
		
		echo 'And she said: "You\'are ugly!"';
	?>

<br/>
<?php
		// If Else Statements
		$first_name = "John";
		
		if ($first_name == "John") {
			echo "Hello John! How are you?";
		}
		
	?>


<br/>
<?php
		// If Else Statements
		$first_name = "John";
		
		if ($first_name != "John") {
			echo "Hello John! How are you?";
		} else {
			echo "You are not John! Who are you?";
		}
		
	?>

<br/>
<?php
		// If Else Statements
		$first_name = "Peter";
		
		if ($first_name == "John") {
			echo "Hello John! How are you?";
		} else {
			echo "You are not John! Who are you?";
		}
		
	?>


<br/>
<?php
		// If Else Statements
		$first_name = "Peter";
		
		if ($first_name == "Peter") {
			echo "Hello" . " " . $first_name . "! How are you?";
		} else {
			echo "You are not Peter! Who are you?";
		}
		
	?>



<br/>
<?php
		// If Else Statements
		$fav_number = 41;
		
		if ($fav_number >1) {
			echo "41 is greater than 10";
		} else {
			echo "$fav_number . is less than 10";
		}
		
	?>


<br/>
<?php
		// If Else Statements
		$fav_number = 9;
		
		if ($fav_number >10) {
			echo "30 is greater than 10";
		} else {
			echo "$fav_number is less than 10";
		}
		
	?>


<br/>
<?php
		// Else If Statements
		$num1 = 40;
		$num2 = 5;
		if ($num1 > 10) {
			echo $num1 . " is greater than 10";
		} else{
			echo $num1 . " is less than 10";
		}
		
	?>



<br/>
<?php
		// Else If Statements
		$num1 = 40;
		$num2 = 5;
		if ($num1 > 100) {
			echo $num1 . " is greater than 10";
		} elseif ($num2 == 5) {
			echo $num2 . " equal to 5!";
		}

		else{
			echo $num1 . " is less than 10";
		}
		
	?>

<br/>
<?php
		// Else If Statements
		$num1 = 40;
		$num2 = 5;
		if ($num1 > 100) {
			echo $num1 . " is greater than 10";
		} elseif ($num2 == 4) {
			echo $num2 . " equal to 5!";
		}

		else{
			echo $num1 . " is less than 50";
		}
		
	?>


<br/>
<?php
		// Numeric arrays
		$first_names = array ( "John", "Steve", "Mary");
		echo $first_names[0];
		
	?>
		

<br/>
<?php
		// Numeric arrays
		$first_names = array ( "John", "Steve", "Mary");
		echo $first_names[1];
		
	?>

<br/>
<?php
		// Numeric arrays
		$first_names = array ( "John", "Steve", "Mary");
		echo $first_names[0];
		echo $first_names[1];
		echo $first_names[2];
		
	?>

<br/>
<?php
		// Numeric arrays
		$last_names = array ("Smith", "Walker", "Popins");
		$first_names = array ( "John", "Steve", $last_names);
		
		echo $first_names[2][2];

	?>

<br/>
<?php
		// Numeric arrays
		$last_names = array ("Smith", "Walker", "Popins");
		$first_names = array ( "John", "Steve", $last_names);
		
		echo $first_names[2][0];
	?>


<br/>
<?php
		// Numeric arrays
		$last_names = array ("Smith", "Walker", "Popins");
		$first_names = array ( "John", "Steve", $last_names);
		
		echo $first_names[2][2];
	?>

<br/>
<?php
		// Associative arrays. Python calls it dictionary.
		$fav_color = array (
			"John"=>"Red", 
			"Steve"=>"Black", 
			"Mary"=>"White"
		);
		echo $fav_color["John"];
	?>


<br/>
<?php
		// Associative arrays. Python calls it dictionary.
		$fav_color = array (
			"John"=>"Red", 
			"Steve"=>"Black", 
			"Mary"=>"White"
		);
		echo $fav_color["Mary"];
	?>



<br/>
<?php
		// Arrays Counts
		$fav_color = array (
			"John"=>"Red", 
			"Steve"=>"Black", 
			"Mary"=>"White"
		);
		echo count ($fav_color);
	?>


<br/>
<?php
		// Arrays Counts
		$names = array("John", "Steve", "Mary"
		);
		echo count ($names);
	?>

<br/>
<?php
		// We want the last item name in the array. If there are thousans of names
		$names = array("John", "Steve", "Mary");
		echo $names [count($names) - 1];
	?>


<br/>
<?php
		// We want the 2nd last item name in the array. If there are thousans of names
		$names = array("John", "Steve", "Robin", "Mary");
		echo $names [count($names) - 2];
	?>


<br/>
<?php
	// Loops--- While
	$number = 0;
	while ($number<10){
	echo "The number is: $number<br/>";
	$number++;
		}

	?>

<br/>
<?php
	// Loops--- While (Always use incremental)
	$number = 0;
	while ($number<=5){
	echo "The number is: $number<br/>";
	$number++;
		}

	?>


<br/>
<?php
	// Loops--- For 
	
	for ($number=0; $number<=10; $number++) {
		echo "The number is $number <br>";
	}

	?>


<br/>
<?php
	// Loops--- For 
	
	for ($number=0; $number<5; $number++) {
		echo "The number is $number <br>";
	}
?>


<br/>
<?php
	// Loops--- Foreach 
	
	$names = array ("John", "Steve", "Mary");
	foreach ($names as $value) {
		echo "$value<br/>";
	}
?>


<br/>
<?php
	// Loops--- Foreach 
	
	$numbers = array (21, 22, 43, 55, 56);
	foreach ($numbers as $n) {
		echo "$n<br/>";
	}
?>



<center>
<br/>
<?php
	// Functions 
	function helloThere() {
	echo "Hello There!";
}
helloThere();
	
?>



<center>
<br/>
<?php
	// Functions 
	function hello($name) {
		echo "Hello There $name!";
	}
	hello("John");
	
?>

<center>
<br/>
<?php
	// Functions 
	function hi($first_name, $last_name) {
		echo "Hello There $first_name $last_name!";
	}
	hi("John", "Steve");
	
?>


<center>
<br/>
<?php
	// Functions 
	function number($num1, $num2) {
		echo $num1 + $num2;
	}	
		number (41,5)
	
?>


<center>
<br/>
<?php
	// Functions 
	function num($num1, $num2) {
		return $num1 + $num2;
	}	
	$answer = num (41,4);
	echo $answer*2;
	
?>


<center>
<br/>
<?php
	// Functions 
	function n($num1, $num2) {
		return $num1 + $num2;
	}	
	$answer = n(3,2);
	echo $answer**3;
	
?>


<center>
<br/>
<?php
	// Functions 
	function numb($num1, $num2) {
		return $num1 + $num2;
	}	
	$answer = numb(3,2);
	echo $answer**3;
	
?>


<center>
<br/>
<?php
	// Functions 
	function sal($num1, $num2) {
		return $num1 + $num2;
	}	
	$answer = sal(49,1);
	echo $answer*1.1;
	
?>



<center>
<br/>
<?php
	// Functions 
	function salary($num1) {
		return $num1*1.1;
	}	
	$answer = salary(5000);
	echo $answer;
	
?>


<center>
<br/>
<?php
	// Random Functions.  
	// echo mt_rand(0,10);
	// In the following example we want t0 see randomly any name

	$names = array ("John", "Steve", "Mary", "Robin", "Sam");
	echo $names[mt_rand(0,4)];
?>


<center>
<br/>
<?php
	// Random Functions.  
	// echo mt_rand(0,10);
	// In the following eg we want to see randomly 

	$names = array (5, 4, 20, 10, 21, 32, 55, 6,7,9,11,5);
	$rando = mt_rand(2,4);
	echo $names[$rando];
?>


<center>
<br/>
<?php
	// Random Functions.  
	// echo mt_rand(0,10);
	// In the following eg we want to see randomly 

	echo "Guess a number!<br/>";
	$num = 4;
	$randa = mt_rand(0,10);
	if ($num == $randa) {
		echo "You win $num = $randa";
	} else {
		echo "You Lose! $num doesn't equal to $randa";
	}
	
?>

<center>
<br/>
<?php
	// Random Functions.  
	// echo mt_rand(0,10);
	// In the following eg we want to see randomly 

	echo "Guess a number!<br/>";
	$num = 4;
	$randa = mt_rand(2,4);
	if ($num == $randa) {
		echo "You win $num = $randa";
	} else {
		echo "You Lose! $num doesn't equal to $randa";
	}
	
?>


<center>
<br/>
<?php
	// Date Functions.(Single or double coma both can be used)  
	echo date ('Y');

?>


<center>
<br/>
<?php
	// Date Functions (Single or double coma both can be used) 
	echo date ('y');
		
?>

<center>
<br/>
<?php
	// Date Functions (Want to see today's day) 
	$todays_day = date("l");
	echo "Today is $todays_day";
		
?>0


<center>
<br/>
<?php
	// Date Functions (Want to see today's date) 
	$todays_day = date("D");
	echo "Today is $todays_day";
		
?>0


<center>
<br/>
<?php
	// Date Functions  
	$todays_date = date("Y");
	echo "Copyright (c) $todays_date - All Rights Reserved";
?>


<center>
<br/>
<?php
	// String Manipulation Functions  
	$stuff ="John Elder is a PHP Coding Monster";
	echo str_replace("Monster","Star", $stuff);
?>


<center>
<br/>
<?php
	// String Manipulation Functions  
	$stuff ="John Elder is a PHP Coding Monster";
	echo str_replace("John Elder","Mary", $stuff);
?>


<center>
<br/>
<?php
	// String Manipulation Functions  
	$stuff ="John Elder is a PHP Coding Monster";
	$monster = "Monster";
	$star = "star";
	echo str_replace($monster,$star, $stuff);
?>


<center>
<br/>
<?php
	// String Manipulation Functions (We want all in upper case) 
	$stuff ="John Elder";
	
	echo strtoupper($stuff);
?>


<center>
<br/>
<?php
	// String Manipulation Functions (We want all in lower case) 
	$stuff ="John Elder";
	
	echo strtolower($stuff);
?>

<center>
<br/>
<?php
	// String Manipulation Functions 
	// We want first letter in upper case of every word) 
	$stuff ="john elder is great";
	
	echo ucwords($stuff);
?>


<center>
<br/>
<?php
	// String Manipulation Functions 
	// We want first letter of first word only in upper case) 
	$stuff ="john is great";
	
	echo ucfirst($stuff);
?>

<center>
<br/>
<?php
	// String Manipulation Functions 
	// We want first letter of first word only in upper case) 
	$stuff ="JOHN is great";
	
	echo lcfirst($stuff);
?>

<center>
<br/>
<?php
	// String Manipulation Functions 
	// We want first letter of first word only in upper case) 
	$stuff ="JOHN ELDER";
	
	echo strlen($stuff);
?>


<center>
<br/>
<?php
	// String Manipulation Functions 
	// We want first letter of first word only in upper case) 
	$stuff ="JOHN ELDER";
	
	echo str_shuffle($stuff);
?>

<?php include('variables.php'); ?>
<center>
<br/>
<?php
	
	echo "Copyright (c)" . " " . $company_name . " " . date("Y") . " -All Rights are Reserved";
?>


