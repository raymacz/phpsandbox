<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>


<html>
	<head>
		<title>Variable Variables</title>
	</head>
	<body>
	<?php
        // code here
//        include_once 'aaa_array_object_sbox.php';
//        include_once 'array_insertion.php';
//        include_once 'string_to_array.php';
//        include_once 'mobile_phone.php';


        // $x = create_function('$args', 'echo "hi! value: {$args}"; echo nl2br(" NICE!!!");'); 
        // $x("raymacz76");
        class Foo {private $foo;protected $bar;public $test;public function  __construct(){$this->foo = 1;$this->bar = 2;$this ->test = 3;}}print_r(   (array) new Foo );
        echo '<br>';
        $i = 016;echo $i /2;
//        mail();
        
//        array_merge(); //insert an item $item into the specified position
//        array_slice();
//        $V = MYSQL_BOTH;
        
        function abc(){return __FUNCTION__;}  function xyz(){return abc();} echo xyz();
        echo '<br>';
        
//        is_readable($filename);        file_exists($filename); 
//        is_file_exists(); // ??? not sure
        
        class A {public static function foo() {static::who();}
        public static function who(){echo __CLASS__."\n";}}class B extends A {public static function test(){A::foo();parent::foo();self::foo();}public static function who() {echo __CLASS__. “\n”;}}Class C extends B {public static function who(){echo __CLASS__."\n";}}C::test();
        echo '<br>';
        
        
        $e=new Exception;var_dump($e->getTraceAsString());
        echo '<br>';
        
//        mail($to, $subject, $message, $additional_headers);
        
//        curl_setopt($ch, $i, $e);
        
        $var=300; 
        $int_options  = array("options"=>array("min_range"=>0,"max_range"=>256));
        if(!filter_var($var,FILTER_VALIDATE_INT, $int_options))echo("Integer is not valid"); else echo("Integer is valid");
        
//        fgetss($handle, $var, $allowable_tags);
        
//        class BaseClass {public function test() {echo "BaseClass::test() called\n";}
//        final public function moreTesting() {echo "BaseClass::moreTesting() called \n";}}
//        class ChildClass extends BaseClass {public function moretesting(){echo "{ChildClass::moreTesting()} called\n";}}
//        $obj = new ChildClass;$obj->moreTesting();
        
        $recipients = array("recipient1@domain.com","receipient2@domain.com");
//        mail($recipients,$subject,$messege,$headers);
        
//        getLine();
         echo '<br>';
        function y($v) {echo $v;}
        $w = "y";
        $w("z");
        $w = "x";
 
        class ExampleClass{public $val = 5 ;function &getValNum(){return $this->val;}}
        
        echo '<br>test';
        $xxx= "xxzxvcz";
        var_dump(md5($xxx));
        var_dump(sha1($xxx));
        var_dump(crc32($xxx));
        
        echo '<br>30 * 5 . 7 >>';
        echo 30 * 5 . 7;

        echo '<br>';
        $_SERVER['REMOTE_ADDR'];
        
        echo '<br>insurance ';
        class Insurance
          {
           function clsName()
            {
              echo get_class($this);
            }
          }
          
        $cl = new Insurance();
        $cl->clsName();
//      Insurance::clsName();
        
         echo '<br>array_search ';
         $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
         echo array_search('green', $array);
                  
         
        echo '<br>filesize: ';
        $size=  filesize('upwork.php');
        echo ($size);
         
        echo '<br>: assert ';
        print "Stage 1\n";
        assert(1 == 1);
        print "Stage 2\n";
//        assert(1 == 2);
        print "Stage 3\n";
         
        function assert_failed($file, $line, $expr) {
            print "Assertion failed in $file on line $line: $expr\n";
        }

        assert_options (ASSERT_CALLBACK, 'assert_failed');
        assert_options (ASSERT_WARNING, 0);

        $foo = 11;
        $bar = 11;
        assert('$foo > $bar');
         
        echo '<br>: array ';
        $arr = array("foo",
             "bar",
             "baz");
        for ($i = 0; $i < count($arr); $i++) { 
          $item = $arr[$i]; 
        }
        echo "<pre>";
        print_r($item);
        echo "</pre>";
         
        echo '<br>: session ';

        session_start();
        if (session_id()) echo 'session started';
	
        
        echo '<br> error handler: ';    
//        set_error_handler();
        
        echo '<br> curl : ';  
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        
        
    
        echo '<br> chr() value: '.chr(64); 
        echo mb_convert_encoding('&plusmn '.'&#177', 'UTF-8', 'HTML-ENTITIES');
        
        echo '<br> array: '; 
        $animals = array ("Cat", "Dog", "Horse");
        print_r($animals);
        
        ?>
	</body>
</html>