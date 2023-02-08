<?php $title = "Exercise 4";
include "header_ex2.php"?>


<h4>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not.</h4>
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

<h4>2. Assign colour red to a variable name $color and check to print one the following responses.</h4>
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

<h4>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h4>
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

<h4>
4. Write a program to get inputs (age and name) from the user and based on their age, 
decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)
</h4>

<form method="post" class="was-validated">

<div class="row" style="margin: 0">
<div class="col-md-5" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="fname" placeholder="Your first name" id="firstName" required></input>
  <label for="firstName">First Name</label>
  <div class="invalid-feedback">
      Please provide name.
  </div>
</div>
</div>

<div class="col-md-5" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input class="form-control" name="lname" placeholder="Your last name" id="lastName" required></input>
  <label for="lastName">Last Name</label>
  <div class="invalid-feedback">
      Please provide last name.
  </div>
</div>
</div>
<div class="col-md-2" style="padding-left: 0; padding-right:10px">
<div class="form-floating">
  <input type="number" class="form-control" name="age" placeholder="Your last name" id="age" required></input>
  <label for="age">Age</label>
  <div class="invalid-feedback">
      Please provide age.
  </div>
</div>
</div>
</div>

<button type="submit" class="btn btn-primary" style="margin-top: 5px">Submit</button>

</form>

<?php 
if ($_POST) {
    if($_POST["age"] >= 18){
        echo $_POST["fname"] . " " . $_POST["lname"] . " is eligible for voting.";
    }
    else {
        echo $_POST["fname"] . " " . $_POST["lname"] . " is not eligible for voting yet.";
    }
}
?>

<h4>
5. Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Google Chrome...
</h4>

<?php
$popular_browsers = ["Opera", "Edg", "Chrome", "Safari", "Firefox", "MSIE"];

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_browser = 'Other less popular browsers';
foreach ($popular_browsers as $browser) {
    if (strpos($user_agent, $browser) !== false) {
        $user_browser = $browser;
        break;
    }
}

switch ($user_browser) {
    case 'Chrome':
        $user_browser = 'Chrome';
        break;
    case 'Safari':
        $user_browser = 'Safari';
        break;
    case 'Edg':
        $user_browser = 'Microsoft Edge';
        break;
}

echo "Your browser: " . $user_browser;

?>
<?php include "footer_ex2.php" ?>