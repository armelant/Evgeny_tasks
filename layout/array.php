<?php include "header_ex2.php" ?>

<h3>1. Write a php script to display courses as list.</h3>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");

$n1 = count($courses);
for ($i = 0; $i < $n1; $i++){
    echo "<li> $courses[$i] </li>";
}
?>
<br>

<h3>2. Delete an element from the array below.</h3>
<?php
$courses1=array("PHP","HTML","JavaScript", "CMS", "Project");
unset($courses1[1]);
$courses1 = array_values($courses1);
// var_dump($courses1);

$n2 = count($courses1);
for ($i = 0; $i < $n2; $i++) {
    echo "$courses1[$i] <br>";
}
?>
<br>

<h3>3. Sort the following array.</h3>
<h5>a) Ascending order sort by Value.</h5>
<?php

$courses3=array("1 " => "PHP", "2 " => "HTML", "3 " => "JavaScript", "4 " => "CMS", "5 " => "Project");
asort($courses3);
foreach ($courses3 as $c => $c_value){
    echo $c . $c_value . "<br>";
}

?><br>


<h5>b) Ascending order sort by Key.</h5>
<?php

$courses3=array("1 " => "PHP", "2 " => "HTML", "3 " => "JavaScript", "4 " => "CMS", "5 " => "Project");
ksort($courses3);
foreach ($courses3 as $c => $c_value){
    echo $c . $c_value . "<br>";
}

?><br>

<h5>c) Descending order sort by Value.</h5>
<?php

$courses3=array("1 " => "PHP", "2 " => "HTML", "3 " => "JavaScript", "4 " => "CMS", "5 " => "Project");
arsort($courses3);
foreach ($courses3 as $c => $c_value){
    echo $c . $c_value . "<br>";
}

?><br>

<h5>d) Descending order sort by Key.</h5>
<?php

$courses3=array("1 " => "PHP", "2 " => "HTML", "3 " => "JavaScript", "4 " => "CMS", "5 " => "Project");
krsort($courses3);
foreach ($courses3 as $c => $c_value){
    echo $c . $c_value . "<br>";
}

?><br>

<h3>4. Change the following array's all values to upper case.</h3>
<?php
$courses4=array("php", "html", "javascript", "cms", "project");
$n4 = count($courses4);

for ($i = 0; $i < $n4; $i++) {
    echo mb_strtoupper($courses4[$i]). "<br>";
}
?><br>

<h3>5. List all your favorite colors and their hexadecimal equivalents.</h3>
<?php 
$colors = array (
    "Red :" => "#FF0000",
    "Green: " => "#00FF00",
    "Blue :" => "#0000FF"
);
foreach ($colors as $key => $value) {
    echo "$key \t $value <br>";
}
?>
<br>

<h3>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h3>
<?php
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>
<?php include "footer_ex2.php" ?>


