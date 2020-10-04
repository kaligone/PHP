<html>

<form action='q2.php' method='POST'>
<label>Enter the new marks of subject 5 :</label>
<input type='float' name='sub5'>
<input type='submit' name='submit' value='Click here to Update'>
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

if($conn)
{
    if(isset($_POST['submit']))
    {
        $new=$_POST['sub5'];
        $sql="UPDATE class1 SET Sub5=$new where id=5";
        mysqli_query($conn,$sql);

        //fetch data from array....
        $query="SELECT * FROM class1 where id=5";
        $result=mysqli_query($conn,$query) or die(mysqli_error());
        $row=mysqli_fetch_array($result);

        $sub1=$row[2];
        $sub2=$row[3];
        $sub3=$row[4];
        $sub4=$row[5];
        $sub5=$row[6];

        $total_obtained=($sub1+$sub2+$sub3+$sub4+$sub5);
        $total=500;
        $percentage=(($total_obtained/$total)*100);

        mysqli_query($conn,"UPDATE class1 SET Total Obtained=$total_obtained");
        mysqli_query($conn,"UPDATE class1 SET Percentage=$percentage where id=5");
    }
}

mysqli_close($conn);
?>
