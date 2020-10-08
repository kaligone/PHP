<html>

<form action='q2_string_functions.php' method='POST'>
Enter any random string : <input type='text' name='string'><br><br>
<input type='submit' name='submit' value='Click here for result'>


</html>

<?php
    header("refresh: 60");
    if(isset($_POST['submit']))
    {
      $str=$_POST['string'];

      //counting total number of element in string...
      echo ("<br><br>Total no of Characters in string are : ".strlen($str));

      //converting string into array.......
      $str_arr=explode("  ",$str);

      //reversing the string....
      $rev_str=strrev($str);
      echo "<br><br> The reverse of string  : ".$rev_str;

      //converting all letters to lowercase.....
      $low_str=strtolower($str);
      echo "<br><br> The string in lower case  : ".$low_str;

      //converting all letter to uppercase......
      $upp_str=strtoupper($str);
      echo "<br><br> The string in lower case  : ".$upp_str;

      //replacing the content of substring in to original string.....
      $substr=" Hola My name is Alex ";
      $result=substr_replace($str,$substr,0);
      echo "<br><br>Replaced string : ".$result;

    }
?>
