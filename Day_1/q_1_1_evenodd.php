<?php

$numbers = array(11,23,72,44);
for($i=0 ; $i<4 ; $i++)
{
  if($numbers[$i]%2==0)
  {
    echo "The number ".$numbers[$i]." is an even number.<br><br>";
  }
  else
  {
    echo "The number ".$numbers[$i]." is an odd number.<br><br>";
  }
}

?>
