<html>

<form action='q1_md5.php' method="POST">
<style>
     #login{
       color: green;
       background-color: lightgray;
       text-shadow: 1px 1px black;
       border-top: 2px solid black;
       position: fixed;
       border-bottom: 2px solid black;
       position:fixed;
       border-right: 2px solid black;
       position: fixed;
       border-left: 2px solid black;
       position: fixed;
       left: 10%

       }
      #page{
        background-color: lightblue;
      }
      #credental{
           border-top: 4px dotted black;
           position: fixed;
           top: 10%;
           border-bottom: 4px dotted black;
           position: fixed;
           border-left: 4px dotted black;
           position: fixed;
           left: 10%;
           border-right: 4px dotted black;
           position: fixed;
           right: 50%;

      }


</style>
<body id="page">
<h2 id="login" >LOGIN</h2>
<div id="credental">
<pre><h4>USERNAME :</h4> <input type='text' name='username'></pre>
<pre><h4>PASSWORD :</h4> <input type='password' name='password'></pre>
<pre><input type='submit' name='submit' value="login"></pre>

</div>

</body>
</html>


<?php

$servername="localhost";
$username="root";
$password="";
$databaseName="data1";

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
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        mysqli_query($conn,"INSERT INTO user_details values(' ','$username','$password')");
    }
    return 0;
}


mysqli_close($conn);
?>
