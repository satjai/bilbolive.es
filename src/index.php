<?php  
 
// error_reporting(E_ALL ^ E_NOTICE);
print_r("1104");
if($_GET['controller'] ==''){$controller = 'Index';}else{$controller = $_GET['controller'];}
if($_GET['task'] ==''){$task = 'display';}else{$task = $_GET['task'];}
//if($_GET['vista'] ==''){$vista = 'vista';}else{$vista = $_GET['vista'];}

 $path = './Controllers/'.$controller.'Controller.php';
 if(file_exists($path)) {
	require_once($path);
	$classname = $controller.'controller';
	$controller = new $classname();
	$controller->$task();
}  
?>