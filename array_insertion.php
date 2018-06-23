<?php

/* 
 * array insertion into an associative array
 */

$array = array(
    'zero'  => '0',
    'one'   => '1',
    'two'   => '2',
    'three' => '3',
  );
  $a =  array_slice($array, 0, 3, true);
  $b =  array("my_key" => "my_value"); 
  $c =  array_slice($array, 3, count($array) - 1, true);    
  $res = $a + $b  + $c;
  print_r($res);