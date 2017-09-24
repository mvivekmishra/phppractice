<?php
$name='abcdef 12345 6789 111';
$x=strpos($name, 'ef'); 
echo $x;
echo '<br>';
$y = strpos($name, ' ',10);
echo $y;
echo '<hr>';
$z =strrpos($name, ' ');
echo $z;
echo '<hr>';
$k = stripos($name, '111');
echo $k;
echo '<hr>';
$j= strripos($name, '9');
echo '<hr>';
$i=strpos($name, ' ');
echo $i;
echo '<br>';
if ($i===false) // i can write function for position and if condition is true it gonna display msg
{
	$message= 'no space found';
	echo $message;
}else {
	$first_str= substr($name,0,$i);
	echo $first_str;
	echo '<br>';
    $next_str= substr($name, $i+1);
	echo '<br>';
	echo $next_str;
	}
	echo '<hr>';
	
	$phone= '862.256.9596';
	echo '<br>';
	echo $phone;
	$phone= str_replace('.','_',$phone);
	echo '<br>';
	echo $phone;
	
		
?>

