<?php

$a=11;
$b=5;


/*echo $a ."<br>";  //10
$a++;
echo $a++; //11
echo "<br/>";
echo $a; //12
echo "<br/>";
echo ++$a; //13
echo "<br/>";
++$a;
echo $a; //14
echo "<br>";
$a++;
echo ++$a; //16

echo $a++;
echo "<br>";
echo ++$b;*/


echo "<h2>Arithmetic Operators</h2>";
echo "<p><b>Addition: </b>".($a+$b)."</p>";
echo "<p><b>Subtraction: </b>".($a-$b)."</p>";
echo "<p><b>Multiplication: </b>".($a*$b)."</p>";
echo "<p><b>Division: </b>".($a/$b)."</p>";
echo "<p><b>Remainder: </b>".($a%$b)."</p>";

echo "<h2>Relational Operators</h2>";
echo "<p><b>($a > $b): </b>".($a > $b)."</p>";
echo "<p><b>($a >= $b): </b>".($a >= $b)."</p>";
echo "<p><b>($a < $b): </b>".($a < $b)."</p>";
echo "<p><b>($a <= $b): </b>".($a <= $b)."</p>";
echo "<p><b>($a == $b): </b>".($a == $b)."</p>";
echo "<p><b>($a != $b): </b>".($a != $b)."</p>";


echo "<h2>Logical Operators</h2>";
echo "<p><b>($a > $b) AND ($a == 12): </b>".(($a > $b) && ($a == 12))."</p>";
echo "<p><b>($a > $b) OR ($a == 12): </b>".(($a > $b) || ($a == 12))."</p>";
echo "<p><b>!($a > $b): </b>".!($a > $b)."</p>";
echo "<p><b>($a > $b) XOR ($a == 12): </b>".(($a > $b) ^ ($a == 12))."</p>";


echo "<h2>Bitwise Operators</h2>";
echo "<p><b>($a & $b): </b>".($a & $b)."</p>";
echo "<p><b>($a | $b): </b>".($a | $b)."</p>";
echo "<p><b>~($a): </b>".~($a)."</p>";


echo "<h2>Assignment Operators</h2>";
echo "<p><b>($a += $b): </b>".($a+=$b)."</p>";   //16
echo "<p><b>($a -= $b): </b>".($a-=$b)."</p>";   //11
echo "<p><b>($a *= $b): </b>".($a*=$b)."</p>";  //55
echo "<p><b>($a /= $b): </b>".($a/=$b)."</p>";  //11
echo "<p><b>($a %= $b): </b>".($a%=$b)."</p>";  //1


$str1="Rimsha ";
$str2="student of batch 1704B1";

echo "<h2>String Operators</h2>";
echo $str1."---->".$str2;
$str1.=$str2;
echo "<br>".$str1;



echo "<h2>Error Operators</h2>";
echo "<p>Number: ".@$c."</p>";


?>