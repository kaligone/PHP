<?php

$num_1=readline("Enter the first number...");
$num_2=readline("Enter the second number...");
if($num_1==$num_2)
{
   echo "The numbers are same... <br>";
}
else
{
   if($num_1>$num_2)
   {
      echo $num_1." is greater than than ".$num_2."<br>";
   }
   else
   {
      echo $num_1." is smaller than than ".$num_2."<br>";
   }
}

?>
