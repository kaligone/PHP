<?php


$myarray = array(
                 "A"=>array(1,2,
				            8,6),
				 "B"=>array(3,4, 
				            10,11)
                );

//display first array....
echo "First array is...<br>";
echo $myarray["A"][0]."\t".$myarray["A"][1]."<br>".$myarray["A"][2]."\t".$myarray["A"][3];

//display second array...
echo "<br><br>Second array is...<br>";
echo $myarray["B"][0]."\t".$myarray["B"][1]."<br>".$myarray["B"][2]."\t".$myarray["B"][3];

echo "<br><br>Addition of two array...<br>";

//for first row....
for($i=0 ; $i<2 ; $i++)
{
	echo ($myarray["A"][$i] + $myarray["B"][$i])."\t";
	
}

echo"<br>";
//for second row..
for($i=2 ; $i<4 ; $i++)
{
	echo ($myarray["A"][$i] + $myarray["B"][$i])."\t";
	
}

?>