<?php
function load_app(){
	$config=require BASE_PATH.'/config/Config.php';
	if(!empty($_GET['module'])){
		$module=$_GET['module'];
	}
	else{
		$module=$config['default_module'];
	}
	if(!empty($_GET['action'])){
		$action=$_GET['action'];
	}
	else{
		$action=$config['default_action'];
	}
	require BASE_PATH.'/core/Core_Controller.php';
	require BASE_PATH.'/core/Base_Controller.php';
	require BASE_PATH.'/core/Core_Model.php';
	require BASE_PATH.'/core/Base_Model.php';
	$control=ucfirst($module).'_Controller';
	$control_path=APP_PATH."/controllers/{$control}.php";
	if(!file_exists($control_path)){
		exit("File not found $control");
	}
	require $control_path;
	if(!class_exists($control)){
		exit("Class not found $control");
	}
	$obj=new $control;
	if(!method_exists($obj,$action)){
		exit("Method not found");
	}
	$obj->$action();
}
?>