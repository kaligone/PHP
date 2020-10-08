<?php
$servername="localhost";
$username="root";
$password="";
$databaseName="visitor_count";

//create connection.....
$conn=mysqli_connect($servername,$username,$password,$databaseName);

if(!$conn)
{
  echo ("Connection Failed.....".mysqli_connect_error());
}

if($conn)
{
   //for each visits no og visits will be incremented by one...
   $sql="UPDATE counter SET visits=visits+1 where id =1";
   mysqli_query($conn,$sql);

   //accessiing the content.........
   $result= mysqli_query($conn,"SELECT * FROM counter where id=1") or die(mysqli_error());
   $row=mysqli_fetch_array($result);
   $Total_no_of_visitors=$row[1];

}

?>


//HTML code.......

<!doctype html>
<html lang="en">
    <body>
        Total No of Visitors: <?php print $Total_no_of_visitors; ?>
    </body>
</html>
