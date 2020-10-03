<html>

<label><h4>Enter the sides of triangle and click on result..</h4></label>

<form action='q6_1_special_variables_html.php' method='GET' >

<label for='First_side'><b>First side</b></label>

<input type='integer' name='First_side'><br><br>

<label for='Second_side'><b>Second side</b></label>

<input type='integer' name='Second_side'><br><br>

<label for='Third_side'><b>Third side</b></label>

<input type='integer' name='Third_side'><br><br>

<input type='submit' name='submit' value='result'>

</form>

</html>

<?php

if(isset($_GET['submit']))
{
$first = $_GET['First_side'];
$second = $_GET['Second_side'];
$third = $_GET['Third_side'];


if($first==$second && $second==$third)
{
  	echo ("The Triangle is Equilateral triangle....<br>");
}
else
if(($first==$second) || ($second==$third) || ($third==$first))
{
  	echo ("The Triangle is isosceles triangle....");
}
else
if(($first !=$second) || ($second !=$third) || ($first!=$third))
{
  	echo ("The Triangle is Scalene or right angle triangle....");
}

return 0;
}

?>