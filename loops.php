<?php

echo "<ul>";

for ($i=1; $i <=10 ; $i++)
 { 
	echo "<li>" .$i."</li>"; 

}

echo "</ul>";

$x=10;

$mul=1;
$sum=0;

while ($x >0) {

$mul*=$x;
$sum+=$x;

$x--;
}


echo "<p>multilication result: ".$mul."</p>";
echo "<p>addition result: ".$sum."</p>";

$a=10;
$c=1;


do
{
if ($c==5) {
	break;
}

echo "<p>Do while loop of even number: ".$a."</p>";
$a+=2;
$c++;

}
while ($a%2==0);


?>