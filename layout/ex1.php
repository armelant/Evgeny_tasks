<?php
$title = "Exercise 1";
 include "header.php" ?>
    <h3>3.1 Write a simple PHP script to print your information (Name and your groupid)</h3>
<?php
//opening tag
echo "Evgeny Gumenyuk<br>";
echo "BBCAP22";
?>
<h3>3.2 Write PHP code to display the following message</h3>

<?php
echo "Hello world! My name is \"Evgeny\"";
?>
<h3>3.3 Write the PHP code in to display the current date</h3>

<?php
echo date("d.m.Y")
?>
<h3>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document</h3>

<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1. "</h1>";
?>


<h3>3.5 Table</h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table>
<tr>
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>
<tr>
<td> 1 </td><td> Pekka </td> <td> $g1 </td>
</tr>
<tr>
<td> 2 </td><td> Johanna </td> <td> $g2 </td>
</tr>
<tr>
<td> 3 </td><td> John </td> <td> $g3 </td>
</tr>
</table>
";
?>

<h3>4 Screenshot</h3>
<img style="width: 100%" src="image.png" alt="i1"

<?php include "footer.php" ?>

