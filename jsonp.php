<?php
	//远程端https://shx123.github.io/test/jsonp.php
	$_arr=array('a'=>1,'b'=>2,'c'=>3);
	$_result=json_encode($_arr);
	$_callback=$_GET['callback'];
	echo $_callback."($_result)";
?>