<?php
echo ' araay concepts'.'<br>';
$value=array(
1,
2,
3,
4
);
$value[]=5;
echo 'Display Method '.'<br>';
print_r($value);
echo '<hr>';
echo 'Function UNSET'.'<br>';
unset($value[2]);
echo '<br>';
print_r($value);
echo '<hr>';
echo 'FUNCTION FOREACH'.'<br>';
foreach($value as $ele)
echo $ele;
echo '<hr>';
echo 'Associative Array' .'<br>';
$name=array('vivek' => 601,'mishra' => 603,'ucid-vm368' => 661);
echo 'first name value:'. $name['vivek'].'<br>';
echo '<hr>';
echo 'Function count '. '<br>';
echo 'no of elements:'. count($name).'<br>';
echo '<br>';
print_r($name);
echo '<br>';
//print_r($name);
echo '<hr>';
echo 'Function Array_Values '.'<br>';
echo 'for udate index value';
$name=array_values($name);
print_r($name);
echo '<hr>';
echo 'rand function '.'<br>';
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
echo 'Filled Function :' .'<br>';
$number_count_new= array_fill(0,6,2);
for ($m=0;$m<count($number_count_new);$m++)
{
	echo 'Filled array with 2: ' . $number_count_new[$m].'<br>';
}
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
echo '<hr>';
echo 'Merge Function'.'<br>';
$new_array= array_merge($prices, $number_string);
print_r($new_array);
echo '<br>';
$avg= $sum / count($prices);
echo $avg;
echo '<br>';
foreach($prices as $z);
echo $z;
echo '<hr>';
echo ' Reverse Function :'.'<br>';
$reverse_array= array_reverse($new_array);
print_r($reverse_array);



?>
