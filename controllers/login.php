<?php

class Login extends Controller{

	function __construct(){
		parent::__construct();
		//echo "We are in index";

		$this->view->render('login/index');
	}
}