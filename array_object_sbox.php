<?php

/* 
 * A simple sandbox. https://stackoverflow.com/questions/1738865/initialize-objects-like-arrays-in-php
 */
?>

<html>
	<head>
		<title>Variable Variables</title>
	</head>
	<body>
	<?php
        // code here
        //include_once 'variable_variables.php';
        $arrayz[] = new stdClass();
        //        var_dump($arrayz);
        
 // ------------------------------------- Multiple ways to initialize #1 ------------------------       
        
        // #1 ------------------
        class myObj {
            public $objprop;

            public function  __construct($property) {
              $this->objprop = $property;
            }
        }
            $ListOfObj[] = new myObj(array(1,'a','str')); 
            $ListOfObj[1] = new myObj(array(2,'a','str')); 
            $ListOfObj[] = new myObj(array(3,'a','str')); 
            $ListOfObj[1] = new myObj(array(4,'a','str'));  //printme
            $ListOfObj['bonus'] = new myObj(array(4,'a','bonus' => 'str')); 
//            var_dump($ListOfObj); // #1
            
            
        // #2 ------------------    
            $LObj = [
                0 => (object) [ 
                    0 => 1,
                    1 => 'a',
                    3 => 'str',
                    ],
                1 => (object) [ 
                    0 => 2,
                    1 => 'a',
                    3 => 'str',
                    ],
                2 => (object) [ 
                    0 => 3,
                    1 => 'a',
                    3 => 'str',
                    ],
                1 => (object) [ 
                    0 => 4, //printme
                    1 => 'a',
                    3 => 'str',
                    ],
                'bonus' => (object) [ 
                    0 => '4',
                    '1' => 1,
                    'bonus' => 'str',
                    ],
                ];
//                var_dump($LObj);  // #2
            
// ------- to print a certain single value of an array object.            
            $x = array();
            foreach ($ListOfObj as $k => $v) {
//               var_dump($v);
                $y[] = $v->objprop[0];
                $x[] = $v->objprop;
            }
//            var_dump($x);
//            print "<pre>";
//            echo $y[1]; //#1
//            echo $x[3]['bonus'];    

            echo "<br />";
            
//            echo $ListOfObj[1]->objprop[0];       //#2
//            echo $ListOfObj['bonus']->objprop['bonus'];
//            print "</pre>";            
            echo "<br />";  
//            echo $LObj[1];
            var_dump($LObj['bonus']);
//            echo $LObj['bonus']->0; // #1 how do you display '4' value?  // problem #1
//            echo $LObj['bonus']->1; // #2 how do you display 1 value?    // problem #2
            echo $LObj['bonus']->bonus;  echo "<br />";   // #3 like this  
            
            echo array_values((array)$LObj['bonus'])[2]; echo "<br />";    // solution #1        
            $LObj = json_decode(json_encode($LObj), true);  
//            var_dump($LObj);
            print $LObj['bonus']['bonus'];     echo "<br />";            // solution #2    
            // I want to display each #1, #2, #3 using a single line w/o using any loop (like foreach)
            // #3 is displayed correctly, problem is #1 & #2. 
            
// ------------------------------------- Multiple ways to initialize #2 ------------------------                   
            
  /*
   * now 3 ways since 5.4 to produce the same php stdClass ,
   */          
            $object0 = new stdClass;
                $object0->member1 = "hello, I'm 1";
                $object0->member1o = new stdClass;
                $object0->member1o->member1 = "hello, I'm 1o.1";
                $object0->member2 = "hello, I'm 2";
            
            $object1 = (object)array(
                'member1' => "hello, I'm 1",
                'member1o' => (object)array(
                    'member1' => "hello, I'm 1o.1",
                ),
                'member2' => "hello, I'm 2",
           );
            $object2 = (object)[
                'member1' => "hello, I'm 1",
                'member1o' => (object)['member1' => "hello, I'm 1o.1"],
                'member2' => "hello, I'm 2",
            ];
//           var_dump($object0);  //#1
//           var_dump($object1);  //#2
//           var_dump($object2);  //#3
//            echo "<br />";
//            echo $object2->member1o->member1;
            
            
            
	?>
	</body>
</html>