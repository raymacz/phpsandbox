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
        include_once 'aaa_array_object_sbox.php';

        $x = create_function('$args', 'echo "hi! value: {$args}"; echo nl2br(" NICE!!!");'); 
        $x("raymacz76");
	?> 
	</body>
</html>