<?php include "header_ex2.php";
$g1 = "5";
$g2 = "4";
$g3 = "5";
?>

<h3>у сени маленькая пиписька. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using tag: Hello …., You are welcome to my site.</h3>
<form action="action.php" method="post">
    <div class="row">

        <div class="col">
            <input type="text" name="fname" required placeholder="First Name" class="form-control">
        </div>
        <div class="col">
            <input type="text" name="lname" required placeholder="Last Name" class="form-control"> <br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="date" name="bdate" placeholder="Birth Date" class="form-control">
        </div>
    </div>
    Select fav color: <input type="color" name="color"> <br>
    <input type="submit" value="Submit">
</form>
<br>
<h3>3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.</h3>

<?php
    echo "<table class='table table-striped'>
    <thead>  
      <tr>
        <th scope='col'>S.N</th>
        <th scope='col'>Name</th>
        <th scope='col'>Grade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Pekka</td>
        <td>$g1</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Johanna</td>
        <td>$g2</td>
      </tr>
      <tr>
        <td>2</td>
        <td>John</td>
        <td>$g3</td>
      </tr>
    </tbody>
  </table>"
?>
<br>

<h3>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string.</h3>
<?php
$text1 = "Hello";
$text2 = "World";
echo "<br> The first: " . $text1 .  "<br>The second: " . $text2 . "<br>The sum: ". strlen($text1 . $text2) . "<br>";
?>
<br>

<h3>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.<br></h3>
<?php 
$n1 = 298;
$n2 = 234;
$n3 = 46;

echo "298 + 234 + 46 = ";
echo $n1 + $n2 + $n3;
?>
<br>
<br>

<h3>6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER).<br></h3>
<?php
$host = $_SERVER['HTTP_USER_AGENT'];
echo $host
?>
<br>
<br>

<h3>7. Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file.<br></h3>


<?php include "footer_ex2.php"?>