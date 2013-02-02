<?php

class Help extends Controller{

	function __construct(){
		parent::__construct();
		echo "We are inside help! </br>";
	}

	public function other($arg = false) {
		echo "We are inside other </br>";
		echo "optional: " . $arg . "</br>";
	}
}