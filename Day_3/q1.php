
<html>

<form action='connnect.php' method='POST'>

<label> Name of student* : </label>
<input type='text' name='Name'><br><br>
<label>Marks in Each Subject </label>
<label>(* fields are mandetory)</label><br>
<label>[marks out of 100]</label><br><br>
<label>Subject 1* :</label>
<input type='float' name='sub1'><br>

<label>Subject 2* :</label>
<input type='float' name='sub2'><br>

<label>Subject 3* :</label>
<input type='float' name='sub3'><br>

<label>Subject 4* :</label>
<input type='float' name='sub4'><br>

<label>Subject 5* :</label>
<input type='float' name='sub5'><br><br>

<input type='submit' name='submit' value='Click Here for result'>

</html>

<?php

$servername="localhost";
$username="root";
$password="";
$databaseName="result";

//create connection.....
$conn=mysqli_connect($servername,$username,$password,$databaseName);

if(!$conn)
{
  echo ("Connection Failed.....".mysqli_connect_error());
}

//if connection succesfull...
  
if($conn)
{

  //refresh the page....
  header("refresh: 60");
 
  //if submitted......
  if(isset($_POST['submit']))
  {
    $name=$_POST['Name'];
    $a=$_POST['sub1'];
    $b=$_POST['sub2'];
    $c=$_POST['sub3'];
    $d=$_POST['sub4'];
    $e=$_POST['sub5'];

    echo ("<br><br>Name of student* : ".$name);
    echo ("<br><br>Marks in Each Subject <br>");
    echo "<br>Subject 1* : ".$a."<br>";
    echo "<br>Subject 2* : ".$b."<br>";
    echo "<br>Subject 3* : ".$c."<br>";
    echo "<br>Subject 4* : ".$d."<br>";
    echo "<br>Subject 5* : ".$e."<br>"."<br>";

    $total_obtained=$a+$b+$c+$d+$e;
    $total=500;
    $percentage=(($total_obtained/$total)*100);

    echo("<br>Total Marks Obtained : ".$total_obtained."<br>");
    echo("<br>Total Marks : ".$total."<br>");
    echo("<br>Percentage : ".$percentage."<br>");


$sql = "INSERT INTO class1 VALUES('','$name','$a','$b','$c','$d','$e','$total_obtained','$total','$percentage')";

if(mysqli_query($conn,$sql))
{
  echo "<br><br>Record is updated succesfully<br>";
}else{

  echo "Failed to update record...". $sql . mysqli_error($conn);
}

return 0;
}

}

mysqli_close($conn);
?>

