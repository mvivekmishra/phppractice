<?php
$value=array(
1,
2,
3,
4
);
$value[]=5;
print_r($value);
//$value=(int) array_values($value);
unset($value[2]);
echo '<br>';
print_r($value);
//echo $value;
echo '<hr>';
$name=array('vivek','mishra','ucid-vm368');
echo "first name: $name[0]";
echo '<br>';
echo "first name: {$name[0]}";
echo '<br>';
print_r($name);
unset($name[1]);
echo '<br>';
print_r($name);
echo '<hr>';
echo 'for udate index value';
$name=array_values($name);
print_r($name);
echo '<hr>';
$numbers=array();
for ($i=0;$i<5;$i++)
{
	$numbers[]=mt_rand(1,20);
	echo '<br>';
	print_r($numbers);
}
echo '<br>';
echo $numbers[2];
echo '<hr>';
$number_string= array('a','b','c');
$k=count($number_string);
echo $k;
echo '<br>';
print_r($number_string);
echo '<hr>';
$prices=array(10,20,30,40,50);
$sum=0;
for ($k=0; $k<count($prices);$k++)
{
	$sum += $prices[$k];
}
echo $sum;
echo '<br>';
$avg= $sum / count($prices);
echo $avg;
echo '<br>';
foreach($prices as $z);
echo $z;



?>
