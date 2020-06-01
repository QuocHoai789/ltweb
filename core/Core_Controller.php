<?php
class Core_Controller{
	protected $layout;
	protected $view;
	protected $model;
	function __construct(){
		require BASE_PATH.'/core/loader/Layout_Loader.php';
		$this->layout=new Layout_Loader;
		require BASE_PATH.'/core/loader/View_Loader.php';
		$this->view=new View_Loader;
		require BASE_PATH.'/core/loader/Model_Loader.php';
		$this->model=new Model_Loader;
	}
}
?>