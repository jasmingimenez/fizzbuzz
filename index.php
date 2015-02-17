<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FizzBuzz HW</title>

<link type="text/css" rel="stylesheet" href="fizzbuzz.css">

</head>

<body>
<div id="FizzBuzz">
<h1>FizzBuzz!</h1>
<hr>
<p>Enter in the values below to play the game</p>
<ul>
<li>Word One will be your "Fizz" replacement</li>
<li>Word Two is your "Buzz" replacement</li>
<li>Number One is the first divisor</li>
<li>Number Two is the second divisor</li>
<li>Starting Number is where the FizzBuzz game will begin</li>
<li>Stopping Number is where the FizzBuzz game will end</li>
</ul>
<form method="post" action="fizzbuzz.php">
<div class="column">
<input type="text" id="word1" class="txt" name="word1" placeholder="Word One">
<br>
<input type="text" id="word2" class="txt" name="word2" placeholder="Word Two">
<br>
</div>
<div class="column">
<input type="text" id="number1" class="txt" name="number1" placeholder="Number One">
<br>
<input type="text" id="number2" class="txt" name="number2" placeholder="Numer Two">
<br>
</div>
<div class="column">
<input type="text" id="start" class="txt" name="start" placeholder="Starting Number">
<br>
<input type="text" id="stop" class="txt" name="stop" placeholder="Stopping Number">
<br>
</div>
<input type="submit" id="submit" class="txt" name="submit" value="Submit">
</form>
</div>
<div class="clear"></div>
<div id="results">
<h1>Results!</h1>
<div id="console">

<?php

if (isset($_POST['submit']))
{
	
$start = $_POST['start'];
$stop = $_POST['stop'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$word1 = $_POST['word1'];
$word2 = $_POST['word2'];

if (empty($word1))
{
	echo "Word One is empty.<br>";
}
if (empty($word2))
{
	echo "Word Two is empty.<br>";
}
if (empty($number1))
{
	echo "Number One is empty.<br>";
}
if (empty($number2))
{
	echo "Number Two is empty.<br>";
}
if (empty($start))
{
	echo "Starting Number is empty<br>";
}
if (empty($stop))
{
	echo "Stopping Number is empty.<br>";
}
if (empty($word1) || empty($word2) || empty($number1) || empty($number2) || empty($start) || empty($stop))
{return false;}

   for ($i=$start; $i < $stop; $i++)
   {
       if (($i % $number1 == 0)||($i % $number2 == 0))
       {
           if (($i % $number1 == 0)&&($i % $number2 == 0))
           {
               echo $word1 . $word2 . "<br>";
           }
           else if ($i%$number1==0)
           {
               echo $word1 . "<br>";
           }
           else if ($i%$number2==0)
           {
               echo $word2 . "<br>";
           }
       }
       else {
       echo $i . "<br>";
       }
   }
}
?>

</div>
</div>

</body>
</html>

<!-- 
hostname: tardis-shoes.com
username: gimenez@tardis-shoes.com
FTP
password: 5885!
