<form name="multipliers" method="post">
<h1> Returns the number which are a multiplier of either 4 or 6 </h1> 
<p>
Enter numbers below:
<p>
<input type="number" name="numbers-array[]" />
<input type="number" name="numbers-array[]" />
<input type="number" name="numbers-array[]" />
<input type="number" name="numbers-array[]" />
<p>
<input type="submit" name="numbers-submit" value="Submit" />
</form>

<form name="palindromes" method="post">
<h1> Check if a string is a palindrome </h1>    
<p>
Enter text below:
<p>
<input type="text" name="palindrome" />
<p>
<input type="submit" name="palindrome-submit" value="Submit" />
</form>

<?php 
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        function button1() { 
            echo "This is Button1 that is selected"; 
        } 
        function button2() { 
            echo "This is Button2 that is selected"; 
        } 
if (!empty($_POST['numbers-submit'])) 
{
	//get the value from form
	$numbers = $_POST['numbers-array'];
	//call function
	check_multiplier($numbers); 
}

if (!empty($_POST['palindrome-submit'])) 
{
	//get the value from form  
    $inputPalindrome = $_POST['palindrome']; 
	//call function
	check_palindrome($inputPalindrome);
}

function check_multiplier($numbers)
{
	foreach ($numbers as $number)
	{
		if (!is_numeric($number))
		{
			echo "Please enter number in field <br>";
		}
		else
		{
			$number4 = $number / 4;
			$number6 = $number / 6;
			//check if number is a multiplier of 4 or 6
			if(is_int($number4))
			{
				if(is_int($number6))
				{
					echo "The number $number is a multiplier of 4 and 6 <br>";   
				}
				else
				{
				echo "The number $number is a multiplier of 4 <br>";
				}
			}
			else if(is_int($number6))
			{  
				echo "The number $number is a multiplier of 6 <br>";
			}
			else
			{  
				echo "The number $number is not a multiplier of 4 or 6 <br>";
			}
		}
	}
}

function check_palindrome($inputPalindrome)
{
	if (empty($inputPalindrome))
	{
		echo "Please enter text in field";
	}
	else
	{
	    //reversing the number  
        $reverse1 = strrev($inputPalindrome);  
          
        //checking if the number or string is equal in reverse  
        if($inputPalindrome == $reverse1)
		{  
            echo "The string $inputPalindrome is a Palindrome";     
        }
		else
		{  
            echo "The string $inputPalindrome is not a Palindrome";
		}
	}
}
?>