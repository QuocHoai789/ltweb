<?php
class Base_Controller extends Core_Controller{
	function renderlayout(){
		ob_start();
		$this->view->show();
		$contents=ob_get_contents();
		ob_end_clean();
		$this->layout->load(['content'=>$contents]);
	}
	function __destruct(){
		$this->renderlayout();
	}

}
?>