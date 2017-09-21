<?php
$first_name='vivek@vm368';
$last_name="mishra";
echo "name: $first_name";
echo '</br> name: $last_name';
# first name and last name print with . [ concatination ]
$name=$first_name . ' ' . $last_name;
echo "</br>$name";
$x= 14;
$y=15;
$z=$x+$y;
$z++;
echo "</br>$z";
$z+=$z;
$z+=1;
echo "</br>$z";
$name1 = 'v';
echo "<br>";
$name1.= 'mishra';
echo "</br>$name1";
$massage = 'months: ';
$months = 20;
$massage .= $months;
echo "</br> $massage";
$no_for= number_format(10000,2);
echo "</br>$no_for";
$date= date('m/d/y');
echo $date;
echo "</br>";
echo $z;
$str="harrison";
echo "<br>";
echo $str;
echo $first_name;
define("vivek", "NJIT");
echo vivek;

$a = 1;

do {
    echo "The number is: $a <br>";
    $a++;
} while ($a <= 5);
define("MINSIZE", 50);
   
   echo MINSIZE;
   echo "<br>";
   echo constant("MINSIZE"); 
   
   
?>
