<?php $title = "Exercise 4";
include "header_ex2.php"?>


<h3>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not.</h3>
<?php
$d = date("F");

if ($d == "August") {
    echo "It's $d, so it's still holiday.";
}
else {
    echo "Not August, this is $d so I don't have any holidays.";
}
?>
<br>

<h3>2. Assign colour red to a variable name $color and check to print one the following responses.</h3>
<?php
$color = "red";

if ($color == "red"){
    echo "The color is red.";
}
else {
    echo "The color is not red.";
}
?>
<br>

<h3>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h3>
<?php
$grade = 81;

if ($grade > 80) {
    echo "Excellent";
}
else if ($grade <= 80 && $grade > 70) {
    echo "Great";
}
else if ($grade <= 70 && $grade > 60) {
    echo "Good";
}
else if ($grade <= 60 && $grade > 50) {
    echo "Pass";
}
else {
    echo "Fail";
}
?>
<br>












<?php include "footer_ex2.php" ?>