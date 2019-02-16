<?php

	include("conn.php");
	
// Create a date time object, which has the value of ~ two years ago
$twoYearsAgo = new DateTime("2019-01-18 ");
// Create a date time object, which has the value of ~ now
$now = new DateTime("2016-07-21 ");
var_dump($now > $twoYearsAgo); // prints bool(true)
var_dump($twoYearsAgo > $now); // prints bool(false)
var_dump($twoYearsAgo <= $twoYearsAgo); // prints bool(true)
var_dump($now == $now); // prints bool(true)

?>