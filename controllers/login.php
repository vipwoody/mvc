<?php

class Login extends Controller{

	function __construct(){
		parent::__construct();
		//echo "We are in index";
	}

	function index()
	{
		$this->view->render('login/index');
	}

	function run()
	{
		$this->model->run();
	}
}