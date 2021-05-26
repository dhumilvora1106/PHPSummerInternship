<?php
switch (5) {
  case 1:
    echo "Variable (With 5 Method)";
    $a = 10;
    $b = 20;
    //Method 1
    echo "<br>The Value Of a is ".$a;
    echo "<br>The Value Of b is ".$a;
    //Method 2
    echo "<br>Value Of a is ".$a."<br>Value Of b is ".$b;
    //Method3
    echo "<br/>a value is $a<br/>b value is $b";
    //Method4
    echo '<br/>The Value of a is $a<br/>The Value Of b is $b';
    //Method5
    echo "<br/>Value Of a is $a<br/>Value Of b is $b<br/>Sum is".($a+$b);
    break;
  case 2:
      echo "Checkinng age";
      $age=20;
      if ($age==20) {
        echo"Age is 20";
}
      break;
  case 3:
      echo "Year is Leap Year or not";
$my_year = 2024;
{
    if ($my_year % 400 == 0) {
                echo"It is a leap year";
            }
        if ($my_year % 4 == 0) {
            echo("It is a leap year");
            } else if ($my_year % 100 == 0) {
                echo("It is not a leap year");
            } else {
                echo("It is not a leap year");
            }
        }
      break;
  case 4:
      echo "Number is eithher +ve,-ve or 0";
      $x=-10;
      if ($x > 0)
    {$message = "Positive number";}
  if ($x == 0)
    {$message = "Zero";}
  if ($x < 0)
    {$message = "Negative number";}
  echo $message."\n";
  break;
  case 5:
      echo "String is Palindrome or not";
      $input = "MADAM";
echo '<br> Input String '. $input;
$reverse = strrev($input);
echo '<br> Ouput String '. $reverse;
if($input == $reverse) {
echo '<br> '.$input.'  is a palindrome';
}
else {
echo '<br>'.$input.' is not a palindrome';
}
      break;
  default:
    echo "Invalid Choice";
}
