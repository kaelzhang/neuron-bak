<?php

$a = $_GET['a'];
$b = $_GET['b'];
$cb = $_GET['callback'];

echo $cb . '(';
echo json_encode(array(
	'a' => 'abc',
	'b' => 2,
	'c' => array(
		'a' => 1
	),
	
	'd' => array(1,2,3,4),
	
	'sum' => $a + $b
));
echo ');';

?>