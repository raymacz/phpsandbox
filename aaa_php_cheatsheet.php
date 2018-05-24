<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// https://www.phpzag.com/commonly-used-php-functions/
// https://en.wikiversity.org/wiki/25_Essential_PHP_Functions
// https://boyter.org/2011/03/list-of-most-commonly-used-php-functions/
// https://vegibit.com/php-array-functions/

/**
 * Description of top_php_functions
 *
 * @author admin
 */


phpinfo();

echo '';
print '';
printf($format, $args);
PHP_EOL;
        
date($format, $timestamp);
getdate($timestamp);
gmdate($format);
checkdate($month, $day, $year);
mktime($hour, $minute, $second, $month, $day, $year, $is_dst);
time();
idate($format);
htmlentities($string);
htmlspecialchars($string);
strtotime($time, $now);
strftime($format, $timestamp);
microtime();
stripslashes($str);

include_once '';
require_once '';

curl_init($url);  //curl - hit a URL from your code to get a html response
curl_setopt($ch, $option, $value);
curl_exec($ch);
json_decode($json);
json_encode($value);
xml_parse($parser, $data);

create_function($args, $code);
//$x = create_function('$args', 'echo "hi! value: {$args}"; echo nl2br(" NICE!!!");'); $x("raymacz76");

preg_match($pattern, $subject);
preg_match_all($pattern, $subject, $matches);
preg_filter($pattern, $replacement, $subject);
preg_split($pattern, $subject);
split($pattern, $string);
glob($pattern);

trim($str);
rtrim($str);
urlencode($str);
urldecode($str);
parse_url($url, $component);
str_replace($search, $replace, $subject);
strlen($string);
strpos($haystack, $needle, $offset);
stripos($haystack, $needle, $offset);
strrpos($haystack, $needle);
substr($string, $start);
substr_count($haystack, $needle, $offset);
strstr($haystack, $needle);
stristr($haystack, $needle);
str_repeat($input, $multiplier);
strcmp($str1, $str2);
md5($str, $raw_output);
strtolower($string);
strtoupper($string);
ord($string);
chr($ascii);
strip_tags($str);
addslashes($str);
ucfirst($str);
ucwords($str);
var_export($expression, $return);
nl2br($string);

define($name, $value);
defined($name);

ceil($value);
floor($value);
exp($arg);
pow($base, $exp);
count($array_or_countable);
rand($min, $max);
mt_rand($min, $max);
tan($arg);
pi();
intval($var);
sin($arg);
cos($arg);
abs($number);
number_format($number);

//isset();
//empty();
is_null($var);
is_numeric($var);
is_int($var);
is_bool($var);
is_array($var);
is_object($var);
is_string($var);
is_file($filename);
is_dir($filename);
is_readable($filename);
is_writeable($filename);
is_a($object, $class_name);
settype($var, $type);
gettype($var);
constant($name);



array();
array_combine($keys, $values);
array_merge($array1);
array_multisort($array1);
array_unique($array);
array_shift($array);
array_unshift($array, $value1);
array_pop($array);
array_push($array, $value1);
array_values($array);
array_slice($array, $offset);
array_search($needle, $haystack);
array_reverse($array, $preserve_keys);
array_map($callback, $array1);
array_diff($array1, $array2);
array_values($array);
extract($array);
in_array($needle, $haystack);
array_key_exists($key, $array);
key($array);
reset($array);
end($array);
each($array);
sort($array);
ksort($array);
explode($delimiter, $string);
implode($glue, $pieces);
join($glue, $pieces);
current($array);
pos($arg);
next($array);
prev($array);
range($start, $end);



get_class($object);
get_class_methods($class_name);
class_exists($class_name);
call_user_func($callback);
method_exists($object, $method_name);
get_object_vars($object);
property_exists($class, $property);


        function_exists($function_name);
func_get_arg($arg_num);


serialize($value);
unserialize($str);
assert($assertion);
getenv($varname);
header($string);
ini_set($varname, $newvalue);
memory_get_usage();

mail($to, $subject, $message);

file($filename);
file_exists($filename);
chmod($filename, $mode);
fopen($filename, $mode);
fclose($handle);
feof($handle);
fread($handle, $length);
fwrite($handle, $string);
fgets($handle);
mkdir($pathname);
opendir($path);
gzcompress($data);
dir($directory);
readdir($dir_handle);
dirname($path);
file_get_contents($filename);
file_put_contents($filename, $data);
filemtime($filename);
filesize($filename);
unlink($filename);
link($target, $link);
dl($library);
exec($command);
stat($filename);
copy($source, $dest);
error_log($message);
realpath($path);
setcookie($name, $value);
sha1($str);

unset($a);

print_r();
var_dump($expression);

die();
exit();


//reference assignment/returns symbols 
$b = $a; // '==='
$b =& $a;
function ref_test(&$var) {};
$a =& ref_return();
function &ref_return() {return $a;};

// constructors & cloning
function __construct() {};
$a = new Clazz();
function __clone() {};
$a = clone $b;  // '=='

//server variables (server_variables.php)
$a = $_SERVER['SERVER_NAME'];

// variable_variables.php
$$a;

//Initialize array & Objects //for more info refer to 'array_object_sbox.php' sandbox
$array[] = new stdClass(array(new stdClass()));



?>