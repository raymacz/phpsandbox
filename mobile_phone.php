<?php


//This is a US phone formatter that works on more versions of numbers than any of the current answers.
// https://stackoverflow.com/questions/4708248/formatting-phone-numbers-in-php

$numbers = explode("\n", '(111) 222-3333
((111) 222-3333
1112223333
111 222-3333
111-222-3333
(111)2223333
+11234567890
    1-8002353551
    123-456-7890   -Hello!
+1 - 1234567890 
');

$numbers =  explode("\n",'+1 562-924-7263');

foreach($numbers as $number)
{
    print preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $number). "\n";
}        
        

$from = "tel:0001234567890";
$from = "tel:0012223334444";
$from = "+11234567890";         
$from = "+12223334444";
             
$to1 = sprintf("%s-%s-%s",
              substr($from, 2, 3),
              substr($from, 5, 3),
              substr($from, 8));
$to2 = sprintf("tel:%s%s%s",
              substr($from, 2, 3),
              substr($from, 5, 3),
              substr($from, 8));

print "<br>".$to1;
print "<br>".$to2;

?>