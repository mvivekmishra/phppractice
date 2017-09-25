<?php
$name='abcdef 12345 6789 111';
echo 'String position Function: ' .'<br>';
$x=strpos($name, 'ef'); 
echo $x;
echo '<br>';
$y = strpos($name, ' ',10);
echo $y;
echo '<hr>';
echo ' function with reverse search :'.'<br>';
$z =strrpos($name, ' ');
echo 'space is at :' .$z. '<br>';
echo '<hr>';
echo 'Funtion String position - Case insenseitive :';
$k = stripos($name, '111');
echo ' Position is at :'.$k;
echo '<hr>';
echo ' Case sensitive: ';
echo '<br>';
$j= strripos($name, '9');
echo $j;
echo '<hr>';
echo 'Funtion Sub str:' .'<br>';
$i=strpos($name, ' ');
echo 'space is at :';
echo $i;
echo '<br>';
if ($i===false) // i can write function for position and if condition is true it gonna display msg
{
	$message= 'no space found';
	echo $message;
}else {
	$first_str= substr($name,0,$i);
	echo 'First Sub str:  ';
	echo $first_str;
	echo '<br>';
    $next_str= substr($name, $i+1);
	echo ' Second Str:';
	echo $next_str;
	}
	echo '<hr>';
	echo 'Function For replace :';
	echo '<br>';
	echo 'My mob no. :'; 
	$phone= '862.256.9596';
	echo '<br>';
	echo $phone;
	$phone= str_replace('.','_',$phone);
	echo '<br>';
	echo 'After . replaced by _ :'.'<br>';
	echo $phone;
	echo '<hr>';
	echo ' Lower to upper :'.'<br>';
	$name_upper= strtoupper($name);
	echo 'Lower string is: ' .$name .'<br>';
	echo $name_upper;
	echo '<hr>';
	echo 'String reverse Function :  '.'<br>';
	$name_rev= strrev($name);
	echo 'reverse string is  : ' . $name_rev.'<br>';
	echo '<hr>';
	echo 'string tto array with explode :  '. '<br>';
	$str_array= explode(' ', $name);
	print_r($str_array);
	echo '<br>';
	echo 'first value in array at position 0 :  ' .$name[0];
	echo '<hr>';
	$str_new=array(1,2,3,4,5);
	echo 'New Function - implode :  ' . implode('|',$str_new). '<br>';
	echo ' New String from array is : ' .implode(' ', $str_new).'<br>';
	
?>

